<?php namespace Mzwallace\Filter;

class RespositoryTest extends \PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    $this->repository = new Repository;
  }

  public function testConstruct()
  {
    $this->repository = new Repository([new Filter\SimpleFilter(1, 'attribute', 'test')]);
    $this->assertCount(1, $this->repository);
    $this->assertContainsOnlyInstancesOf('Mzwallace\Filter\Filter\FilterInterface', $this->repository);
  }

  public function testAddSimpleFilter()
  {
    $this->repository[] = new Filter\SimpleFilter(1, 'attribute', 'test1');
    $this->repository[] = new Filter\SimpleFilter(2, 'attribute', 'test2');
    $this->assertCount(2, $this->repository);
    $this->assertContainsOnlyInstancesOf('Mzwallace\Filter\Filter\FilterInterface', $this->repository);
  }
}