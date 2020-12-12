<?php

namespace App\Repositories;

use App\Models\Books;
use App\Repositories\BaseRepository;

/**
 * Class BooksRepository
 * @package App\Repositories
 * @version December 12, 2020, 12:39 am UTC
*/

class BooksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ISBN',
        'editoriales_id',
        'titulo',
        'sinopsis',
        'n_paginas'
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
        return Books::class;
    }
}
