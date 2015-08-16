<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
 //    protected $fillable = array('user_name','password');
 //    protected $guarded = array('id');
 //    public $timestamps = false;

 //    public function week(){
 //        return $this->hasMany('Week','id');
 //    }

 //    public function comment(){
 //        return $this->hasMany('Comment','id');
 //    }

 //    public function myconcern(){
 //        return $this->hasMany('Concern','user_id_from');
 //    }

 //    public function concernme(){
 //        return $this->hasMany('Concern','user_id_to');
 //    }

}
