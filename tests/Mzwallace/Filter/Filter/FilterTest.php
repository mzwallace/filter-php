<?php namespace Mzwallace\Filter;

class FilterTest extends \PHPUnit_Framework_TestCase
{
  public function setUp() {}

  public function testFilterInterface()
  {
    $filter = new Filter\SimpleFilter(1, 'attribute', 'test', [
      'Black', 'Blue', 'Orange'
    ]);

    $this->assertCount(3, $filter->getOptions());
    $this->assertEquals('test', $filter->getName());
    $this->assertTrue($filter->hasOption('Black'));
    $this->assertTrue(is_array($filter->toArray()));
  }
}