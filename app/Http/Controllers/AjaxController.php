<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Auth\Access\Response;

class AjaxController extends Controller {
	/**
	 *
	 * @return mixed
	 */
	public function index() {
		return view ( 'usuarios.index' );
	}
	
	/**
	 *
	 * @return mixed
	 */
	public Static function getUsuarios() {
		// $tasks = Task::select(['id','name','category','state']);
		
		// $usuarios = Usuario::select(['id']);
		
		// echo '<pre>';
		// print_r($usuarios);
		// echo '</pre>';
		// die(__FILE__.' '.__LINE__);
		
		// echo '5555';
		// die(__FILE__.' '.__LINE__);
		
		/*
		 * campos tabla
		 * id
		 * NUM_IDENTIFICACION
		 * LOGIN_ID
		 * TIPO_DOCUMENTO
		 * PRIMER_NOMBRE
		 * SEGUNDO_NOMBRE
		 * PRIMER_APELLIDO
		 * SEGUNDO_APELLIDO
		 * FECHA_DE_NACIMIENTO
		 * ESTADO
		 * SEXO
		 * GRUPO_SANGUINEO
		 * FACTOR_RH
		 * ESTADO_CIVIL
		 * VINCULO_LABORAL
		 * DISCAPACIDAD
		 * TIPO_DISCAPACIDAD
		 * CONDICION_DISCAPACIDAD
		 * ETNIA
		 * created_by
		 * deleted_at
		 * created_at
		 * updated_at
		 *
		 * campos tabla
		 */
		return Datatables::of ( DB::select ( 'select id,NUM_IDENTIFICACION,PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,updated_at from sis_seg_soc_p_usuario' ) )->make ( true );
		// $usuarios= Datatables::of(DB::select('select id,NUM_IDENTIFICACION,PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,updated_at from sis_seg_soc_p_usuario'))->make(true);
		
		// $usuarios = json_decode($json_string);
		
		// return view ( 'usuarios.index', compact ( 'usuarios' ));
	}
	public function deleteUsuario(Request $request, $id) {
		if ($request->ajax ()) {
			
			try {
				
				$usuario = Usuario::find ( $id );
				
				// $resultDeleteUsuario = $usuario->delete ();
				$response;
				
				if ($usuario->delete ()) {
					
					// echo '<pre>';
					// print_r('dentro del if');
					// echo '</pre>';
					// die(__FILE__.' '.__LINE__);
					// $response = array(
					// 'status' => 'success',
					// 'msg' => 'El usuario con numero de identificaci�n '+ $id+'fue eliminado correctamente.',
					// );
					
					// $id =string($id);
					
					return response ()->json ( [ 
							'status' => 'success',
							'msg' => 'El usuario fue eliminado correctamente.' 
					] )->withCallback ();
					
					// return response ()->json ( 'El usuario con numero de identificaci�n ' + $id + 'fue eliminado correctamente.' );
					return response ()->json ( $response );
					// return ( 'El usuario con numero de identificaci�n ' + $id + 'fue eliminado correctamente.' );
				} else {
					// $response = array(
					// 'status' => 'error',
					// 'msg' => 'El usuario con numero de identificaci�n '+ $id+'no fue eliminado.',
					// );
					return response ()->json ( 'Error al intentar eliminar el usuario.' );
				}
			} catch ( \Exception $e ) {
				// return response()->json($e->getMessage());
				return response ()->json ( 'error en catch AjaxController' + $e->getCode () );
			}
			
			// return \Response::json($response);
			// return json_encode($customer_response, JSON_PRETTY_PRINT);
		} else {
			
			echo '<pre>';
			return ('error ajax ');
			// print_r($id);
			echo '</pre>';
			die ( __FILE__ . ' ' . __LINE__ );
		}
	}
	/**
	 * funcion utilizada para redireccionar a el usuario
	 * 
	 * @param Request $request        	
	 * @param unknown $id        	
	 */
	public function updateUsuario( $id) {
	
			
			try {
				
				return UsuarioController::show ( $id );

				
			} catch ( \Exception $e ) {
				// return response()->json($e->getMessage());
				return response ()->json ( 'error en catch AjaxController' + $e->getCode () );
			}
			// $usuario = Usuario::find ( $id );
		
	}
}
