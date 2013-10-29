<?php namespace Mzwallace\Filter\Filter;

interface FilterInterface
{
  public function getId();

  public function getType();

  public function getName();

  public function getOptions();

  public function hasOption($option);

  public function toArray();
}
