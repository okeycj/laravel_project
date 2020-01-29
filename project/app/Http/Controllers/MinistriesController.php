<?php

namespace App\Http\Controllers;

use App\Ministries;
use Illuminate\Http\Request;

use App\Http\Requests\MinistryRequest;

class MinistriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ministries = Ministries::all();
        return view('admin.ministries.index', compact('ministries'));
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
    public function store(MinistryRequest $request)
    {
        Ministries::create($request->all());
        return redirect()->route('ministries.index')->with('message', 'ministry added successfully');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MinistryRequest $request, Ministries $ministry)
    {
        $ministry->update($request->all());
        return redirect()->route('ministries.index')->with('message', 'ministry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ministries $ministry)
    {
        $ministry->delete();
        return redirect()->route('ministries.index')->with('message', 'ministry was deleted successfully');
    }
}
