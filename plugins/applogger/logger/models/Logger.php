<?php namespace Applogger\Logger\Models;

use Model;

/**
 * logger Model
 */
class Logger extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'studentsInOctober';

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['firstName', 'numberOfAttendence', 'attendenceTime', 'wasLate'];

	public $firstName;

    public $numberOfAttendence;

    public $attendenceTime;

    public $wasLate;

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
		'firstName' => 'required|max:15',
		'numberOfAttendence' => 'required|integer',
		'attendenceTime' => 'required|date',
		'wasLate' => 'required|boolean'
	];

	/**
     * @var bool Indicates if the model should be timestamped.
     */
    public $timestamps = false; // Disable automatic timestamps
}
