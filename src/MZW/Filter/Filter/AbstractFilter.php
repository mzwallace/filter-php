<?php namespace MZW\Filter\Filter;

use \Illuminate\Support\Collection;

abstract class AbstractFilter extends Collection implements FilterInterface
{
  public $name;
  public $options;

  public function getName()
  {
    return $this->name;
  }

  public function getOptions()
  {
    return $this->items;
  }

  public function hasOption($option)
  {
    return in_array($option, $this->items);
  }

  public function toArray()
  {
    return ['name' => $this->name, 'options' => $this->items];
  }
}
