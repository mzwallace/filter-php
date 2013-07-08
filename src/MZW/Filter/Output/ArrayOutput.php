<?php namespace MZW\Filter\Output;

class ArrayOutput extends AbstractOutput
{
  public function getOutput()
  {
    return $this->rules->toArray();
  }
}