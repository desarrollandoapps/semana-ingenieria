<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cDia1 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'CONFERENCIA')
                            ->where('dia', 1)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $cDia2 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'CONFERENCIA')
                            ->where('dia', 2)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $cDia3 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'CONFERENCIA')
                            ->where('dia', 3)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $cDia4 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'CONFERENCIA')
                            ->where('dia', 4)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $tDia1 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'TALLER')
                            ->where('dia', 1)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $tDia2 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'TALLER')
                            ->where('dia', 2)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $tDia3 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'TALLER')
                            ->where('dia', 3)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $tDia4 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'TALLER')
                            ->where('dia', 4)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $pDia1 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'PONENCIA')
                            ->where('dia', 1)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $pDia2 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'PONENCIA')
                            ->where('dia', 2)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $pDia3 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'PONENCIA')
                            ->where('dia', 3)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();
        $pDia4 = Evento::join('conferencistas', 'eventos.conferencista_id', 'conferencistas.id')
                            ->orderBy('fecha', 'asc')
                            ->orderBy('horario', 'asc')
                            ->where('tipoEvento', 'PONENCIA')
                            ->where('dia', 4)
                            ->select('eventos.*', 'conferencistas.nombre', 'conferencistas.pais', 'conferencistas.id as idConferencista')
                            ->get();

        return view('welcome', compact('cDia1', 'cDia2', 'cDia3', 'cDia4', 'tDia1', 'tDia2', 'tDia3', 'tDia4', 'pDia1', 'pDia2', 'pDia3', 'pDia4'));
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
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }

    public function inscripcion($id)
    {

    }
}
