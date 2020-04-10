<?php

namespace App\Http\Controllers\Listmanager;

use App\Http\Controllers\Controller;
use App\Listmanager\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segments = Segment::all();
        return view('apps.listmanager.segments.index', compact('segments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tags = Tag::all()->pluck('tag_name', 'id');
        return view('apps.listmanager.segments.create');
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
     * @param  \App\Listmanager\Segment  $segment
     * @return \Illuminate\Http\Response
     */
    public function show(Segment $segment)
    {
        return view('apps.listmanager.segments.show', compact('segment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listmanager\Segment  $segment
     * @return \Illuminate\Http\Response
     */
    public function edit(Segment $segment)
    {
        // $tags = Tag::all()->pluck('tag_name', 'id');
        return view('apps.listmanager.segments.edit', compact('segment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listmanager\Segment  $segment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Segment $segment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listmanager\Segment  $segment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Segment $segment)
    {
        //
    }
}
