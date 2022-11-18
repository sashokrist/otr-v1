<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivtiesRequest;
use App\Http\Requests\UpdateActivtiesRequest;
use App\Models\Activities;

class ActivtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreActivtiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivtiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activities  $activties
     * @return \Illuminate\Http\Response
     */
    public function show(Activities $activties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activities  $activties
     * @return \Illuminate\Http\Response
     */
    public function edit(Activities $activties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivtiesRequest  $request
     * @param  \App\Models\Activities  $activties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivtiesRequest $request, Activities $activties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activities  $activties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activities $activties)
    {
        //
    }
}
