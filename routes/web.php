<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CargoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/////////////////////////////ruta cargo///////////////////////////////////////////
Route::middleware(['auth:sanctum'])->get('/api/cargo', [CargoController::class, 'index'])->name('cargo')->name('cargo');
Route::middleware(['auth:sanctum'])->post('/api/cargo/registrar', [CargoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/cargo/actualizar', [CargoController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/cargo/eliminar', [CargoController::class, 'destroy']);

///////////////////////////ruta categoria///////////////////////////////////////////
Route::middleware(['auth:sanctum'])->get('/api/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::middleware(['auth:sanctum'])->post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/categoria/actualizar', [Categoriatroller::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);

//////////////////////////ruta cliente ////////////////////////////////////////

Route::middleware(['auth:sanctum'])->get('/api/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::middleware(['auth:sanctum'])->post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

//////////////////////// ruta compra ///////////////////////////////////

Route::middleware(['auth:sanctum'])->get('/api/compra', [CompraController::class, 'index'])->name('compra');
Route::middleware(['auth:sanctum'])->post('/api/compra/registrar', [CompraController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/compra/actualizar', [CompraController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/compra/eliminar', [CompraController::class, 'destroy']);

///////////////////////// ruta Detella compra////////////////////////

Route::middleware(['auth:sanctum'])->get('/api/detallecompra', [DetalleCompraController::class, 'index'])->name('detallecompra');
Route::middleware(['auth:sanctum'])->post('/api/detallecompra/registrar', [DetalleCompraController::class, 'store']);
Route::middleware(['auth:sanctum'])->post('/api/detallecompra/registrar', [DetalleCompraController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/detallecompra/actualizar', [DetalleCompraController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/detallecompra/eliminar', [DetalleCompraController::class, 'destroy']);

//////////////////////// ruta detalle factura /////////////////////
 

Route::middleware(['auth:sanctum'])->get('/api/detallefactura', [DetalleFacturaController::class, 'index'])->name('detallefactura');
Route::middleware(['auth:sanctum'])->post('/api/detallefactura/registrar', [DetalleFacturaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/detallefactura/actualizar', [DetalleFacturaController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/detallefactura/eliminar', [DetalleFacturaController::class, 'destroy']);

//////////////////// ruta detalle pedido ///////////////////////

Route::middleware(['auth:sanctum'])->get('/api/detallepedido', [DetallePedidoController::class, 'index'])->name('detallepedido');
Route::middleware(['auth:sanctum'])->post('/api/detallepedido/registrar', [DetallePedidoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/detallepedido/actualizar', [DetallePedidoController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/detallepedido/eliminar', [DetallepedidoController::class, 'destroy']);

/////////////////////// ruta empleado ////////////////////////////////////////////


Route::middleware(['auth:sanctum'])->get('/api/empleado', [EmpleadoController::class, 'index'])->name('empleado');
Route::middleware(['auth:sanctum'])->post('/api/empleado/registrar', [EmpleadoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/empleado/actualizar', [EmpleadoController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/empleado/eliminar', [EmpleadoController::class, 'destroy']);


///////////////////////////////// ruta factura ///////////////////////////////////////


Route::middleware(['auth:sanctum'])->get('/api/factura', [FacturaController::class, 'index'])->name('factura');
Route::middleware(['auth:sanctum'])->post('/api/factura/registrar', [FacturaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/factura/actualizar', [FacturaController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/factura/eliminar', [FacturaController::class, 'destroy']);

//////////////////////////////////// ruta pedido////////////////////////////////////////


Route::middleware(['auth:sanctum'])->get('/api/pedido', [PedidoController::class, 'index'])->name('pedido');
Route::middleware(['auth:sanctum'])->post('/api/pedido/registrar', [PedidoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/pedido/actualizar', [PedidoController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/pedido/eliminar', [PedidoController::class, 'destroy']);


///////////////////////////////////// ruta producto /////////////////////////////////


Route::middleware(['auth:sanctum'])->get('/api/producto', [ProductoController::class, 'index'])->name('producto');
Route::middleware(['auth:sanctum'])->get('/api/producto/data', [ProductoController::class, 'indexData']);
Route::middleware(['auth:sanctum'])->post('/api/producto/registrar', [ProductoController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/producto/actualizar', [ProductoController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/producto/eliminar', [ProductoController::class, 'destroy']);


/////////////////////////////////////// ruta proveedor /////////////////////////////

Route::middleware(['auth:sanctum'])->get('/api/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::middleware(['auth:sanctum'])->post('/api/proveedor/registrar', [ProveedorController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/proveedor/actualizar', [ProveedorController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/proveedor/eliminar', [ProveedorController::class, 'destroy']);


