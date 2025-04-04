<?php

namespace Drupal\Tests\physical\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\physical\Length;

/**
 * Tests the length class.
 *
 * @coversDefaultClass \Drupal\physical\Length
 * @group physical
 */
class LengthTest extends UnitTestCase {

  /**
   * The length.
   *
   * @var \Drupal\physical\Length
   */
  protected Length $length;

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();

    $this->length = new Length('3', 'm');
  }

  /**
   * ::covers __construct.
   */
  public function testInvalidUnit() {
    $this->expectException(\InvalidArgumentException::class);
    $length = new Length('1', 'kg');
  }

  /**
   * Tests unit conversion.
   *
   * ::covers convert.
   */
  public function testConvert() {
    $this->assertEquals(new Length('3000', 'mm'), $this->length->convert('mm')->round());
    $this->assertEquals(new Length('300', 'cm'), $this->length->convert('cm')->round());
    $this->assertEquals(new Length('0.003', 'km'), $this->length->convert('km')->round(3));
    $this->assertEquals(new Length('118.110', 'in'), $this->length->convert('in')->round(3));
    $this->assertEquals(new Length('9.843', 'ft'), $this->length->convert('ft')->round(3));
    $this->assertEquals(new Length('0.00162', 'M'), $this->length->convert('M')->round(5));
  }

}
