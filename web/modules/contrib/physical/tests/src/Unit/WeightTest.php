<?php

namespace Drupal\Tests\physical\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\physical\Weight;

/**
 * Tests the weight class.
 *
 * @coversDefaultClass \Drupal\physical\Weight
 * @group physical
 */
class WeightTest extends UnitTestCase {

  /**
   * The weight.
   *
   * @var \Drupal\physical\Weight
   */
  protected Weight $weight;

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();

    $this->weight = new Weight('5', 'kg');
  }

  /**
   * ::covers __construct.
   */
  public function testInvalidUnit() {
    $this->expectException(\InvalidArgumentException::class);
    $weight = new Weight('1', 'm');
  }

  /**
   * Tests unit conversion.
   *
   * ::covers convert.
   */
  public function testConvert() {
    $this->assertEquals(new Weight('5000000', 'mg'), $this->weight->convert('mg')->round());
    $this->assertEquals(new Weight('5000', 'g'), $this->weight->convert('g')->round());
    $this->assertEquals(new Weight('176.370', 'oz'), $this->weight->convert('oz')->round(3));
    $this->assertEquals(new Weight('11.023', 'lb'), $this->weight->convert('lb')->round(3));
    $this->assertEquals(new Weight('25000', 'ct'), $this->weight->convert('ct')->round());
  }

}
