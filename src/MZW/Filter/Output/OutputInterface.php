<?php namespace MZW\Filter\Output;

interface OutputInterface
{
  public function loadRules($rules);

  public function getOutput();
}
