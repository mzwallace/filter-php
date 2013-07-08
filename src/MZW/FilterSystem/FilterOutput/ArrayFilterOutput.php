<?php namespace MZW\FilterSystem\FilterOutput;

use \MZW\FilterSystem\FilterOutput;

class ArrayFilterOutput extends FilterOutput
{
  public function getOutput()
  {
    return $this->rules->toArray();
  }
}