<?php namespace MZW\Product\Filter;

abstract class FilterInterface
{
  public $name;
  public $options;

  public $a;

  public function __construct($name)
  {
    $this->name = $name;
  }
}
