<?php namespace MZW\Product\Filter;

class FilterManager
{
  public $filters;

  public function __construct(FilterRepository $filters = null)
  {
    $this->filters = $filters;
  }


}