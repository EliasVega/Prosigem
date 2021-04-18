<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvocatoriaFormrequest;
use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
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
            $convocatorias = Convocatoria::where('sede_id', '=', $request->session()->get('sede'))->paginate(7);
        }
        return view('admin.convocatoria.index', compact('searchText', 'convocatorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(('admin.convocatoria.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvocatoriaFormrequest $request)
    {
        $convocatoria            = new Convocatoria();
        $convocatoria->empresa_id   = $request->session()->get('empresa');
        $convocatoria->sede_id   = $request->session()->get('sede');
        $convocatoria->user_id   = $request->session()->get('user');
        $convocatoria->codigo    = 'FT-SST-001';
        $convocatoria->nombre    = $request->nombre;
        $convocatoria->version   = $request->version;
        $convocatoria->fecha     = $request->fecha;
        $convocatoria->hora      = $request->hora;
        $convocatoria->rep_legal = $request->rep_legal;
        $convocatoria->save();
        return redirect('admin/convocatoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convocatoria = Convocatoria::findOrFail($id)->get();
        return view('admin.convocatoria.show', compact('convocatoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convocatoria = Convocatoria::findOrFail($id)->get();
        return view('admin.convocatoria.show', compact('convocatoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function update(ConvocatoriaFormrequest $request, $id)
    {
        $convocatoria            = Convocatoria::findOrFail($id);
        $convocatoria->sede_id   = $request->session()->get('empresa');
        $convocatoria->sede_id   = $request->session()->get('sede');
        $convocatoria->user_id   = $request->session()->get('user');
        $convocatoria->codigo    = 'FT-SST-001';
        $convocatoria->nombre    = $request->nombre;
        $convocatoria->version   = $request->version;
        $convocatoria->fecha     = $request->fecha;
        $convocatoria->hora      = $request->hora;
        $convocatoria->rep_legal = $request->rep_legal;
        $convocatoria->update();
        return redirect('admin/convocatoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convocatoria $convocatoria)
    {
        //
    }

    public function pdfConvocatoria($id){
        $convocatorias = Convocatoria::findOrFail($id)->get();
        $empresa = DB::table('empresas AS em')->select('em.id', 'em.nombre', 'em.imagen')->where('em.id', '=', \Session::get('empresa'))->get();
        $view = \view('admin.pdf.convocatoria', ['convocatorias' => $convocatorias]);
        $pdf = \app('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('convocatoria.pdf');
    }
}
