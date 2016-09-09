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

    'accepted'             => 'Isso :attribute está correto.',
    'active_url'           => 'Isso :attribute não me parece uma url válida.',
    'after'                => 'Isso :attribute deve ser maior que :date.',
    'alpha'                => 'Isso :attribute só pode conter letras.',
    'alpha_dash'           => 'Isso :attribute só pode conter letras, numeros, e traços.',
    'alpha_num'            => 'Isso :attribute só pode conter letras e numeros.',
    'array'                => 'Isso :attribute deve ser uma array.',
    'before'               => 'Isso :attribute deve ser menor que :date.',
    'between'              => [
        'numeric' => 'Isso :attribute deve ter entre :min e :max.',
        'file'    => 'Isso :attribute deve ter entre :min e :max kbytes.',
        'string'  => 'Isso :attribute deve ter entre :min e :max caracteres.',
        'array'   => 'Isso :attribute deve estar entre :min e :max itens.',
    ],
    'boolean'              => 'Isso :attribute precisa ser verdadeiro ou falso.',
    'confirmed'            => 'Isso :attribute não corresponde!',
    'date'                 => 'Isso :attribute não me parece ser uma data!',
    'date_format'          => 'Isso :attribute não está com o formato (:format) correto.',
    'different'            => 'Isso :attribute e :other devem ser diferentes!',
    'digits'               => 'Isso :attribute deve ter :digits digitos.',
    'digits_between'       => 'Isso :attribute deve ter entre :min e :max digitos.',
    'dimensions'           => 'Isso :attribute has invalid image dimensions.',
    'distinct'             => 'Isso :attribute field has a duplicate value.',
    'email'                => 'Isso :attribute must be a valid email address.',
    'exists'               => 'Isso selected :attribute is invalid.',
    'file'                 => 'Isso :attribute must be a file.',
    'filled'               => 'Isso :attribute field is required.',
    'image'                => 'Isso :attribute must be an image.',
    'in'                   => 'Isso selected :attribute is invalid.',
    'in_array'             => 'Isso :attribute field does not exist in :other.',
    'integer'              => 'Isso :attribute must be an integer.',
    'ip'                   => 'Isso :attribute must be a valid IP address.',
    'json'                 => 'Isso :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'Isso :attribute may not be greater than :max.',
        'file'    => 'Isso :attribute may not be greater than :max kilobytes.',
        'string'  => 'Isso :attribute may not be greater than :max characters.',
        'array'   => 'Isso :attribute may not have more than :max items.',
    ],
    'mimes'                => 'Isso :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Isso :attribute must be at least :min.',
        'file'    => 'Isso :attribute must be at least :min kilobytes.',
        'string'  => 'Isso :attribute must be at least :min characters.',
        'array'   => 'Isso :attribute must have at least :min items.',
    ],
    'not_in'               => 'Isso selected :attribute is invalid.',
    'numeric'              => 'Isso :attribute must be a number.',
    'present'              => 'Isso :attribute field must be present.',
    'regex'                => 'Isso :attribute format is invalid.',
    'required'             => 'Isso :attribute field is required.',
    'required_if'          => 'Isso :attribute field is required when :other is :value.',
    'required_unless'      => 'Isso :attribute field is required unless :other is in :values.',
    'required_with'        => 'Isso :attribute field is required when :values is present.',
    'required_with_all'    => 'Isso :attribute field is required when :values is present.',
    'required_without'     => 'Isso :attribute field is required when :values is not present.',
    'required_without_all' => 'Isso :attribute field is required when none of :values are present.',
    'same'                 => 'Isso :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'Isso :attribute must be :size.',
        'file'    => 'Isso :attribute must be :size kilobytes.',
        'string'  => 'Isso :attribute must be :size characters.',
        'array'   => 'Isso :attribute must contain :size items.',
    ],
    'string'               => 'Isso :attribute must be a string.',
    'timezone'             => 'Isso :attribute must be a valid zone.',
    'unique'               => 'Isso :attribute has already been taken.',
    'url'                  => 'Isso :attribute format is invalid.',

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

    'attributes' => [],

];
