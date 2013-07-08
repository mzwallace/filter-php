<?php namespace MZW\FilterSystem;

/**
 * FilterManager class.
 */
class FilterManager
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
  public function processRules($input, $filters)
  {
    $input = $input->toArray();
    $filters = $filters->collapse()->toArray();

    $this->rules = new FilterRepository;

    foreach ($input as $name => $options)
    {
      if ($filter = $this->filters->getFilterWithName($name))
      {
        $rule = new Filter\SimpleFilter($name);

        foreach ($options as $option)
        {
          if ($filter->hasOption($option))
          {
            $rule[] = $option;
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