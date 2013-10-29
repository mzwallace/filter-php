<?php namespace Mzwallace\Filter;

use \Illuminate\Support\Collection;

class Repository extends Collection
{
  public function hasFilterWithId($id)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->getId() === $id) return true;
    }

    return false;
  }

  public function getFilterWithId($id)
  {
    foreach ($this->items as $filter)
    {
      if ($filter->getId() === $id) return $filter;
    }

    return false;
  }

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
