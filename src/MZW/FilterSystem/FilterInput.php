<?php namespace MZW\FilterSystem;

use Illuminate\Support\Contracts\ArrayableInterface;

abstract class FilterInput implements FilterInputInterface, ArrayableInterface
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
