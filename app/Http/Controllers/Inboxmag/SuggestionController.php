<?php

namespace App\Http\Controllers\Inboxmag;

use App\Http\Controllers\Controller;
use App\Inboxmag\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestions = Suggestion::all();
        return view('apps.inboxmag.suggestions.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inboxmag\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function show(Suggestion $suggestion)
    {
        return view('apps.inboxmag.suggestions.show', compact('suggestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inboxmag\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggestion $suggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inboxmag\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggestion $suggestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inboxmag\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggestion $suggestion)
    {
        //
    }
}
