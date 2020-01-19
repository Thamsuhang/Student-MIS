<?php

namespace App\Repositories;

use App\Models\Shifts;
use App\Repositories\BaseRepository;

/**
 * Class ShiftsRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:05 am UTC
*/

class ShiftsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'shift_id';
    protected $fieldSearchable = [
        'shift'
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
        return Shifts::class;
    }
}
