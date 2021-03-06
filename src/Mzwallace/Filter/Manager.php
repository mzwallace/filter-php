<?php namespace Mzwallace\Filter;

use Mzwallace\Filter\Input\InputInterface;
use Mzwallace\Filter\Output\OutputInterface;

/**
 * Manager class
 */
class Manager
{
  public $input;
  public $filters;
  public $output;

  /**
   * The selected rule set.
   *
   * @var mixed
   * @access public
   */
  public $rules;

  /**
   * __construct function.
   *
   * @access public
   * @param FilterInputInterface $input
   * @param FilterRepository $filters
   * @param FilterOutputInterface $output
   * @return void
   */
  public function __construct(
    InputInterface $input,
    Repository $filters,
    OutputInterface $output
  ) {
    $this->input   = $input;
    $this->filters = $filters;
    $this->output  = $output;
  }

  /**
   * processRules function.
   *
   * @access public
   * @param mixed $input
   * @param mixed $rules
   * @return void
   */
  public function processRules($input, $filters)
  {
    $input = $input->toArray();

    $filters = $filters->toArray();

    $this->rules = new Repository;

    foreach ($input as $id => $options)
    {
      if ($filter = $this->filters->getFilterWithId($id))
      {
        $rule = new Filter\SimpleFilter($id);

        foreach ($options as $option)
        {
          if ($filter->hasOption($option))
          {
            $rule->options[] = $option;
          }
        }

        $this->rules[] = $rule;
      }
    }
  }

  /**
   * getOutput function.
   *
   * @access public
   * @return void
   */
  public function getOutput()
  {
    $this->processRules($this->input, $this->filters);
    $this->output->loadRules($this->rules);
    return $this->output->getOutput();
  }
}