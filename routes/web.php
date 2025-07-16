<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ControllerCategorias;
use App\Http\Controllers\ControllerComercioProductos;
use App\Http\Controllers\ControllerComercios;
use App\Http\Controllers\ControllerComerciosCategorias;
use App\Http\Controllers\ControllerContacto;
use App\Http\Controllers\ControllerImagenesComercio;
use App\Http\Controllers\ControllerImagenesProducto;
use App\Http\Controllers\ControllerInicio;
use App\Http\Controllers\ControllerInicioCategorias;
use App\Http\Controllers\ControllerProductos;
use App\Http\Controllers\ControllerSliders;
use App\Http\Controllers\ControllerWebmaster;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', ControllerInicio::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

////////////////////////////////////////////////////////////////////////////////////////////////////////////

// WEBMASTER
Route::middleware('auth', 'role:webmaster')->group(function () {

    Route::resource('/accion', ControllerWebmaster::class);
    Route::get('/webmaster', [ControllerWebmaster::class, 'index'])->name('dashboardAdmin.index');

    Route::resource('/slider', ControllerSliders::class);
    

    //USUARIOS
    Route::get('/usuarios', [ControllerWebmaster::class, 'mostrarUsuarios'])->name('dashboardAdmin.usuarios.index');

    Route::get('/usuarios/create', function () {
        return view('dashboardAdmin.usuarios.create');
    })->name('dashboardAdmin.usuarios.create');

    Route::get('/usuarios/edit', function () {
        return view('dashboardAdmin.usuarios.edit');
    })->name('dashboardAdmin.usuarios.edit');

    //CATEGORIAS

    Route::resource('/categorias', ControllerCategorias::class);
});


//  USUARIO
Route::middleware('auth', 'role:user')->group(function () {

    Route::get('/usuario', [UserController::class, 'dashboard'])->name('usuario');

    //Inicio dashboard cliente

    //Edicion ClientProdu
    Route::get('/edit', [ControllerComercios::class, 'editarIn'])->name('edit');

    // Route::resource('/productos', ControllerProductos::class);
    Route::resource('/galeria', ControllerImagenesProducto::class);

    Route::resource('/productos', ControllerProductos::class);

    Route::resource('/galeriaComercio', ControllerImagenesComercio::class);

    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/comercio/update', [UserController::class, 'update'])->name('comercio.update');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('register');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// CATEGORIAS

Route::get('/categoria/comercio/plantilla', function () {
    return view('categoria.comercio.plantilla');
});


Route::resource('/productosComercio', ControllerComercioProductos::class);


Route::get('/categoria/comercio/contacto/{id}', [ControllerContacto::class, 'contacto'])->name('contacto');

Route::get('/categoriasB', [ControllerCategorias::class, 'categoria'])->name('categorias.todos');

Route::get('/categoria/{id?}', [ControllerCategorias::class, 'categoria'])->name('categoria');

// Route::get('/categoria/comercio/categoria', function () {
//     return view('categoria.comercio.categoria');
// })->name('categoria');


Route::get('/plantilla', function () {
    return view('inicio.plantilla');
})->name('plantilla');

Route::get('/modelos', function () {
    return view('inicio.modelos');
})->name('modelos');

//CAROUSEL

//envio de correos
Route::post('/enviar-contacto', [ContactController::class, 'enviarContacto'])->name('send.contact');


//RUTAS FRANCINI 
Route::get('/', [ControllerComercios::class, 'index_inicio_comercio'])->name('inicio');
Route::get('/comercios', [ControllerComercios::class, 'index'])->name('Comercios');
Route::get('/buscar', [ControllerComercios::class, 'buscar'])->name('buscar');
Route::get('/categoria/comercio/informacion/{id}', [ControllerComercios::class, 'informacion'])->name('informacion');
Route::get('/categoria/comercio/galeria/{id}', [ControllerComercios::class, 'galeria'])->name('galeria');


//RUTAS JALI
Route::get('/comercios/productos/{id}', [ControllerComercios::class, 'productos'])->name('productos');

Route::get('/categoria/comercio/productos/producto', function () {
    return view('categoria.comercio.producto');
})->name('producto');

Route::get('/product/{id}', [ControllerProductos::class, 'show'])->name('productos.show');

// Route::get('/categoriaInicio', ControllerInicioCategorias::class, '')

Route::resource('/comerciosCategorias', ControllerInicioCategorias::class);

Route::get('/', [ControllerInicio::class, 'index'])->name('inicio');
