<?php namespace MZW\FilterSystem\FilterInput;

use \MZW\FilterSystem\FilterInput;

class ArrayFilterInput extends FilterInput
{
  public function toArray()
  {
    return $this->input;
  }
}
