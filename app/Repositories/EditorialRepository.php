<?php

namespace App\Repositories;

use App\Models\Editorial;
use App\Repositories\BaseRepository;

/**
 * Class EditorialRepository
 * @package App\Repositories
 * @version December 11, 2020, 11:16 pm UTC
*/

class EditorialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'sede'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Editorial::class;
    }
}
