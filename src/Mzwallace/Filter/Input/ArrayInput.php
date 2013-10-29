<?php namespace Mzwallace\Filter\Input;

class ArrayInput extends AbstractInput
{
  public function toArray()
  {
    return $this->input;
  }
}
