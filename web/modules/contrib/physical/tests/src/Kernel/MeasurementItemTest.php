<?php

namespace Drupal\Tests\physical\Kernel;

use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\physical\Comparator\MeasurementComparator;
use Drupal\physical\Weight;
use SebastianBergmann\Comparator\Factory as PhpUnitComparatorFactory;

/**
 * Tests the 'physical_measurement' field type.
 *
 * @group physical
 */
class MeasurementItemTest extends EntityKernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'physical',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $factory = PhpUnitComparatorFactory::getInstance();
    $factory->register(new MeasurementComparator());

    $field_storage = FieldStorageConfig::create([
      'field_name' => 'test_weight',
      'entity_type' => 'entity_test',
      'type' => 'physical_measurement',
      'settings' => [
        'measurement_type' => 'weight',
      ],
    ]);
    $field_storage->save();

    $field = FieldConfig::create([
      'field_name' => 'test_weight',
      'entity_type' => 'entity_test',
      'bundle' => 'entity_test',
    ]);
    $field->save();
  }

  /**
   * Tests the field.
   */
  public function testField() {
    /** @var \Drupal\entity_test\Entity\EntityTest $entity */
    $entity = EntityTest::create([
      'test_weight' => [
        'number' => '10',
        'unit' => 'lb',
      ],
    ]);
    $entity->save();
    $entity = $this->reloadEntity($entity);

    /** @var \Drupal\physical\Plugin\Field\FieldType\MeasurementItem $item */
    $item = $entity->get('test_weight')->first();
    $measurement = $item->toMeasurement();
    $this->assertInstanceOf(Weight::class, $measurement);
    $this->assertEquals(new Weight('10', 'lb'), $measurement);
  }

}
