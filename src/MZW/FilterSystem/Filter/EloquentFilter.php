<?php namespace MZW\FilterSystem\Filter;

use \MZW\Product\FilterSystem\Filter;

/**
 * EloquentFilter class.
 *
 * @extends Filter
 */
class EloquentFilter extends Filter
{
  /**
   * The name of the model to filter.
   */
  public $model = "";

  /**
   * The name of the column to filter.
   */
  public $column = "";

  /**
   * A list of options to ignore when autocalculating.
   * If an option listed below is in the database or not,
   * it will not show up as an option.
   */
  public $ignore = array();

  /**
   * A list of options to only include when autocalculating.
   * If the only option is not in the database it will not be included.
   */
  public $only = array();


  /**
   * __construct function.
   *
   * @access public
   * @param mixed $name
   * @param mixed $model
   * @param mixed $column
   * @return void
   */
  public function __construct($name, $model, $column)
  {
    $this->name   = $name;
    $this->model  = $model;
    $this->column = $column;
  }


  /**
   * retrieveOptions function.
   *
   * @access public
   * @return void
   */
  public function retrieveOptions()
  {

  }
}
