<?php

namespace App\Http\Controllers;

use App\Visita;
use Response;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitas = Visita::get();
        return Response::json($visitas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());
        //$save = Visita::create($request->all());
        $save = new Visita;
        $save->name = $request->nombre;
        $save->apellidos = $request->apellidos;
        $save->motivo = $request->motivo;
        $save->save();
        echo Response::json($save);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visita  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $save = Visita::find($id);
      $save->name = $request->nombre;
      $save->apellidos = $request->apellidos;
      $save->motivo = $request->motivo;
      $save->save();
      echo Response::json($save);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visita  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $save = Visita::find($id);
        $save->delete();
    }
}
