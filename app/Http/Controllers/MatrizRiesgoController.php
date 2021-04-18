<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatrizRiesgoFormRequest;
use App\Models\MatrizRiesgo;
use Illuminate\Http\Request;

class MatrizRiesgoController extends Controller
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
            $matrizRiesgos = MatrizRiesgo::get();
        }
        return view('admin.matrizRiesgo.index', compact('searchText', 'matrixRiesgos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.matrizRiesgo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatrizRiesgoFormRequest $request)
    {
        $matrizRiesgo = new MatrizRiesgo;
        $matrizRiesgo->user_id = $request->session()->get('user');
        $matrizRiesgo->area = $request->area;
        $matrizRiesgo->descripcion = $request->descripcion;
        $matrizRiesgo->save();

        return redirect('admin/matrizRiesgo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatrizRiesgo  $matrizRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matrizRiesgo = MatrizRiesgo::findOrfail($id);
        return view("admin.matrizRiesgo.show", compact('matrizRiesgo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatrizRiesgo  $matrizRiesgo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matrizRiesgo = MatrizRiesgo::findOrfail($id);
        return view("admin.matrizRiesgo.edit", compact('matrizRiesgo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatrizRiesgo  $matrizRiesgo
     * @return \Illuminate\Http\Response
     */
    public function update(MatrizRiesgoFormRequest $request, $id)
    {
        $matrizRiesgo = MatrizRiesgo::findOrFail($id);
        $matrizRiesgo->user_id = $request->session()->get('user');
        $matrizRiesgo->area = $request->area;
        $matrizRiesgo->descripcion = $request->descripcion;
        $matrizRiesgo->update();

        return redirect('admin/matrizRiesgo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatrizRiesgo  $matrizRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatrizRiesgo $matrizRiesgo)
    {
        //
    }
}
