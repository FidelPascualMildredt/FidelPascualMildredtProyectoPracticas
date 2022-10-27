<?php

use App\Models\Dia;
use App\Models\Rol;
use App\Models\User;
use App\Models\Pedido;
use App\Models\Status;
use App\Models\Horario;
use App\Models\Negocio;
use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\DetallePedido;
use Illuminate\Support\Facades\Route;
//importar la clase
use App\Http\Controllers\RolController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\CategoriaController;

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
    return view('welcome');
});

// Route::get('/', function () {

//     $item = User::find(3);

//     dd($item->pedidosRepartidos);
//     echo 'Negocio = '. $item->negocio->nombre. '</br>';
//     echo 'Cliente = '. $item->cliente->nombre. '</br>';
//     echo 'Repartidor = '. $item->repartidor->nombre. '</br>';
//     echo '============================================'. '</br>';
//     echo '              Detalle'. '</br>';
//     echo '============================================'. '</br>';


//     foreach ($item->productos as $item) {

//         echo '__________________________________________'. '</br>';
//         echo 'Producto: '.$item->nombre. '</br>';
//         echo 'Cantidad: '.$item->pivot->cantidad. '</br>';
//         echo 'Precio: '.$item->pivot->precio. '</br>';
//         echo '__________________________________________'. '</br></br>';
//     }
//     // dd($item);
//     // return view('welcome');
// });



//crear el resourse(crea 7)
Route::resource('categoria', CategoriaController::class);
Route::resource('rol', RolController::class);
Route::resource('negocio', NegocioController::class);
Route::resource('status', StatusController::class);


// solitarios
Route::get('mirutaapiG',[RolController::class,'index'])->name('rol.index');
Route::post('mirutaapiP',[RolController::class,'index'])->name('rol.store');
Route::put('mirutaapip',[RolController::class,'index'])->name('rol.update');
Route::delete('mirutaapiD',[RolController::class,'destroy'])->name('rol.destroy');
