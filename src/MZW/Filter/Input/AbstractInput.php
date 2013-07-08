<?php namespace MZW\Filter\Input;

abstract class AbstractInput implements InputInterface {
  public $input;

  public function __construct($input)
  {
    $this->input = $input;
  }

  public function toArray()
  {
    throw new \Exception('toArray has not be implemented.');
  }
}
