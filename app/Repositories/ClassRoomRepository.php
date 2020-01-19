<?php

namespace App\Repositories;

use App\Models\ClassRoom;
use App\Repositories\BaseRepository;

/**
 * Class ClassRoomRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:01 am UTC
*/

class ClassRoomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'classroom_id';
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
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
        return ClassRoom::class;
    }
}
