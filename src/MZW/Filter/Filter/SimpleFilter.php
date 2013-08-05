<?php namespace MZW\Filter\Filter;

class SimpleFilter extends AbstractFilter
{
  public function __construct($name, Array $options = array())
  {
    $this->name  = $name;
    $this->options = $options;
  }
}