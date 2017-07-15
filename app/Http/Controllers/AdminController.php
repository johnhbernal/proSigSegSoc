<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Controllers\UsuarioController;

class AdminController extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
    return 	$usuarios =UsuarioController::index();
   	
//     	return view('admin', compact ( 'usuarios' ));

    }
}
