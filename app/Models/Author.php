<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 * @version December 11, 2020, 11:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $autoresHasLibros
 * @property string $nombre
 * @property string $apellidos
 */
class Author extends Model
{
    // use SoftDeletes;

    public $table = 'autores';
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellidos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'nullable|string|max:45',
        'apellidos' => 'nullable|string|max:45',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function autoresHasLibros()
    {
        return $this->hasMany(\App\Models\AutoresHasLibro::class, 'autores_id');
    }
}
