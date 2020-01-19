<?php

namespace App\Repositories;

use App\Models\Times;
use App\Repositories\BaseRepository;

/**
 * Class TimesRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:07 am UTC
*/

class TimesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $primaryKey = 'time_id';
    protected $fieldSearchable = [
        'time'
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
        return Times::class;
    }
}
