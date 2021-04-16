<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArlFormRequest;
use App\Models\Arl;
use Illuminate\Http\Request;

class ArlController extends Controller
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
            $arls = Arl::get();
        }
        return view('admin.arl.index', compact('searchText', 'arls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.arl.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArlFormRequest $request)
    {
        $arl = new Arl;
        $arl->nombre = $request->nombre;
        $arl->save();

        return redirect('admin/arl');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arl = Arl::findOrfail($id);
        return view('admin.arl.show', compact('arl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arl = Arl::findOrfail($id);
        return view('admin.arl.edit', compact('arl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function update(ArlFormRequest $request, $id)
    {
        $arl = Arl::findOrFail($id);
        $arl->nombre = $request->nombre;
        $arl->update();
        return redirect('admin/arl');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arl $arl)
    {
        //
    }
}
