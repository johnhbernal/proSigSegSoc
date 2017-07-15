<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ParentescosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 1,
    			'CODIGO_PARENTESCO' => urlencode ('CY'),
    			'NOMBRE' => urlencode ( 'C�nyuge' ),
    			'DESCRIPCION' => urlencode ('C�nyuge. Con relaci�n formalizada mediante el v�nculo matrimonial.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 2,
    			'CODIGO_PARENTESCO' => urlencode ('CP'),
    			'NOMBRE' => urlencode ( 'Compa�era' ),
    			'DESCRIPCION' => urlencode ('Compa�era (o) permanente incluyendo las parejas del mismo sexo. Con uni�n marital de hecho. '),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 3,
    			'CODIGO_PARENTESCO' => urlencode ('HI'),
    			'NOMBRE' => urlencode ( 'Hijos' ),
    			'DESCRIPCION' => urlencode ('Hijos menores de veinticinco (25) a�os de edad. Que dependan econ�micamente del cotizante. '),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 4,
    			'CODIGO_PARENTESCO' => urlencode ('HD'),
    			'NOMBRE' => urlencode ( 'Hijos con Discapacidad' ),
    			'DESCRIPCION' => urlencode ('HD Los hijos de cualquier edad. Si tienen incapacidad permanente y dependen econ�micamente del cotizante. '),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 5,
    			'CODIGO_PARENTESCO' => urlencode ('HC'),
    			'NOMBRE' => urlencode ( 'Hijos del c�nyuge o compa�era o compa�ero.' ),
    			'DESCRIPCION' => urlencode ('Los hijos del c�nyuge o compa�era o compa�ero permanente del afiliado, incluyendo los de las parejas del mismo sexo. Si son menores de 25 a�os y dependen econ�micamente del cotizante, o de cualquier edad si presentan incapacidad permanente y dependen econ�micamente del cotizante. '),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 6,
    			'CODIGO_PARENTESCO' => urlencode ('HB'),
    			'NOMBRE' => urlencode ( 'Los hijos de los beneficiarios.' ),
    			'DESCRIPCION' => urlencode ('Los hijos de los beneficiarios. Son los nietos del cotizante cuyo padre o madre es beneficiario del cotizante.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 7,
    			'CODIGO_PARENTESCO' => urlencode ('MD'),
    			'NOMBRE' => urlencode ( 'Menores de veinticinco (25) a�os o de cualquier edad, con incapacidad permanente.' ),
    			'DESCRIPCION' => urlencode ('Los menores de veinticinco (25) a�os o de cualquier edad, con incapacidad permanente. Que dependan econ�micamente del cotizante y se encuentren hasta el tercer grado de consanguinidad, como consecuencia del fallecimiento de los padres, la p�rdida de la patria potestad o la ausencia de �stos.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 8,
    			'CODIGO_PARENTESCO' => urlencode ('PD'),
    			'NOMBRE' => urlencode ( 'Padres del cotizante.' ),
    			'DESCRIPCION' => urlencode ('PD Padres del cotizante. Que no est�n pensionados y dependan econ�micamente del cotizante, cuando este no inscribe como beneficiarios al c�nyuge o compa�era(o) permanente o a los hijos.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 9,
    			'CODIGO_PARENTESCO' => urlencode ('MC'),
    			'NOMBRE' => urlencode ( 'Menores de dieciocho (18) a�os en custodia.' ),
    			'DESCRIPCION' => urlencode ('Menores de dieciocho (18) a�os en custodia. Entregados en custodia legal al cotizante o cabeza de familia, por autoridad competente.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    	DB::table ( 'sis_seg_soc_p_parentesco' )->insert ( array (
    			'CONS_PARENTESCO' => 10,
    			'CODIGO_PARENTESCO' => urlencode ('AA'),
    			'NOMBRE' => urlencode ( 'Persona de cualquier edad como afiliada adicional.' ),
    			'DESCRIPCION' => urlencode ('Persona de cualquier edad que depende econ�micamente del cotizante y se encuentra en el 4� grado de consanguinidad o 2� de afinidad, respecto de este.'),
    			'created_by' => 'admin',
    			'created_at' => Carbon::now ()
    	) );
    }
}
