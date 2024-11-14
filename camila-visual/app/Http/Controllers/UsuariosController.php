<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // public function lista()
    // {
    //     return 'Camila, aqui se listan todos los clientes';
    // }
    // public function cliente()
    // {
    //     return 'Camila, aqui se obtiene un cliente';
    // }
    // public function crear()
    // {
    //     return 'Camila, aqui se crea un cliente';
    // }
    // public function actualizar()
    // {
    //     return 'Camila, aqui se actualiza un clientes';
    // }
    // public function eliminar()
    // {
    //     return 'Camila, aqui se elimina un cliente';
    // }

    public function index()
    {
        return response('Hello, World!');//
    }

    // Middleware de Autenticación
// public function handle(Request $request, Closure $next)
// {
//     if (!auth()->check()) {
//         return redirect('/login');
//     }
   
//     return $next($request);
// }


// // Middleware de Verificación de Rol
// // public function handle(Request $request, Closure $next)
// // {
// //     if (!auth()->user()->hasRole('admin')) {
// //         return abort(403, 'No autorizado');
// //     }
   
// //     return $next($request);
// // }


// // Middleware de API
// public function handle(Request $request, Closure $next)
// {
//     if (!$request->hasHeader('api-key')) {
//         return response()->json(['error' => 'API key requerida'], 401);
//     }
   
//     return $next($request);
// }


}
