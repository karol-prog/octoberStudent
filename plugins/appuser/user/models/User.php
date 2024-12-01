<?php namespace AppUser\User\Models;

use Model;
use October\Rain\Database\Traits\Hashable;

use Laravel\Sanctum\HasApiTokens;
/**
 * auth Model
 */
class User extends Authenticatable
{
	use HasApiTokens, Hashable;
	use Hashable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'users';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

	/**
     * @var array Hashable passowrd
     */
    public $hashable = ['password'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
