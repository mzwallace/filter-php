<?php namespace MZW\FilterSystem;

abstract class FilterOutput implements FilterOutputInterface
{
  public $rules;

  public function loadRules($rules)
  {
    $this->rules = $rules;
  }
}
