<?php

namespace App\Http\Controllers\Listmanager;

use App\Contact;
use App\Segment;
use App\Tag;
use App\ListModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\WizardTrait;

class ContactController extends Controller
{

    use WizardTrait;

    public $wizardConfig = [
        // Method name => Total Steps
        'create' => 3,
    ];
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('last_name', 'ASC')->paginate(25);
        return view('apps.listmanager.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     * IMPORTANT: Uses method on the wizardTrait
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // How many steps in this wizard
        $this->setTotalSteps('create');
        $this->setCurrentStep();
        $this->setNavLinks();

        // Set up the view name and the add the step values to the data array
        $view = 'apps.listmanager.contacts.wizards.createStep' . $this->currentStep;
        $data = [
            'totalSteps' => $this->totalSteps, 
            'currentStep' => $this->currentStep, 
            'navigationLinks' => $this->navigationLinks
        ];

        // Now get the associated data
        switch ( $this->currentStep ) {
            case 1:
                $data['lists'] = ListModel::all()->pluck('list_name', 'id');
                break;

            case 2:
                $data['tags'] = Tag::all()->pluck('tag_name', 'id');
                break;

            case 3:
                $data['segments'] = Segment::all()->pluck('segment_name', 'id');
                break;
            
            default:
                # code...
                break;
        }

        return view( $view, ['data' => $data] );
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store the contact
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('apps.listmanager.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $tags = Tag::all()->pluck('tag_name', 'id');
        $segments = Segment::all()->pluck('segment_name', 'id');
        return view('apps.listmanager.contacts.edit', compact('tags', 'segments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        // PUT
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
