<?php

namespace App\Http\Controllers\Listmanager;

use App\Contact;
use App\Segment;
use App\Tag;
use App\ListModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $view = $this->getStep($request, 3);

        // // Get the collections and return the view for the step
        // switch ($view) {
        //     case 2:
        //         # code...
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }
        $tags = Tag::all()->pluck('tag_name', 'id');
        $segments = Segment::all()->pluck('segment_name', 'id');
        $lists = ListModel::all()->pluck('list_name', 'id');
        return view('apps.listmanager.contacts.create', compact('tags', 'segments', 'lists'));
    }

    // Get the step number for the wizard views
    public function getStep($request, $noOfSteps)
    {
        // Get the step passed in the query string. 
        // Intval turns text into 0. abs makes it positive
        // The second param of $request->input defaults to 1 if nothing is passed
        $stepNo = intval( abs( $request->input('step', 1) ) );

        // Make sure number passed is between 1 and $noOfSteps
        if ( $stepNo == 0 OR $stepNo > $noOfSteps )
            $stepNo = 1;

        return $stepNo;
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
