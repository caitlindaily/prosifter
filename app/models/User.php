<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $rules = array(
		'password' => 'confirmed'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function post()
	{
  	  return $this->hasMany('Post');
	}

	public function provider()
	{
		return $this->hasOne('Provider', 'admin_user_id');
	}

	public function setPasswordAttribute($value)
	{
		return $this->attributes['password'] = Hash::make($value);
	}
}
