<?php

namespace App\Http\Controllers;

use App\Models\Conferencista;
use Illuminate\Http\Request;

class ConferencistaController extends Controller
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
     * @param  \App\Models\Conferencista  $conferencista
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conferencista = Conferencista::findOrFail($id);
        return view('conferencista', compact('conferencista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conferencista  $conferencista
     * @return \Illuminate\Http\Response
     */
    public function edit(Conferencista $conferencista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conferencista  $conferencista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conferencista $conferencista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conferencista  $conferencista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conferencista $conferencista)
    {
        //
    }
}
