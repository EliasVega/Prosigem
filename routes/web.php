<?php

use App\Http\Controllers\ActividadEconomicaController;
use App\Http\Controllers\ArlController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CargoDocumentoController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\InspeccionController;
use App\Http\Controllers\MatrizRiesgoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('admin/departamento', DepartamentoController::class);
Route::resource('admin/municipio', MunicipioController::class);
Route::resource('admin/servicio', ServicioController::class);
Route::resource('admin/empresa', EmpresaController::class);
Route::resource('admin/actEco', ActividadEconomicaController::class);
Route::resource('admin/arl', ArlController::class);
Route::resource('admin/role', RoleController::class);
Route::resource('admin/sede', SedeController::class);
Route::resource('admin/proceso', ProcesoController::class);
Route::resource('admin/cargo', CargoController::class);
Route::resource('admin/documento', DocumentoController::class);
Route::resource('admin/cargoDocumento', CargoDocumentoController::class);
Route::resource('admin/inspeccion', InspeccionController::class);
Route::resource('admin/matrizRiesgo', MatrizRiesgoController::class);
Route::resource('admin/politica', PoliticaController::class);
Route::resource('admin/programa', ProgramaController::class);
Route::resource('admin/convocatoria', ConvocatoriaController::class);

Route::get('/getMunicipio', [EmpresaController::class, 'getMunicipio']);
Route::get('/personalShow', [EmpresaController::class, 'personalShow'])->name('personalShow');
Route::get('/getMunicipio', [SedeController::class, 'getMunicipio']);
Route::get('/createDocumento', [CargoController::class, 'createDocumento'])->name('createDocumento');
Route::get('/userShow', [CargoController::class, 'userShow'])->name('userShow');
Route::post('admin/cargo/documento/{id}', [CargoController::class, 'storeDocumento'])->name('stroeDocumento');
Route::get('admin/convocatoria/pdfConvocatoria/{id}', [ConvocatoriaController::class, 'pdfConvocatoria'])->name('pdfConvocatoria');

