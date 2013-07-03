<?php namespace MZW\FilterSystem;

class FilterManagerTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    global $seeds;
    $this->manager = $seeds['FilterManager'];
  }

  public function testOutput()
  {
    $this->assertEquals('{"test":["Black"]}', $this->manager->getOutput());
  }
}