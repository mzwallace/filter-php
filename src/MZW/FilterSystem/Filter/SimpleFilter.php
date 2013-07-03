<?php namespace MZW\FilterSystem\Filter;

use \MZW\FilterSystem\Filter;

class SimpleFilter extends Filter
{
  public function __construct($name, $options = array())
  {
    $this->name = $name;
    $this->options = $options;
  }
}