<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


//::::::::::::::::::::::::cargos routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/cargo', [CargoController::class, 'index']);
Route::post('/api/cargo/registrar', [CargoController::class, 'store']);
Route::put('/api/cargo/actualizar', [CargoController::class, 'update']);
Route::delete('/api/cargo/eliminar', [CargoController::class, 'destroy']);

//::::::::::::::::::::::::categorias routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::delete('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);

//::::::::::::::::::::::::clientes routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/cliente', [CargoController::class, 'index']);
Route::post('/api/cliente/registrar', [CargoController::class, 'store']);
Route::put('/api/cliente/actualizar', [CargoController::class, 'update']);
Route::delete('/api/cliente/eliminar', [CargoController::class, 'destroy']);

//::::::::::::::::::::::::compras routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/compra', [CompraController::class, 'index']);
Route::post('/api/compra/registrar', [CompraController::class, 'store']);
Route::put('/api/compra/actualizar', [CompraController::class, 'update']);
Route::delete('/api/compra/eliminar', [CompraController::class, 'destroy']);

//::::::::::::::::::::::::detalleCompra routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/detallecompra', [DetalleCompraController::class, 'index']);
Route::post('/api/detallecompra/registrar', [DetalleCompraController::class, 'store']);
Route::put('/api/detallecompra/actualizar', [DetalleCompraController::class, 'update']);
Route::delete('/api/detallecompra/eliminar', [DetalleCompraController::class, 'destroy']);

//::::::::::::::::::::::::detalleFactura routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/detallefactura', [DetalleFacturaController::class, 'index']);
Route::post('/api/detallefactura/registrar', [DetalleFacturaController::class, 'store']);
Route::put('/api/detallefactura/actualizar', [DetalleFacturaController::class, 'update']);
Route::delete('/api/detallefactura/eliminar', [DetalleFacturaController::class, 'destroy']);

//::::::::::::::::::::::::detallePedido routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/detallepedido', [DetallePedidoController::class, 'index']);
Route::post('/api/detallepedido/registrar', [DetallePedidoController::class, 'store']);
Route::put('/api/detallepedido/actualizar', [DetallePedidoController::class, 'update']);
Route::delete('/api/detallepedido/eliminar', [DetallePedidoController::class, 'destroy']);

//::::::::::::::::::::::::empleado routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/empleado', [EmpleadoController::class, 'index']);
Route::post('/api/empleado/registrar', [EmpleadoController::class, 'store']);
Route::put('/api/empleado/actualizar', [EmpleadoController::class, 'update']);
Route::delete('/api/empleado/eliminar', [EmpleadoController::class, 'destroy']);


//::::::::::::::::::::::::factura routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/factura', [FacturaController::class, 'index']);
Route::post('/api/factura/registrar', [FacturaController::class, 'store']);
Route::put('/api/factura/actualizar', [FacturaController::class, 'update']);
Route::delete('/api/factura/eliminar', [FacturaController::class, 'destroy']);

//::::::::::::::::::::::::pedido routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/pedido', [PedidoController::class, 'index']);
Route::post('/api/pedido/registrar', [PedidoController::class, 'store']);
Route::put('/api/pedido/actualizar', [PedidoController::class, 'update']);
Route::delete('/api/pedido/eliminar', [PedidoController::class, 'destroy']);

//::::::::::::::::::::::::producto routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/producto', [ProductoController::class, 'index']);
Route::post('/api/producto/registrar', [ProductoController::class, 'store']);
Route::put('/api/producto/actualizar', [ProductoController::class, 'update']);
Route::delete('/api/producto/eliminar', [ProductoController::class, 'destroy']);

//::::::::::::::::::::::::proveedores routes::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/proveedor', [ProveedorController::class, 'index']);
Route::post('/api/proveedor/registrar', [ProveedorController::class, 'store']);
Route::put('/api/proveedor/actualizar', [ProveedorController::class, 'update']);
Route::delete('/api/proveedor/eliminar', [ProveedorController::class, 'destroy']);

