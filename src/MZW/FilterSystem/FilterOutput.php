<?php namespace MZW\FilterSystem;

abstract class FilterOutput implements FilterOutputInterface
{
  public $rules;

  public function load($rules)
  {
    $this->rules = $rules;
  }
}
