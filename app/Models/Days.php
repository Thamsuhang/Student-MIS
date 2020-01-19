<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Days
 * @package App\Models
 * @version January 14, 2020, 10:07 am UTC
 *
 * @property string day_name
 */
class Days extends Model
{
    use SoftDeletes;

    public $table = 'days';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'days_id';



    public $fillable = [
        'day_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'days_id' => 'integer',
        'day_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'day_name' => 'required'
    ];

    
}
