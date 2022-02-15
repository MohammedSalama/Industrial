<?php

namespace App\Http\Controllers;

use App\Models\Industrial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreIndustrialRequest;
use Illuminate\Validation\Rules\In;

class IndustrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industrial = Industrial::all();
        return view('layouts.industrial.index',compact('industrial'));
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
    public function store(StoreIndustrialRequest $request)
    {
        try {
            Industrial::create([
                'email' => $request->email,
            ]);
            session()->flash('Add', __('E-mail Added Successfully') );
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industrial  $industrial
     * @return \Illuminate\Http\Response
     */
    public function show(Industrial $industrial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industrial  $industrial
     * @return \Illuminate\Http\Response
     */
    public function edit(Industrial $industrial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industrial  $industrial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industrial $industrial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industrial  $industrial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Industrial::destroy($request->industrial_id);
            session()->flash('Deleted', 'E-mail has been deleted successfully');
            return redirect()->back();

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
