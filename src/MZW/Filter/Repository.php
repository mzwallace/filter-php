<?php namespace MZW\Filter;

use \Illuminate\Support\Collection;

class Repository extends Collection
{
  public function hasFilterWithName($name)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->getName() === $name) return true;
    }

    return false;
  }

  public function getFilterWithName($name)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->getName() === $name) return $filter;
    }

    return false;
  }
}
