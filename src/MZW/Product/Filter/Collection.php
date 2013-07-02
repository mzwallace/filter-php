<?php namespace MZW\Product\Filter;

class Collection extends \Illuminate\Support\Collection {

  public function __construct(array $filters = array())
  {
    parent::__construct($filters);
  }

}
