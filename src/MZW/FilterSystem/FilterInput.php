<?php namespace MZW\FilterSystem;

abstract class FilterInput implements FilterInputInterface
{
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
