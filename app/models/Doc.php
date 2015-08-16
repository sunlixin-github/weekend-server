<?php
class Doc extends Eloquent{
    public $timestamps = false;
    protected $fillable = ['name','psw'];
    protected $guarded = ['id'];
}