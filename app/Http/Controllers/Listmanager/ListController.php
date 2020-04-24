<?php

namespace App\Http\Controllers\Listmanager;

use App\ListModel;
use App\Category;
use App\User;

use App\Http\Requests\Listmanager\StoreListRequest;
use App\Http\Requests\Listmanager\UpdateListRequest;
use App\Http\Requests\Listmanager\DeleteListRequest;

use App\Http\Controllers\Controller;
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
        $lists = ListModel::orderBy('updated_at', 'DESC')->paginate(15);
        return view('apps.listmanager.lists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.listmanager.lists.create');
        // return view('apps.listmanager.lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListRequest $request)
    {
        $list = ListModel::create($request->all());
        return redirect(route('listmanager.lists.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListModel $list)
    {
        $contacts = $list->getContacts()->paginate(10);
        return view('apps.listmanager.lists.show', compact('list', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListModel $list)
    {
        return view('apps.listmanager.lists.edit', compact('list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListRequest $request, ListModel $list)
    {
        $list->update($request->all());
        return redirect(route('listmanager.lists.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListModel $list)
    {
        //
    }


    public function uploadCreate(ListModel $list)
    {
        // return the form to upload a doc
    }

    public function uploadStore(ListModel $list)
    {
        // Process the csv and store details
    }

    public function deleteConfirm()
    {
        // Load a view that asks for confirmation
    }
    
}
