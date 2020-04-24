<?php

namespace App\Traits;


use Illuminate\Http\Request;

trait WizardTrait {

    protected $request;

    public $currentStep = 1;

    public $totalSteps = 3;

    public $navigationLinks = ['prev', 'next'];


    function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function setCurrentStep()
    {
         // Get the param - default to 1 if not passed
        $value = $this->request->input('step', 1);

        // Ensure it's a positive integer
        $value = intval( abs($value) );

        // Check it does not exceed the number of steps
        if ( $value != 0 && $value <= $this->totalSteps )
            $this->currentStep = $value;
    }

    
    public function setTotalSteps($method)
    {
        if ( isset( $this->wizardConfig[$method] ) )
            $this->totalSteps = $this->wizardConfig[$method];
    }

    public function setNavLinks()
    {
        // Gneerate the url and param
        $url = '/' . $this->request->path() . '?step=';
        
        // Calculate the next steps
        $nextStepNo = $this->currentStep + 1;
        $prevStepNo = $this->currentStep - 1;

        // if the current step == 1 just provide a next step
         if ( $this->currentStep == 1 ) {
            $this->navigationLinks['next'] = [
                'name' => 'Next',
                'url' => $url . $nextStepNo
            ];
         }

        // If the current step is greater than 1, create a previous & next button
         if ( $this->currentStep > 1 ) {
            $this->navigationLinks['prev'] = [
                'name' => 'Previous',
                'url' => $url . $prevStepNo
            ];
            $this->navigationLinks['next'] = [
                'name' => 'Next',
                'url' => $url . $nextStepNo
            ];
         }
        
        // If the current step is the final step, replace 'next' with 'finish'
         if ( $this->currentStep == $this->totalSteps )
            $this->navigationLinks['next']['name'] = 'Finish';
    }
    

}