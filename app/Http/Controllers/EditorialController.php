<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorial = Editorial::all();
        return view('editorials.index', compact('editorial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorial = new Editorial();
        $editorial->name = $request->post('name');
        $editorial->phone = $request->post('phone');
        $editorial->email = $request->post('email');
        $editorial->country = $request->post('country');
        $editorial->save();
        return redirect()->route('editorials.index')->with('success', 'successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editorial = Editorial::find($id);
        return view('editorials.delete', compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editorial = Editorial::find($id);
        return view('editorials.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editorial = Editorial::find($id);
        $editorial->name = $request->post('name');
        $editorial->phone = $request->post('phone');
        $editorial->email = $request->post('email');
        $editorial->country = $request->post('country');
        $editorial->update();
        return redirect()->route('editorials.index')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editorial = Editorial::find($id);
        $editorial->delete();
        return redirect()->route('editorials.index')->with('success', 'successfully deleted');
    }
}
