<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Editorial
 * @package App\Models
 * @version December 11, 2020, 11:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property string $nombre
 * @property string $sede
 */
class Editorial extends Model
{
    // use SoftDeletes;

    public $table = 'editoriales';
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'sede'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'sede' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'nullable|string|max:45',
        'sede' => 'nullable|string|max:45',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class, 'editoriales_id');
    }
}
