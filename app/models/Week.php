<?php

class Week extends Eloquent{
    public $timestamps = false;
    protected $fillable = array('id','username','password');
    protected $guarded = array('id');
    public function user(){
        return $this->belongsTo('User','id');
    }
    public function common(){
        return $this->hasMany('Common','weibo_id');
    }
}