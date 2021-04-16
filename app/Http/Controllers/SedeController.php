<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use App\Http\Requests\SedeFormRequest;
use App\Models\Act_Eco;
use App\Models\ActividadEconomica;
use App\Models\Arl;
use App\Models\Departamento;
use App\Models\Empresa;
use App\Models\Municipio;
use Illuminate\Http\Request;

class SedeController extends Controller
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
            $sedes = Sede::where('empresa_id', '=', $request->session()->get('empresa'))->get();
        }
        return view('admin.sede.index', compact('searchText', 'sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::get();
        $municipios = Municipio::get();
        $empresas = Empresa::get();
        $actividadEconomicas = ActividadEconomica::get();
        $arls = Arl::get();
        return view('admin.sede.create', compact('departamentos', 'municipios', 'empresas', 'actividadEconomicas', 'arls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SedeFormRequest $request)
    {
        $sede = new Sede();
        $sede->departamento_id = $request->departamento_id;
        $sede->municipio_id = $request->municipio_id;
        $sede->empresa_id = $request->session()->get('empresa');
        $sede->actividadEconomica_id = $request->actividadEconomica_id;
        $sede->arl_id = $request->arl_id;
        $sede->nombre = $request->nombre;
        $sede->nit = $request->nit;
        $sede->direccion = $request->direccion;
        $sede->telefono = $request->telefono;
        $sede->celular = $request->celular;
        $sede->nivel_riesgo = $request->nivel_riesgo;
        $sede->gerente = $request->gerente;
        $sede->save();
        return redirect('admin/sede');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::findOrFail($id);
        \Session::put('sede', $sede->id, 60 * 24 * 365);
        \Session::put('nombre', $sede->nombre, 60 * 24 * 365);

        return redirect('admin/proceso')

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Departamento::get();
        $municipios = Municipio::get();
        $empresas = Empresa::get();
        $actividadEconomicas = Act_Eco::get();
        $arls = Arl::get();
        return view('admin.sede.edit', compact('departamentos', 'municipios', 'empresas', 'actividadEconomicas', 'arls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(SedeFormRequest $request, $id)
    {
        $sede = Sede::findOrFail($id);
        $sede->departamento_id = $request->departamento_id;
        $sede->municipio_id = $request->municipio_id;
        $sede->empresa_id = $request->session()->get('empresa');
        $sede->actividadEconomica_id = $request->actividadEconomica_id;
        $sede->arl_id = $request->arl_id;
        $sede->nombre = $request->nombre;
        $sede->nit = $request->nit;
        $sede->direccion = $request->direccion;
        $sede->telefono = $request->telefono;
        $sede->celular = $request->celular;
        $sede->nivel_riesgo = $request->nivel_riesgo;
        $sede->gerente = $request->gerente;
        $sede->update();
        return redirect('admin/sede');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        //
    }

    public function getMunicipios(Request $request, $id)
    {
        if($request)
        {
            $municipio = Municipio::where('departamento_id', '=', $id)->get();

            return response()->json($municipio);
        }
    }
}
