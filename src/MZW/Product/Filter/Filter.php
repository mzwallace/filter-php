<?php namespace MZW\Product\Filter;

/**
 * {{#filters}}
 *   {{#options}}
 *     <input type="checkbox" name="{{ name }}" value="{{ value }}" />
 *   {{/options}}
 * {{/filters}}
 */
class Filter implements FilterIterface
{
  public $name;
  public $options;

  public function __construct($name, $options = array())
  {
    $this->name = $name;
    $this->options = $options;
  }
}

/*
// app/start/bindings.php
App::bind('filter', function($app)
{
  $filters = new \Product\Filter\Collection; // out filter collection

  $filters->add(new \Product\Filter\Filter('shape', [
    'Jane',
    'Kate',
    'Bea'
  ]));

  return $filters;
});

// app/controllers/collections.php
$input = Input::all(); // raw input from request
$products = Product_Collection::by_filter($input); // pass raw input to our product_collection

// inside of ::by_filter
class Product_Collection
{
  public static function by_filter(array $input = array())
  {
    $filters = App::make('filters');
    $filters->setSelect($input);
    $tag_query = $filters->getSQLQuery();
    $tag_query = $filters->getNoSQLQuery(); // example of mongodb usage

    Product::with('tag', function($query)
    {
      $query->where_raw($tag_query);
    });
  }
}

// pass filter and products to view
// filter should echo json of it's state so that we can pass the state to backbone
//
View::make('collections', compact('filter', 'products'));

/**/
