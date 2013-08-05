<?php namespace MZW\Filter\Filter;

abstract class AbstractFilter implements FilterInterface
{
  public $name;
  public $options;

  public function getName()
  {
    return $this->name;
  }

  public function getOptions()
  {
    return $this->options;
  }

  public function hasOption($option)
  {
    return in_array($option, $this->options);
  }

  public function toArray()
  {
    return (array)$this;
  }
}
