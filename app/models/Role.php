<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model;

class Role extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    public $timestamps=false;
    protected $table = 'role';
    protected $fillable = array('code', 'name', 'active');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */


	public function users()
	{
		return $this->hasMany('User');

		
	}
	protected $hidden = array('password', 'remember_token');

}
