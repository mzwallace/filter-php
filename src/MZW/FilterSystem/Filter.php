<?php namespace MZW\FilterSystem;

use \Illuminate\Support\Collection;

abstract class Filter extends Collection implements FilterInterface
{
  public $name;

  public function getName()
  {
    return $this->name;
  }

  public function hasOption($option)
  {
    return in_array($option, $this->items);
  }

  public function toArray()
  {
    throw new \Exception('toArray has not be implemented.');
  }
}
