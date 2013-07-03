<?php namespace MZW\FilterSystem\FilterInput;

use \MZW\FilterSystem\FilterOutput;

class JsonFilterInput extends FilterOutput
{
  public function getOutput()
  {
    return json_encode($this->rules);
  }
}