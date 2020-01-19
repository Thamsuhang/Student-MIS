<?php

namespace App\Repositories;

use App\Models\ClassAssignings;
use App\Repositories\BaseRepository;

/**
 * Class ClassAssigningsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:09 am UTC
*/

class ClassAssigningsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'class_assign_id';
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
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
        return ClassAssignings::class;
    }
}
