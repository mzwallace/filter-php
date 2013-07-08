<?php namespace MZW\Filter\Input;

class ArrayInput extends AbstractInput
{
  public function toArray()
  {
    return $this->input;
  }
}
