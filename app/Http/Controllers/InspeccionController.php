<?php

namespace App\Http\Controllers;

use App\Http\Requests\InspeccionFormRequest;
use App\Models\Inspeccion;
use Illuminate\Http\Request;

class InspeccionController extends Controller
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
            $inspeccions = Inspeccion::where('user_id', '=', $request->session()->get('user'))->get();
            return view('admin.inspeccion.index', compact('searchText', 'inspeccions');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inspeccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InspeccionFormRequest $request)
    {
        $inspeccion = new Inspeccion();
        $inspeccion->user_id = $request->session()->get('user');
        $inspeccion->codigo = $request->codigo;
        $inspeccion->version = $request->version;
        $inspeccion->save();
        return redirect('admin/inspeccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inspeccion = Inspeccion::findOrfail($id);
        return view('admin.inspeccion.show', compact('inspeccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inspeccion = Inspeccion::findOrfail($id);
        return view('admin.inspeccion.show', compact('inspeccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function update(InspeccionFormRequest $request, $id)
    {
        $inspeccion = Inspeccion::findOrFail($id);
        $inspeccion->user_id = $request->session()->get('user');
        $inspeccion->codigo = $request->codigo;
        $inspeccion->version = $request->version;
        $inspeccion->update();
        return redirect('admin/inspeccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspeccion $inspeccion)
    {
        //
    }
}
