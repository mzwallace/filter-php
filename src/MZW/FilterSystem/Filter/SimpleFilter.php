<?php namespace MZW\FilterSystem\Filter;

use \MZW\FilterSystem\Filter;

class SimpleFilter extends Filter
{
  public function __construct($name, Array $options = array())
  {
    $this->name = $name;
    $this->options = $options;
  }

  public function toArray()
  {
    return $this->options;
  }
}