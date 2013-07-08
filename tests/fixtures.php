<?php

use \MZW\FilterSystem\FilterInput\ArrayFilterInput;
use \MZW\FilterSystem\FilterRepository;
use \MZW\FilterSystem\Filter\SimpleFilter;
use \MZW\FilterSystem\Filter\EloquentFilter;
use \MZW\FilterSystem\FilterManager;
use \MZW\FilterSystem\FilterOutput\JsonFilterOutput;

$fixtures = [
  'FilterOutput' => new ArrayFilterInput(['test' => ['Black']]),

  'FilterRepository' => new FilterRepository([
      new SimpleFilter('test', ['Black', 'Red', 'Navy'])
  ]),

  'FilterManager' => new FilterManager(
    new ArrayFilterInput([
      'Johnny' => ['Black', 'Yellow'],
      'David' => ['Pink', 'Magenta'],
      'Shape' => ['Jane', 'Baby Jane', 'Bea']
    ]),

    new FilterRepository([
      new SimpleFilter('Johnny', ['Black', 'Green', 'Blue']),
      new SimpleFilter('David', ['Pink', 'Purple', 'Red']),
      new EloquentFilter('Shape', [
        'model'     => '\Product',
        'attribute' => 'shape',
        'ignore'    => ['Baby Jane']
      ])
    ]),

    new JsonFilterOutput
  )
];
