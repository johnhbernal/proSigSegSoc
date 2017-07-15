<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL vÃ¡lida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute sÃ³lo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sÃ³lo puede contener letras, nÃºmeros y guiones (a-z, 0-9, -_).',
    'alpha_num'            => 'El campo :attribute sÃ³lo puede contener letras y nÃºmeros.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmaciÃ³n de :attribute no coincide.',
    'country'              => 'El campo :attribute no es un paÃ­s vÃ¡lido.',
    'date'                 => 'El campo :attribute no corresponde con una fecha vÃ¡lida.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un nÃºmero de :digits dÃ­gitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dÃ­gitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones invalidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute no corresponde con una direcciÃ³n de e-mail vÃ¡lida.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'exists'               => 'El campo :attribute no existe.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un nÃºmero entero.',
    'ip'                   => 'El campo :attribute debe ser una direcciÃ³n IP vÃ¡lida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON vÃ¡lida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como mÃ¡ximo.',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como mÃ¡ximo.',
        'string'  => 'El campo :attribute debe contener :max caracteres como mÃ¡ximo.',
        'array'   => 'El campo :attribute debe contener :max elementos como mÃ¡ximo.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute no debe contener mÃ¡s de :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es invÃ¡lido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values estÃ¡ presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values estÃ¡ presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no estÃ¡ presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ningÃºn campo :values estÃ¡n presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'state'                => 'El estado no es vÃ¡lido para el paÃ­s seleccionado.',
    'string'               => 'El campo :attribute debe contener solo caracteres.',
    'timezone'             => 'El campo :attribute debe contener una zona vÃ¡lida.',
    'unique'               => 'El elemento :attribute ya estÃ¡ en uso.',
    'uploaded'             => 'El elemento :attribute fallo al subir.',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL vÃ¡lida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
    		'TIPO_DOCUMENTO'=>'Tipo de Documento',
    		'NUM_IDENTIFICACION'=>'Número de Identificación',
    		'PRIMER_NOMBRE'=>'Primer Nombre',
    		'SEGUNDO_NOMBRE'=>'Segundo Nombre',
    		'PRIMER_APELLIDO'=>'Primer Apellido',
    		'SEGUNDO_APELLIDO'=>'Segundo Apellido',
    		'FECHA_DE_NACIMIENTO'=>'Fecha de Nacimiento',
    		'SEXO'=>'Genero',
    		'GRUPO_SANGUINEO'=>'Grupo Sanguíneo',
    		'FACTOR_RH'=>'Factor RH',
    		'ETNIA'=>'Etnia',
    		'ESTADO_CIVIL'=>'Estado Civil',
    		'VINCULO_LABORAL'=>'Vínculo Laboral',
    		'ESTADO'=>'Estado',
    		'DISCAPACIDAD'=>'Discapacidad',
    		'CONDICION_DISCAPACIDAD'=>'Condición de Discapacidad',
    		'TIPO_DISCAPACIDAD'=>'Tipo Discapacidad',
//     		''=>'',

    ],

];
