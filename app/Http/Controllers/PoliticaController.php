<?php

namespace App\Http\Controllers;

use App\Http\Requests\PoliticaFormRequest;
use App\Models\Politica;
use Illuminate\Http\Request;

class PoliticaController extends Controller
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
            $politicas = Politica::get();
        }

        return view('admin.politica.index',compact('searchText', 'politicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.politica.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoliticaFormRequest $request)
    {
        $politica = new Politica;
        $politica->user_id = $request->session()->get('user');
        $politica->titulo = $request->titulo;
        $politica->contenido = $request->contenido;
        $politica->save();

        return redirect('admin/politica');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $politica = Politica::findOrfail($id);
        return view("admin.politica.show", compact('politica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $politica = Politica::findOrfail($id);
        return view("admin.politica.show", compact('politica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function update(PoliticaFormRequest $request, $id)
    {
        $politica = Politica::findOrFail($id);
        $politica->user_id = $request->session()->get('user');
        $politica->titulo = $request->titulo;
        $politica->contenido = $request->contenido;
        $politica->update();

        return redirect('admin/politica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politica  $politica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Politica $politica)
    {
        //
    }
}
