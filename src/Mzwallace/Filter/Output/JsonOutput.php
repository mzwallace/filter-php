<?php namespace Mzwallace\Filter\Output;

class JsonOutput extends AbstractOutput
{
  public function getOutput()
  {
    return json_encode($this->rules->toArray());
  }
}
