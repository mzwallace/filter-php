<?php namespace Mzwallace\Filter;

class ManagerTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    global $fixtures;
    $this->manager = $fixtures['FilterManager'];
  }

  public function testOutput()
  {
    $this->assertEquals(
      '[{"id":1,"name":"","type":"","options":["Black"]},{"id":2,"name":"","type":"","options":["Pink"]},{"id":3,"name":"","type":"","options":[{"id":1,"shape":"Jane"}]}]'
    , $this->manager->getOutput());
  }
}