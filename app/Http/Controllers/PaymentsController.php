<?php

namespace App\Http\Controllers;

use App\Payment;

use Illuminate\Http\Request;

class PaymentsController extends Controller
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
        $payments = Payment::all();
        return view('admin.payments.index', compact('payments'));
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
        $this->validate($request, [
            'budget' => 'required',
            'amount' => 'required',
            'warrant' => 'required',
            'description' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        // dd($request);
        $image = $request->file('picture');
        // dd($image);
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('uploads'), $new_name);
        Payment::create([
            'amount' => $request->input('amount'),
            'budget' => $request->input('budget'),
            'ministry_id' => $request->input('id'),
            'warrant' => $request->input('warrant'),
            'remark' => $request->input('remark'),
            'description' => $request->input('description'),
            'attachment' => 'uploads/' . $new_name,
        ]);
        $image->move(public_path('uploads'), $new_name);
        return redirect()->route('ministries.index')->with('message', 'payment done successfully');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
