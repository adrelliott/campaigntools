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
        $contacts = Contact::all();
        return view('apps.listmanager.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all()->pluck('tag_name', 'id');
        $segments = Segment::all()->pluck('segment_name', 'id');
        $lists = ListModel::all()->pluck('list_name', 'id');
        return view('apps.listmanager.contacts.create', compact('tags', 'segments', 'lists'));
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
        // $contact->load('articles', 'categories', 'issues',  'tags', 'subscribesTo', 'hasClicked');
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
