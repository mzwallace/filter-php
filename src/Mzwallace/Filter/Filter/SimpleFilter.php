<?php namespace Mzwallace\Filter\Filter;

class SimpleFilter extends AbstractFilter
{
  public function __construct($id, $type = "", $name = "", Array $options = [])
  {
    $this->id      = $id;
    $this->type    = $type;
    $this->name    = $name;
    $this->options = $options;
  }
}