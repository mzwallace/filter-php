<?php namespace Mzwallace\Filter\Filter;

use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\Contracts\ArrayableInterface;

/**
 * EloquentFilter class.
 *
 * @extends Filter
 */
class EloquentFilter extends AbstractFilter implements JsonableInterface, ArrayableInterface
{
  /**
   * The model instance
   */
  public $instance = null;

  /**
   * The class name or instance of the model
   */
  public $model = null;

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
   * @param array $args
   * @return void
   */
  public function __construct($id, $type = "", $name = "", $args = [])
  {
    $this->id   = $id;
    $this->type = $type;
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

    $this->processOptions();
  }


  public function hasOption($input)
  {
    foreach ($this->options as $option)
    {
      if ($option[$this->attribute] == $input[$this->attribute])
      {
        return true;
      }
    }

    return false;
  }

  /**
   * retrieveOptions function.
   *
   * @access public
   * @return void
   */
  public function processOptions()
  {
    $model = $this->model;
    $this->instance = is_object($model) ? $model : new $model;
    $instance = $this->instance;
    $options = $instance->distinct()
                        ->get(['id', $this->attribute]);

    $attribute = $this->attribute;

    if (is_array($this->only) and count($this->only))
    {
      $options = $options->filter(function($option) use ($attribute)
      {
        return in_array($option[$attribute], $this->only);
      });
    }

    if (is_array($this->ignore) and count($this->ignore))
    {
      $options = $options->filter(function($option) use ($attribute)
      {
        return !in_array($option[$attribute], $this->ignore);
      });
    }

    $this->options = $options->values()->toArray();
  }

  public function toArray()
  {
    return [
      'id'      => $this->id,
      'type'    => $this->type,
      'name'    => $this->name,
      'options' => $this->options
    ];
  }

  public function toJson($options = null)
  {
    return json_encode($this->toArray());
  }
}
