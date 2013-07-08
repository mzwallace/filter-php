<?php namespace MZW\FilterSystem;

class FilterManagerTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    global $fixtures;
    $this->manager = $fixtures['FilterManager'];
  }

  public function testOutput()
  {
    $this->assertEquals(
      '[{"name":"Johnny","options":["Black"]},{"name":"David","options":["Pink"]},{"name":"Shape","options":["Jane"]}]'
    , $this->manager->getOutput());
  }
}