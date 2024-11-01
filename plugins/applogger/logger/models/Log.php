<?php namespace Applogger\Logger\Models;

use Model;

/**
 * logger Model
 */
class Log extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'students_in_october';

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['first_name', 'number_of_attendence', 'attendence_time', 'was_late'];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
		'first_name' => 'required|max:15',
		'number_of_attendence' => 'required|integer',
		'attendence_time' => 'required|date',
		'was_late' => 'required|boolean'
	];
}
