<?php

class Producer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	'name' => 'required|unique:producers|min:3',
	'category' => 'required|min:2',
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	'description',
	'category_id',
	'active',
	'onsale',
	'upcomming',
	'preorder',
	'x-small',
	'small',
	'medium',
	'large',
	'x-large',
	'xx-large',
	'xxx-large',
	'onesize',
	];

	protected $table = 'producers';

}