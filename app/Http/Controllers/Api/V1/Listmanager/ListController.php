<?php

namespace App\Http\Controllers\Api\V1\Listmanager;

use App\Http\Controllers\Controller;
use App\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'datatable lists';
        // @todo Look for paramaters to control the query
        $lists = ListModel::select(['id','list_name','list_description','created_at']);
        return Datatables::of($lists)->make();
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
     * @param  \App\ListModel  $listModel
     * @return \Illuminate\Http\Response
     */
    public function show(ListModel $listModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListModel  $listModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListModel $listModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListModel  $listModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListModel $listModel)
    {
        //
    }
}
