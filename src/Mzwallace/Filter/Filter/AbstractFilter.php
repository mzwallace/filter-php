<?php namespace Mzwallace\Filter\Filter;

abstract class AbstractFilter implements FilterInterface
{
  public $id;
  public $name;
  public $type;
  public $options;

  public function getId()
  {
    return $this->id;
  }

  public function getType()
  {
    return $this->type;
  }

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
