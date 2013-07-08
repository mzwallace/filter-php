<?php

use \MZW\Filter\Manager as FilterManager;

use \MZW\Filter\Input\ArrayInput;
use \MZW\Filter\Repository as FilterRepository;
use \MZW\Filter\Output\JsonOutput;

use \MZW\Filter\Filter\SimpleFilter;
use \MZW\Filter\Filter\EloquentFilter;

$fixtures = [
  'FilterOutput' => new ArrayInput(['test' => ['Black']]),

  'FilterRepository' => new FilterRepository([
      new SimpleFilter('test', ['Black', 'Red', 'Navy'])
  ]),

  'FilterManager' => new FilterManager(
    new ArrayInput([
      'Johnny' => ['Black', 'Yellow'],
      'David' => ['Pink', 'Magenta'],
      'Shape' => ['Jane', 'Baby Jane']
    ]),

    new FilterRepository([
      new SimpleFilter('Johnny', ['Black', 'Green', 'Blue']),
      new SimpleFilter('David', ['Pink', 'Purple', 'Red']),
      new EloquentFilter('Shape', [
        'model'     => 'Product',
        'attribute' => 'shape',
        'ignore'    => ['Baby Jane']
      ])
    ]),

    new JsonOutput
  )
];
