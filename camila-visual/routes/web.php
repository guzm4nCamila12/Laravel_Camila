<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

Route::resource('productos', UsuariosController::class)
    ->only([‘index’, 'store'])
->middleware(['auth', 'verified']);   

// Una sola ruta
Route::get('/admin', function () {
    // ...
})->middleware('auth');


// Grupo de rutas
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        // ...
    });
    Route::get('/settings', function () {
        // ...
    });
});
// En controladores
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['delete', 'update']);
    }
}

// Definición
public function handle(Request $request, Closure $next, $role)
{
    if (!auth()->user()->hasRole($role)) {
        return abort(403);
    }
   
    return $next($request);
}


// Uso
Route::get('/admin', function () {
    // ...
})->middleware('role:admin');