<?php namespace MZW\Product\Filter;

class Filter implements FilterIterface
{
  public $name;
  public $options;

  public function __construct($name, $options = array())
  {
    $this->name = $name;
    $this->options = $options;
  }
}
