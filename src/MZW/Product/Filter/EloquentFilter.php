<?php namespace MZW\Product\Filter;

class EloquentFilter extends Filter
{
  public $name = "";
  public $options = array();

  public $table = "";
  public $column = "";

  public $ignore = array();
  public $only = array();

  public function retrieveOptions()
  {
    //DB::for_
  }
}
