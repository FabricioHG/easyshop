<?php

namespace Drupal\commerce_shipping\EventSubscriber;

use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_promotion\Entity\CouponInterface;
use Drupal\commerce_promotion\Entity\PromotionInterface;
use Drupal\commerce_promotion\Plugin\Commerce\PromotionOffer\CombinationOfferInterface;
use Drupal\commerce_promotion\PromotionOfferManager;
use Drupal\commerce_shipping\Event\ShippingEvents;
use Drupal\commerce_shipping\Event\ShippingRatesEvent;
use Drupal\commerce_shipping\Plugin\Commerce\PromotionOffer\ShipmentPromotionOfferInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Applies display-inclusive promotions to the calculated shipping rates.
 */
class PromotionSubscriber implements EventSubscriberInterface {

  /**
   * The promotion storage.
   *
   * @var \Drupal\commerce_promotion\PromotionStorageInterface
   */
  protected $promotionStorage;

  /**
   * THe offer manager.
   *
   * @var \Drupal\commerce_promotion\PromotionOfferManager
   */
  protected $offerManager;

  /**
   * Constructs a new PromotionSubscriber object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\commerce_promotion\PromotionOfferManager $offer_manager
   *   The offer manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, PromotionOfferManager $offer_manager) {
    $this->promotionStorage = $entity_type_manager->getStorage('commerce_promotion');
    $this->offerManager = $offer_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    return [
      ShippingEvents::SHIPPING_RATES => 'onCalculate',
    ];
  }

  /**
   * Applies the promotions.
   *
   * @param \Drupal\commerce_shipping\Event\ShippingRatesEvent $event
   *   The event.
   */
  public function onCalculate(ShippingRatesEvent $event) {
    $rates = $event->getRates();
    if (empty($rates)) {
      return;
    }
    $shipping_method = $event->getShippingMethod();
    $shipment = $event->getShipment();
    $order = $shipment->getOrder();
    $promotions = $this->getPromotions($order);
    if (empty($promotions)) {
      return;
    }

    // Clone the entities to avoid modifying the original data.
    $fake_shipment = $shipment->createDuplicate();
    $fake_order = $order->createDuplicate();
    $fake_order->set('shipments', [$fake_shipment]);
    // Re-fetch the shipment to acquire a reference.
    /** @var \Drupal\commerce_shipping\Entity\ShipmentInterface[] $fake_shipments */
    $fake_shipments = $fake_order->get('shipments')->referencedEntities();
    $fake_shipment = reset($fake_shipments);
    $fake_shipment->order_id->entity = $fake_order;
    // Calculate the discounted amounts.
    foreach ($rates as $rate) {
      $shipping_method->getPlugin()->selectRate($fake_shipment, $rate);
      $pre_promotion_amount = $fake_shipment->getAmount();
      $fake_shipment->clearAdjustments();
      foreach ($promotions as $promotion) {
        if ($promotion->applies($fake_order)) {
          $promotion->apply($fake_order);
        }
      }
      $rate->setPrePromotionAmount($pre_promotion_amount);
      $rate->setAmount($fake_shipment->getAmount());
    }
  }

  /**
   * Gets the display-inclusive shipping promotions for the given order.
   *
   * This includes both automatic and coupon-based promotions.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *   The order.
   *
   * @return \Drupal\commerce_promotion\Entity\PromotionInterface[]
   *   The promotions.
   */
  protected function getPromotions(OrderInterface $order) {
    $offer_ids = $this->getOfferIds();
    if (!$offer_ids) {
      return [];
    }
    $promotions = $this->promotionStorage->loadAvailable($order, $offer_ids);
    $coupons = $this->getCoupons($order, $offer_ids);
    foreach ($coupons as $coupon) {
      $promotion = $coupon->getPromotion();
      $promotions[$promotion->id()] = $promotion;
    }
    $promotions = array_filter($promotions, function (PromotionInterface $promotion) {
      $offer = $promotion->getOffer();
      // If this is a combination offer, check if there is a display inclusive
      // shipment promotion offer configured.
      if ($offer instanceof CombinationOfferInterface) {
        foreach ($offer->getOffers() as $configured_offer) {
          if (!$configured_offer instanceof ShipmentPromotionOfferInterface) {
            continue;
          }
          if ($configured_offer->isDisplayInclusive()) {
            return TRUE;
          }
        }

        return FALSE;
      }
      assert($offer instanceof ShipmentPromotionOfferInterface);

      return $offer->isDisplayInclusive();
    });

    return $promotions;
  }

  /**
   * Gets the shipping coupons for the given order.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *   The order.
   * @param string[] $offer_ids
   *   The shipping offer IDs.
   *
   * @return \Drupal\commerce_promotion\Entity\CouponInterface[]
   *   The coupons.
   */
  protected function getCoupons(OrderInterface $order, array $offer_ids) {
    $coupons = $order->get('coupons')->referencedEntities();
    $coupons = array_filter($coupons, function (CouponInterface $coupon) use ($offer_ids) {
      return in_array($coupon->getPromotion()->getOffer()->getPluginId(), $offer_ids);
    });

    return $coupons;
  }

  /**
   * Gets the shipping offer IDs.
   *
   * @return string[]
   *   The offer IDs.
   */
  protected function getOfferIds() {
    $definitions = $this->offerManager->getDefinitions();
    $definitions = array_filter($definitions, function ($definition) {
      return is_subclass_of($definition['class'], ShipmentPromotionOfferInterface::class) ||
        is_subclass_of($definition['class'], CombinationOfferInterface::class);
    });
    $offer_ids = array_keys($definitions);

    return $offer_ids;
  }

}
