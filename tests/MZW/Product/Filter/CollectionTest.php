<?php namespace MZW\Product\Filter;

class CollectionTest extends \PHPUnit_Framework_TestCase {

  public function setUp()
  {
    $this->collection = new Collection;
  }

  public function testConstruct()
  {
    $this->collection = new Collection([new Filter('test')]);
    $this->assertCount(1, $this->collection);
    $this->assertContainsOnlyInstancesOf('MZW\Product\Filter\Filter', $this->collection);
  }

  public function testAddFilter()
  {
    $this->collection[] = new Filter('test1');
    $this->collection[] = new Filter('test2');
    $this->assertCount(2, $this->collection);
    $this->assertContainsOnlyInstancesOf('MZW\Product\Filter\Filter', $this->collection);
  }

  //public function test

}