<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;
	


	
	public $timestamps=false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'users';
	protected $fillable = array('name' ,'password','email','confirmed','role_id');
	

	public static $rules= array(
		'name'=>'requiered',
		'password'=>'requiered',
		

	);

	public static $messages= array
	(
		'name.requiered'=>'Name is requiered',
		'password.requiered'=>'Password is requiered',
		

	);

	public function role()
	{
		return $this->belongsTo('Role','role_id');
	}
	public function todo()
	{
		return $this->hasMany('Todo');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public function loggedUserId($role=null)
	{
		if(!Session::has('user_id_hash'))
		{
			return null;
		}
		$user=User::find(base64_decode(Session::get('user_id_hash')));

		if(is_null($user))
		{
			return null;
		}

		if(!is_null($role) && $user->role()->pluck('code')!= $role )
		{
			return null;
		}
		
		//return $user;
		return $user->id;
	}




public function loggedUser($role=null)
{
	if(!Session::has('user_id_hash'))
	{
		return null;
	}
	$user=User::find(base64_decode(Session::get('user_id_hash')));

	if(is_null($user))
	{
		return null;
	}

	if(!is_null($role) && $user->role()->pluck('code')!= $role )
	{
		return null;
	}
	
	return $user;
	
	}

}
