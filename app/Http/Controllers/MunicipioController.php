<?php

namespace App\Http\Controllers;

use App\Http\Requests\MunicipioFormRequest;
use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $searchText = trim($request->get('searchText'));
            $municipios = Municipio::paginate(10);
            return view('admin.municipio.index', compact('searchText', 'municipios'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::get();
        return view('admin.municipio.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicipioFormRequest $request)
    {
        $municipio = new Municipio();
        $municipio->departamento_id = $request->departamento_id;
        $municipio->nombre = $request->nombre;
        $municipio->save();

        return redirect('admin/municipio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipio::findOrfail($id);
        return view('admin.municipio.show', compact('municipio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipio::findOrfail($id);
        $departamentos = Departamento::get();
        return view('admin.municipio.edit', compact('municipio', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(MunicipioFormRequest $request, $id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->departamento_id = $request->departamento_id;
        $municipio->nombre = $request->nombre;
        $municipio->update();

        return redirect('admin/municipio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        //
    }
}
