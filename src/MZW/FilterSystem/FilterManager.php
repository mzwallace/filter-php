<?php namespace MZW\FilterSystem;

/**
 * FilterManager class.
 */
class FilterManager
{
  public $input;
  public $filters;
  public $rules;
  public $output;

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
    FilterInputInterface $input,
    FilterRepository $filters,
    FilterOutputInterface $output
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
  public function processRules($input, $rules)
  {
    return array_intersect($this->input->toArray(), $this->filters->toArray());
  }

  /**
   * getOutput function.
   *
   * @access public
   * @return void
   */
  public function getOutput()
  {
    return $this->output->load($this->rules);
  }
}