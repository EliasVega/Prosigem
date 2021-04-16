<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Empresa;
use App\Models\Proceso;
use App\Models\Role;
use App\Models\Sede;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CargoFormRequest;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
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
            $cargos = Cargo::where('proceso_id', '=', $request->session()->get('proceso'))->get();
            return view('admin.cargo.index', compact('cargos', 'searchText'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('admin.cargo.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoFormRequest $request)
    {
        try{
            DB::beginTransaction();
            $cargo = new Cargo();
            $cargo->empresa_id = $request->session()->get('empresa');
            $cargo->sede_id = $request->session()->get('sede');
            $cargo->proceso_id = $request->session()->get('proceso');
            $cargo->nombre = $request->nombre;
            $cargo->jefe = $request->jefe;
            $cargo->subcargos = $request->subcargos;
            $cargo->rol = $request->rol;
            $cargo->func_cargo = $request->func_cargo;
            $cargo->resp_cargo = $request->resp_cargo;
            $cargo->resp_sgi = $request->resp_sgi;
            $cargo->autoridad = $request->autoridad;
            $cargo->rend_ctas = $request->rend_ctas;
            $cargo->educacion = $request->educacion;
            $cargo->formacion = $request->formacion;
            $cargo->experiencia = $request->experiencia;
            $cargo->habilidades = $request->habilidades;
            $cargo->save();


            $role_id = $request->role_id;
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $genero = $request->genero;
            $identificacion = $request->identificacion;
            $edad = $request->edad;
            $telefono = $request->telefono;
            $nivel_educativo = $request->nivel_educativo;
            $personas_cargo = $request->personas_cargo;

            for ($i = 0; $i<count($iduser); $i++)
            {
                $user = new User();
                $user->cargo_id = $cargo->id;
                $user->proceso_id = $cargo->proceso_id;
                $user->sede_id = $cargo->sede_id;
                $user->empresa_id = $cargo->empresa_id;
                $user->role_id = $role_id[$i];
                $user->name = $name[$i];
                $user->email = $email[$i];
                $user->password = Hash::make($password[$i]);
                $user->genero = $genero[$i];
                $user->identificacion = $identificacion[$i];
                $user->edad = $edad[$i];
                $user->telefono = $telefono[$i];
                $user->nivel_educativo = $nivel_educativo[$i];
                $user->personas_cargo = $personas_cargo[$i];
                $user->estado = '1';
                $user->save();
            }
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
        }

        return redirect('admin/cargo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        \Session::put('cargo', $cargo->id, 60 * 24 * 365);
        \Session::put('nombre', $cargo->nombre, 60 * 24 * 365);

        return redirect('admin/cargoDocumento')

    }

    public function usershow($id)
    {
        $cargo = Cargo::findOrFail($id);
        \session()->put('cargo', $cargo->id, 60 * 24 * 365);
        \session()->put('nombre', $cargo->nombre, 60 * 24 *365);
        return redirect('admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = Cargo::findOrfail($id);
        $empresas = Empresa::get();
        $sedes = Sede::get();
        $procesos = Proceso::get();
        return view('admin.cargo.edit', compact('cargo', 'empresas', 'sedes', 'procesos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(CargoFormRequest $request, $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->empresa_id = $request->session()->get('empresa');
        $cargo->sede_id = $request->session()->get('sede');
        $cargo->proceso_id = $request->session()->get('proceso');
        $cargo->nombre = $request->nombre;
        $cargo->jefe = $request->jefe;
        $cargo->subcargos = $request->subcargos;
        $cargo->rol = $request->rol;
        $cargo->func_cargo = $request->func_cargo;
        $cargo->resp_cargo = $request->resp_cargo;
        $cargo->resp_sgi = $request->resp_sgi;
        $cargo->autoridad = $request->autoridad;
        $cargo->rend_ctas = $request->rend_ctas;
        $cargo->educacion = $request->educacion;
        $cargo->formacion = $request->formacion;
        $cargo->experiencia = $request->experiencia;
        $cargo->habilidades = $request->habilidades;
        $cargo->update();
        return redirect('admin/cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        //
    }
    /*
    public function getCargoDocumento(Request $request)
    {
        if($request)
        {
            $cardocs = CargoDocumento::join('cargos', 'cargo_documentos.cargo_id', '=', 'cargos.id')->join('documentos', 'cargo_documentos.documento_id', '=', 'documentos.id')->select('cargos.id', 'cargos.nombre AS cargoNombre', 'documentos.id AS idDocumento', 'documentos.nombre AS documentoNombre', 'cargo_documentos.id')->where('cargo_documentos.cargo_id', '=', $request->session()->get('cargo'))->get();
            return response()->json($cardocs);
        }
    }*/

    public function createDocumento($id){
        $documentos = Documento::get();
        $cardocs = DB::table('cargo_documentos AS cardoc')->join('documentos AS doc', 'cardoc.documento_id', '=', 'doc.id')->join('cargos AS car', 'cardoc.cargo_id', '=', 'car.id')->select('cardoc.id', 'doc.id AS idDocumento', 'doc.nombre AS documentoNombre', 'car.id', 'car.nombre AS cargoNombre')->where('cardoc.cargo_id', '=', $id)->get();
        return view("admin.cargo.documento", [
            "cargo" => Cargo::findOrFail($id),
            'documentos' => $documentos,
            "cardocs" => $cardocs,
        ]);
    }

    public function storeDocumento(CargoDocumentoFormRequest $request, $id)
    {
        try{
            DB::beginTransaction();
            $cargo = Cargo::findOrFail($id);
            $documento = $request->documento_id;
            $cont = 0;

            while($cont < count($documento))
            {
                $cardoc = new CargoDocumento();
                $cardoc->cargo_id = $cargo->id;
                $cardoc->documento_id = $documento[$cont];
                $cardoc->save();
                $cont++;
            }
            DB::commit();
        }catch(Exception $e)
        {
            DB::rollback();
        }
        return redirect('admin/cargo');
    }
}
