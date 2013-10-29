<?php namespace Mzwallace\Filter\Output;

class ArrayOutput extends AbstractOutput
{
  public function getOutput()
  {
    return $this->rules->toArray();
  }
}