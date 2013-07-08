<?php namespace MZW\FilterSystem;

use \Illuminate\Support\Collection;

class FilterRepository extends Collection
{
  public function hasFilterWithName($name)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->name === $name) return true;
    }

    return false;
  }

  public function getFilterWithName($name)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->name === $name) return $filter;
    }

    return false;
  }
}
