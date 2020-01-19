<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shifts
 * @package App\Models
 * @version January 14, 2020, 10:05 am UTC
 *
 * @property string shift
 */
class Shifts extends Model
{
    use SoftDeletes;

    public $table = 'shifts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'shift_id';

    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shift_id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shift' => 'required'
    ];

    
}
