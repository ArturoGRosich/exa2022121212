<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComunityRequest;
use App\Http\Requests\UpdateComunityRequest;
use App\Models\Comunity;

class ComunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreComunityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComunityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function show(Comunity $comunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunity $comunity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComunityRequest  $request
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComunityRequest $request, Comunity $comunity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunity $comunity)
    {
        //
    }
}
