<?php

namespace App\Http\Controllers\Listmanager;

use App\ListModel;
use App\Category;
use App\User;

use App\Http\Requests\StoreListRequest;
use App\Http\Requests\UpdateListRequest;
use App\Http\Requests\DeleteListRequest;

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
        $lists = ListModel::all();
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
        // return redirect()->route('listmanager.lists.index');
        return redirect('/listmanager/lists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListModel $list)
    {
        return view('apps.listmanager.lists.show', compact('list'));
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
    public function update(Request $request, ListModel $list)
    {
        $request->validate([
                'list_name' => ['required', 'min:3', 'max:255'],
                'list_description' => ['max:255']
        ]);
        $list->update($request->all());
        return redirect('/listmanager/lists');
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
    

    // public function dataTable()
    // {
    //     return 'datatable lists';
    //     // @todo Look for paramaters to control the query
    //     $lists = ListModel::select(['id','list_name','list_description','created_at']);
    //     return Datatables::of($lists)->make();
    // }
}
