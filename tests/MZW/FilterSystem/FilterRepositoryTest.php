<?php namespace MZW\FilterSystem;

use MZW\FilterSystem\Filter\SimpleFilter;

class FilterRespositoryTest extends \PHPUnit_Framework_TestCase {

  public function setUp()
  {
    $this->repository = new FilterRepository;
  }

  public function testConstruct()
  {
    $this->repository = new FilterRepository([new SimpleFilter('test')]);
    $this->assertCount(1, $this->repository);
    $this->assertContainsOnlyInstancesOf('MZW\FilterSystem\Filter', $this->repository);
  }

  public function testAddSimpleFilter()
  {
    $this->repository[] = new SimpleFilter('test1');
    $this->repository[] = new SimpleFilter('test2');
    $this->assertCount(2, $this->repository);
    $this->assertContainsOnlyInstancesOf('MZW\FilterSystem\Filter', $this->repository);
  }

  //public function test

}