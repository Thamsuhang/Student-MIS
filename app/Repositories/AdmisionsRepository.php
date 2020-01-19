<?php

namespace App\Repositories;

use App\Models\Admisions;
use App\Repositories\BaseRepository;

/**
 * Class AdmisionsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:20 am UTC
*/

class AdmisionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'admission_id';
    protected $fieldSearchable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'email',
        'DOB',
        'Phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'Date registered',
        'user_id',
        'class_id',
        'image'
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
        return Admisions::class;
    }
}
