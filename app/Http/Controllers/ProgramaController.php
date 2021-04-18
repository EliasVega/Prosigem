<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramaFormrequest;
use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
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
            $programas = Programa::get();
        }
        return view('admin.programa.index', compact('searchText', 'programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.programa.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaFormrequest $request)
    {
        $programa = new Programa;
        $programa->user_id = $request->session()->get('user');
        $programa->titulo = $request->titulo;
        $programa->introduccion = $request->introduccion;
        $programa->save();

        return redirect('admin/programa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programa = Programa::findOrfail($id);
        return view("admin.programa.show", compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programa = Programa::findOrfail($id);
        return view("admin.programa.show", compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramaFormrequest $request, $id)
    {
        $programa = Programa::findOrFail($id);
        $programa->user_id = $request->session()->get('user');
        $programa->titulo = $request->titulo;
        $programa->introduccion = $request->introduccion;
        $programa->update();

        return redirect('admin/programa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
