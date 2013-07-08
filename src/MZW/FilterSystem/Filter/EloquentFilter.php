<?php namespace MZW\FilterSystem\Filter;

use \MZW\FilterSystem\Filter;

/**
 * EloquentFilter class.
 *
 * @extends Filter
 */
class EloquentFilter extends Filter
{
  /**
   * The class name of the model
   */
  public $model = "";

  /**
   * The model instance
   */
  public $instance = "";

  /**
   * The name of the model attribute to filter.
   */
  public $attribute = "";

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
  public function __construct($name, $args = [])
  {
    $this->name = $name;

    if ( ! array_key_exists('model', $args) or ! array_key_exists('attribute', $args))
    {
      throw new \Exception('Missing required arguments.');
    }

    $this->model     = $args['model'];
    $this->attribute = $args['attribute'];

    if (array_key_exists('only', $args) and array_key_exists('ignore', $args))
    {
      throw new \Exception('Please choose either only or ignore, not both.');
    }

    if (array_key_exists('only', $args))
    {
      $this->only = $args['only'];
    }

    if (array_key_exists('ignore', $args))
    {
      $this->ignore = $args['ignore'];
    }

    $this->retrieveOptions();
  }


  /**
   * retrieveOptions function.
   *
   * @access public
   * @return void
   */
  public function retrieveOptions()
  {
    $model = $this->model;
    $this->instance = new $model;
    $instance = $this->instance;
    $options = $instance->distinct()->lists($this->attribute);

    if (is_array($this->only) and count($this->only))
    {
      foreach ($options as $key => $option)
      {
        if ( ! in_array($option, $this->only))
        {
          unset($options[$key]);
        }
      }
    }

    if (is_array($this->ignore) and count($this->ignore))
    {
      foreach ($this->ignore as $ignored_option)
      {
        if (($key = array_search($ignored_option, $options)) !== false)
        {
          unset($options[$key]);
        }
      }
    }

    $this->items = $options;
  }

  public function toArray()
  {
    return ['name' => $this->name, 'options' => $this->items];
  }
}
