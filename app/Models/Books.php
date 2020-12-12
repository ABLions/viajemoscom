<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Books
 * @package App\Models
 * @version December 12, 2020, 12:39 am UTC
 *
 * @property integer $ISBN
 * @property integer $editoriales_id
 * @property string $titulo
 * @property string $sinopsis
 * @property string $n_paginas
 */
class Books extends Model
{
    // use SoftDeletes;

    public $table = 'libros';
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'ISBN',
        'editoriales_id',
        'titulo',
        'sinopsis',
        'n_paginas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ISBN' => 'integer',
        'editoriales_id' => 'integer',
        'titulo' => 'string',
        'sinopsis' => 'string',
        'n_paginas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ISBN' => 'nullable|integer',
        'editoriales_id' => 'nullable|integer',
        'titulo' => 'nullable|string|max:45',
        'sinopsis' => 'nullable|string',
        'n_paginas' => 'nullable|string|max:45',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}
