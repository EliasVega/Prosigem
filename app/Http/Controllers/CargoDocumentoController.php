<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoDocumentoFormRequest;
use App\Models\Cargo;
use App\Models\CargoDocumento;
use App\Models\Documento;
use Illuminate\Http\Request;

class CargoDocumentoController extends Controller
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
            $documentos = Documento::get();
            $cargoDocumentos = CargoDocumento::join('cargos', 'cargo_documentos.cargo_id', '=', 'cargos.id')->join('documentos', 'cargo_documentos.documento_id', '=', 'documentos.id')->select('cargos.id', 'cargos.nombre AS cargoNombre', 'documentos.id AS idDocumento', 'documentos.nombre AS documentoNombre', 'cargo_documentos.id')->where('cargo_documentos.cargo_id', '=', $request->session()->get('cargo')) ->get();

            return view('admin.cargoDocumento.index', compact('searchText', 'documentos', 'cargoDocumentos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::get();
        $documentos = Documento::get();
        return view('admin.cargoDocumento.create', compact('cargos', 'documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoDocumentoFormRequest $request)
    {
        $cargoDocumento = new CargoDocumento();
        $cargoDocumento->cargo_id = $request->session()->get('cargo');
        $cargoDocumento->documento_id = $request->documento_id;
        $cargoDocumento->save();
        return redirect('admin/cargoDocumento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CargoDocumento  $cargoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargoDocumento = CargoDocumento::findOrFail($id);
        \Session::put('cargoDocumento', $cargoDocumento->documento_id, 60 * 24 * 365);
        \Session::put('nombreDocumento', $cargoDocumento->documentoNombre, 60 * 24 * 365);

        switch($id)
        {
            case 1:
                return redirect('admin/inspeccion/create');
            break;

            case 2:
                return redirect('admin/matrizRiesgo/create');
            break;

            case 3:
                return redirect('admin/politica/create');
            break;

            case 4:
                return redirect('admin/programa/create');
            break;

            case 5:
                return redirect('admin/convocatoria/create');
            break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CargoDocumento  $cargoDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargoDocumento = CargoDocumento::findOrfail($id);
        $cargos = Cargo::get();
        $documentos = Documento::get();
        return view('admin.cargoDocumento.edit', compact('cargoDocumento', 'cargos', 'documentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CargoDocumento  $cargoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(CargoDocumentoFormRequest $request, $id)
    {
        $cargoDocumento = CargoDocumento::findOrFail($id);
        $cargoDocumento->cargo_id = $request->session()->get('cargo');
        $cargoDocumento->documento_id = $request->documento_id;
        $cargoDocumento->update();
        return redirect('admin/cargoDocumento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CargoDocumento  $cargoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoDocumento $cargoDocumento)
    {
        //
    }
}
