<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model;

class To_do extends Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;
	

    public $timestamps=false;
    protected $table = 'to_do';
    protected $fillable = array('task_name', 'today', 'task_expire','description','done','user_id');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */


	public function users()
	{
		return $this->belongsTo('User', 'user_id');

		
	}
	protected $hidden = array('password', 'remember_token');

}
