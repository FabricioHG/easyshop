<?php

namespace Drupal\ga4_google_analytics\Form;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Component\Plugin\Exception\PluginException;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin configuration form.
 */
class Ga4GoogleAnalyticsSettings extends ConfigFormBase {

  /**
   * Request path condition plugin.
   *
   * @var \Drupal\system\Plugin\Condition\RequestPath
   */
  protected $condition;

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a Ga4GoogleAnalyticsSettings object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Component\Plugin\Factory\FactoryInterface $plugin_factory
   *   The factory for condition plugin objects.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   */
  public function __construct(
    ConfigFactoryInterface $config_factory,
    FactoryInterface $plugin_factory,
    EntityTypeManagerInterface $entity_type_manager,
  ) {
    $this->configFactory = $config_factory;
    $this->entityTypeManager = $entity_type_manager;

    try {
      $this->condition = $plugin_factory->createInstance("request_path");
    }
    catch (PluginException $e) {
      // System is badly broken if we can't get the condition plugin.
      $this->condition = NULL;
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
          $container->get("config.factory"),
          $container->get("plugin.manager.condition"),
          $container->get('entity_type.manager')
      );
  }

  /**
   * Determines the ID of a form.
   */
  public function getFormId() {
    return "ga4_google_analytics_settings";
  }

  /**
   * Gets the configuration names that will be editable.
   */
  public function getEditableConfigNames() {
    return ["ga4_google_analytics.config"];
  }

  /**
   * Form constructor.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config("ga4_google_analytics.config");
    // Load roles using the entity type manager service.
    $roles = $this->entityTypeManager->getStorage('user_role')->loadMultiple();
    $role_options = [];
    foreach ($roles as $role) {
      $role_options[$role->id()] = $role->label();
    }
    $form["ga4_google_analytics_api_settings"] = [
      "#type" => "details",
      "#title" => $this->t("GA4 Google Analytics Configuration"),
      "#id" => "ga4_google_analytics_api_settings",
      "#open" => TRUE,
    ];

    $form["ga4_google_analytics_api_settings"]["measurement_id"] = [
      "#id" => "measurement_id",
      "#type" => "textfield",
      "#title" => $this->t("GA4 Measurement ID"),
      "#default_value" => $config->get("measurement_id") ? $config->get("measurement_id") : "",
      "#description" =>
      $this->t('Enter your Google Analytics GA4 Measurement ID. The unique ID that looks like "G-XXXXXXXXXX" and is used to identify your property'),
      "#required" => TRUE,
    ];

    $form["ga4_google_analytics_api_scripts_configuration"] = [
      "#type" => "details",
      "#title" => $this->t("GA4 Google Analytics Scripts Configuration"),
      "#id" => "ga4_google_analytics_api_scripts_configuration",
      "#open" => TRUE,
    ];

    $form["ga4_google_analytics_api_scripts_configuration"]["scripts_custom_attributes"] = [
      "#id" => "scripts_custom_attributes",
      "#type" => "textfield",
      "#title" => $this->t("GA4 Scripts Custom Attributes"),
      "#default_value" => $config->get("scripts_custom_attributes") ? $config->get("scripts_custom_attributes") : "",
      "#description" =>
      $this->t('Provide inline script attributes. For example: <em>type=text/plain data-category=analytics</em>'),
    ];

    $form["settings"] = [
      "#type" => "vertical_tabs",
      "#weight" => 50,
      "#title" => $this->t('Tracking scope'),
    ];

    $form["pages"] = [
      "#type" => "details",
      "#title" => $this->t("Pages"),
      "#group" => "settings",
    ];

    if ($config->get("ga4_access_pages")) {
      $this->condition->setConfiguration($config->get("ga4_access_pages"));
    }

    $form["pages"] += $this->condition->buildConfigurationForm($form["pages"], $form_state);
    $form["pages"]["negate"]["#type"] = "radios";
    $form["pages"]["negate"]["#default_value"] = (int) $form["pages"]["negate"]["#default_value"];
    $form["pages"]["negate"]["#title_display"] = "invisible";
    $form["pages"]["negate"]["#options"] = [
      $this->t("Use analytics with your site for the listed pages"),
      $this->t("Don't use analytics with your site for the listed pages"),
    ];

    $form["roles"] = [
      "#type" => "details",
      "#title" => $this->t("Roles"),
      "#group" => "settings",
    ];

    $form["roles"]["ga4_access_roles"] = [
      "#type" => "checkboxes",
      "#title" => $this->t(
              "Use analytics with your site when the user has the following roles"
      ),
      "#default_value" => $config->get("ga4_access_roles") ? $config->get("ga4_access_roles") : [],
      "#options" => $role_options,
      "#description" => $this->t(
              "If you select no roles, the condition will evaluate to TRUE for all users."
      ),
    ];

    $form["actions"]["#type"] = "actions";

    $form["actions"]["submit"] = [
      "#type" => "submit",
      "#attributes" => [
        "class" => ["button--primary"],
      ],
      "#value" => $this->t("Save Changes"),
    ];

    return $form;
  }

  /**
   * Form submission handler.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory()->getEditable("ga4_google_analytics.config");
    $form_state->cleanValues();

    $this->condition->submitConfigurationForm($form, $form_state);
    $config->set("measurement_id", $form_state->getValue("measurement_id"));
    $config->set("scripts_custom_attributes", $form_state->getValue("scripts_custom_attributes"));
    $config->set("ga4_access_roles", $form_state->getValue("ga4_access_roles"));
    $config->set("ga4_access_pages", $this->condition->getConfiguration());

    $config->save();
  }

}
