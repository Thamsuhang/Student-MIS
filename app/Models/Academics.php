<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Academics
 * @package App\Models
 * @version January 14, 2020, 10:07 am UTC
 *
 * @property string academic_year
 */
class Academics extends Model
{
    use SoftDeletes;

    public $table = 'academics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $primaryKey = 'academic_id';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'academic_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academic_id' => 'integer',
        'academic_year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'academic_year' => 'required'
    ];

    
}
