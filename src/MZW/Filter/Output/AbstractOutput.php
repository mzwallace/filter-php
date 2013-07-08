<?php namespace MZW\Filter\Output;

abstract class AbstractOutput implements OutputInterface
{
  public $rules;

  public function loadRules($rules)
  {
    $this->rules = $rules;
  }
}
