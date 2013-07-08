<?php namespace MZW\Filter\Filter;

interface FilterInterface
{
  public function getName();

  public function getOptions();

  public function hasOption($option);

  public function toArray();
}
