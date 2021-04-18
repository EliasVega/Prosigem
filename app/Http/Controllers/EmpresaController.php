<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaFormRequest;
use App\Models\Departamento;
use App\Models\Empresa;
use App\Models\Municipio;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;



class EmpresaController extends Controller
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
            $empresas = Empresa::paginate(7);
            return view('admin.empresa.index', compact('searchText', 'empresas'));
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
        $municipios = Municipio::get();
        $servicios = Servicio::get();
        $users = User::where('role_id', '=', 2)->get();
        return view('admin.empresa.create', compact('departamentos', 'municipios', 'servicios', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaFormRequest $request)
    {
        $empresa = new Empresa();
        $empresa->departamento_id = $request->departamento_id;
        $empresa->municipio_id = $request->municipio_id;
        $empresa->servicio_id = $request->servicio_id;
        $empresa->nombre = $request->nombre;
        $empresa->asesor = $request->asesor;
        $empresa->inicio_servicio = $request->inicio_servicio;
        $empresa->fin_servicio = $request->fin_servicio;
        $empresa->fecha_facturacion = $request->fecha_facturacion;
        $empresa->estado = '1';
        //Handle File Upload
        if($request->hasFile('imagen')){
            //Get filename with the extension
            $filenamewithExt = $request->file('imagen')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('imagen')->guessClientExtension();
            //FileName to store
            $fileNameToStore = time().'.'.$extension;
            //Upload Image
            $path = $request->file('logo');
            $path = move(public_path() . 'imagemes/logos', $fileNameToStore);
        } else{
            $fileNameToStore="noimagen.jpg";
        }
        $empresa->imagen=$fileNameToStore;
        $empresa->save();

        return redirect('admin/empresa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        \Session::put('empresa', $empresa->id, 60 * 24 * 365);
        \Session::put('nombre', $empresa->nombre, 60 * 24 * 365);

        return redirect('admin/sede');

    }

    public function personalShow($id)
    {
        $empresa = Empresa::findOrFail($id);
        \Session::put('empresa', $empresa->id, 60 * 24 * 365);
        \Session::put('nombre', $empresa->nombre, 60 * 24 * 365);
        return Redirect::to('admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrfail($id);
        $departamentos = Departamento::get();
        $municipios = Municipio::get();
        $servicios = Servicio::get();
        $users = User::where('role_id', '=', '2')->get();
        return view("admin.empresa.edit", compact('empresa', 'departamentos', 'muncipios', 'servicios', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaFormRequest $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->departamento_id = $request->departamento_id;
        $empresa->municipio_id = $request->municipio_id;
        $empresa->servicio_id = $request->servicio_id;
        $empresa->nombre = $request->nombre;
        $empresa->asesor = $request->asesor;
        $empresa->inicio_servicio = $request->inicio_servicio;
        $empresa->fin_servicio = $request->fin_servicio;
        $empresa->fecha_facturacion = $request->fecha_facturacion;
        $empresa->estado = '1';
        //Handle File Upload
        if($request->hasFile('imagen')){
            /*si la imagen que subes es distinta a la que está por defecto
            entonces eliminaría la imagen anterior, eso es para evitar
            acumular imagenes en el servidor*/
          if($empresa->imagen != 'noimagen.jpg'){
            Storage::delete('public/img/empresa/'.$empresa->imagen);
          }
            //Get filename with the extension
          $filenamewithExt = $request->file('imagen')->getClientOriginalName();
          //Get just filename
          $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
          //Get just ext
          $extension = $request->file('imagen')->guessClientExtension();
          //FileName to store
          $fileNameToStore = time().'.'.$extension;
          //Upload Image
          $path = $request->file('imagen')->storeAs('public/img/empresa',$fileNameToStore);
        } else {
            $fileNameToStore = $empresa->imagen;
        }
         $empresa->imagen=$fileNameToStore;
        $empresa->update();

        return redirect('admin/empresa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $empresa= Empresa::findOrFail($request->id);

            if($empresa->estado == 1){

                $empresa->estado= 0;
                $empresa->save();

                return redirect('admin/empresa');


            } else{

                $empresa->estado= 1;
                $empresa->save();
                return redirect('admin/empresa');

            }
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
