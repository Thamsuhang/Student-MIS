<?php

namespace App\Repositories;

use App\Models\Levels;
use App\Repositories\BaseRepository;

/**
 * Class LevelsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:03 am UTC
*/

class LevelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'role_id';
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
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
        return Levels::class;
    }
}
