<?php namespace MZW\Filter;

class RespositoryTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    $this->repository = new Repository;
  }

  public function testConstruct()
  {
    $this->repository = new Repository([new Filter\SimpleFilter('test')]);
    $this->assertCount(1, $this->repository);
    $this->assertContainsOnlyInstancesOf('MZW\Filter\Filter\FilterInterface', $this->repository);
  }

  public function testAddSimpleFilter()
  {
    $this->repository[] = new Filter\SimpleFilter('test1');
    $this->repository[] = new Filter\SimpleFilter('test2');
    $this->assertCount(2, $this->repository);
    $this->assertContainsOnlyInstancesOf('MZW\Filter\Filter\FilterInterface', $this->repository);
  }
}