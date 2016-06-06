<?php

namespace App\Repositories;

use App\Models\Subestacion;
use InfyOm\Generator\Common\BaseRepository;

class SubestacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subestacion::class;
    }
}
