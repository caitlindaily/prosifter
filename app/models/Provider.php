<?php

class Provider extends BaseModel {

	protected $table = 'providers';

	public function category()
	{
  	  return $this->belongsToMany('Category', 'provider_category');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}