<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class progressBar extends Component
{
    // Total number of steps
    protected $noOfSteps;

    // % each setp represents
    protected $interval;

    // boilerplate progressbar HTML
    protected $progressBar = '<div class="progress-bar |%CLASS%| " role="progressbar" style="width: |%INTERVAL%|%;" aria-valuenow="|%INTERVAL%|" aria-valuemin="0" aria-valuemax="100"><h4 class="pt-2">STEP |%STEP_NO%|</h4></div>';

    // Current step
    public $currentStep;

    // HTML for the progressbar
    public $output = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        // Look at the URL params and set up this step, plus get interval
        $this->setNoOfSteps($request);
        $this->setCurrentStep($request);

        // Calculate the interval
        $this->setInterval(); 
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Loop through steps and build the progress bar
        $i = 1;
        while ( $i <= $this->noOfSteps )
        {
            // Get the approirpiate class(es) and build this progress bar 
            $class = $this->getClass($i);
            $this->output .= $this->buildProgressBar($class, $i);
            $i++;
        }

        // Return the view (public vars set here are avaiable in the view)
        return view('components.progress-bar');
    }


    // Build the prgressbar given the variables
    protected function buildProgressBar($class, $step)
    {
        $output = $this->progressBar;
        $interval = $this->interval;
        $output = str_replace("|%CLASS%|", $class, $output);
        $output = str_replace("|%INTERVAL%|", $interval, $output);
        $output = str_replace("|%STEP_NO%|", $step, $output);
        return $output;
    }
    

    // Get the URL params passed (and set sensible defaults)
    protected function setNoOfSteps($request)
    {
        $this->noOfSteps = intval( abs( $request->input('noOfSteps', 3) ) );   
    }

    // Get current step from URL param 
    protected function setCurrentStep($request)
    {
        $currentStep = intval( abs( $request->input('stepNo', 1) ) );;

        // Just check it doesn't exceed the total no of steps
        if ( $currentStep > $this->noOfSteps )
            $currentStep = $this->noOfSteps;

        $this->currentStep = $currentStep;
    }

    // Set the interval (%) for each step on the proggress bar
    protected function setInterval()
    {
        $this->interval = 100 / $this->noOfSteps;
    }
    

    // Determine what classes to apply based on which step we're on
    protected function getClass($i)
    {    
        $class = 'bg-secondary';

        // If the step has been completed...
        if ( $i < $this->currentStep )
            $class = 'bg-success';

        // If this is the current step...
        if ( $i == $this->currentStep )
            $class = 'bg-success progress-bar-striped progress-bar-animated';
            
        return $class;
    }
    
}
