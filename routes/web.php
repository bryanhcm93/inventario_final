<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/api/cargo', [CargoController::class, 'index']);
Route::post('/api/cargo/registrar', [CargoController::class, 'store']);
Route::put('/api/cargo/actualizar', [CargoController::class, 'update']);
Route::delete('/api/cargo/eliminar', [CargoController::class, 'destroy']);

///////////////////////////ruta categoria///////////////////////////////////////////
Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/api/categoria/actualizar', [Categoriatroller::class, 'update']);
Route::delete('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);

//////////////////////////ruta cliente ////////////////////////////////////////

Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::delete('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

//////////////////////// ruta compra ///////////////////////////////////

Route::get('/api/compra', [CompraController::class, 'index']);
Route::post('/api/compra/registrar', [CompraController::class, 'store']);
Route::put('/api/compra/actualizar', [CompraController::class, 'update']);
Route::delete('/api/compra/eliminar', [CompraController::class, 'destroy']);

///////////////////////// ruta Detella compra////////////////////////

Route::get('/api/detallecompra', [DetalleCompraController::class, 'index']);
Route::post('/api/detallecompra/registrar', [DetalleCompraController::class, 'store']);
Route::put('/api/detallecompra/actualizar', [DetalleCompraController::class, 'update']);
Route::delete('/api/detallecompra/eliminar', [DetalleCompraController::class, 'destroy']);

//////////////////////// ruta detalle factura /////////////////////
 

Route::get('/api/detallefactura', [DetalleFacturaController::class, 'index']);
Route::post('/api/detallefactura/registrar', [DetalleFacturaController::class, 'store']);
Route::put('/api/detallefactura/actualizar', [DetalleFacturaController::class, 'update']);
Route::delete('/api/detallefactura/eliminar', [DetalleFacturaController::class, 'destroy']);

//////////////////// ruta detalle pedido ///////////////////////

Route::get('/api/detallepedido', [DetallePedidoController::class, 'index']);
Route::post('/api/detallepedido/registrar', [DetallePedidoController::class, 'store']);
Route::put('/api/detallepedido/actualizar', [DetallePedidoController::class, 'update']);
Route::delete('/api/detallepedido/eliminar', [DetallepedidoController::class, 'destroy']);

/////////////////////// ruta empleado ////////////////////////////////////////////


Route::get('/api/empleado', [EmpleadoController::class, 'index']);
Route::post('/api/empleado/registrar', [EmpleadoController::class, 'store']);
Route::put('/api/empleado/actualizar', [EmpleadoController::class, 'update']);
Route::delete('/api/empleado/eliminar', [EmpleadoController::class, 'destroy']);


///////////////////////////////// ruta factura ///////////////////////////////////////


Route::get('/api/factura', [FacturaController::class, 'index']);
Route::post('/api/factura/registrar', [FacturaController::class, 'store']);
Route::put('/api/factura/actualizar', [FacturaController::class, 'update']);
Route::delete('/api/factura/eliminar', [FacturaController::class, 'destroy']);

//////////////////////////////////// ruta pedido////////////////////////////////////////


Route::get('/api/pedido', [PedidoController::class, 'index']);
Route::post('/api/pedido/registrar', [PedidoController::class, 'store']);
Route::put('/api/pedido/actualizar', [PedidoController::class, 'update']);
Route::delete('/api/pedido/eliminar', [PedidoController::class, 'destroy']);


///////////////////////////////////// ruta producto /////////////////////////////////


Route::get('/api/producto', [ProductoController::class, 'index']);
Route::post('/api/producto/registrar', [ProductoController::class, 'store']);
Route::put('/api/producto/actualizar', [ProductoController::class, 'update']);
Route::delete('/api/producto/eliminar', [ProductoController::class, 'destroy']);


/////////////////////////////////////// ruta proveedor /////////////////////////////

Route::get('/api/proveedor', [ProveedorController::class, 'index']);
Route::post('/api/proveedor/registrar', [ProveedorController::class, 'store']);
Route::put('/api/proveedor/actualizar', [ProveedorController::class, 'update']);
Route::delete('/api/proveedor/eliminar', [ProveedorController::class, 'destroy']);


