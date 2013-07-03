<?php namespace MZW\FilterSystem\FilterOutput;

use \MZW\FilterSystem\FilterOutput;

class JsonFilterOutput extends FilterOutput
{
  public function getOutput()
  {
    return json_encode($this->rules);
  }
}