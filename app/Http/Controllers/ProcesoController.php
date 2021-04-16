<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcesoFormRequest;
use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $searchText = trim($request->get('searchText'));
            $procesos = Proceso::where('sede_id', '=', $request->session()->get('sede'))->get();
            return view('admin.proceso.index', compact('searchText', 'procesos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcesoFormRequest $request)
    {
        $proceso = new Proceso();
        $proceso->sede_id = $request->session()->get('sede');
        $proceso->nombre = $request->nombre;
        $proceso->lider = $request->lider;
        $proceso->requisitos = $request->requisitos;
        $proceso->alcance = $request->alcance;
        $proceso->obj_esp = $request->obj_esp;
        $proceso->recursos = $request->recursos;
        $proceso->salidas = $request->salidas;
        $proceso->estrategias = $request->estrategias;
        $proceso->save();
        return redirect('admin/proceso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proceso = Proceso::findOrFail($id);
        \Session::put('proceso', $proceso->id, 60 * 24 * 365);
        \Session::put('nombre', $proceso->nombre, 60 * 24 * 365);

        return redirect('admin/cargo');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceso = Proceso::findOrfail($id);
        return view('admin.proceso.edit', compact('proceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(ProcesoFormRequest $request, $id)
    {
        $proceso = Proceso::findOrFail($id);
        $proceso->sede_id = $request->session()->get('sede');
        $proceso->nombre = $request->nombre;
        $proceso->lider = $request->lider;
        $proceso->requisitos = $request->requisitos;
        $proceso->alcance = $request->alcance;
        $proceso->obj_esp = $request->obj_esp;
        $proceso->recursos = $request->recursos;
        $proceso->salidas = $request->salidas;
        $proceso->estrategias = $request->estrategias;
        $proceso->update();
        return redirect('admin/proceso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceso $proceso)
    {
        //
    }
}
