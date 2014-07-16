<?php

class Category extends BaseModel {

	protected $table = 'categories';

	public function provider()
		{
	  	  return $this->belongsToMany('Provider', 'provider_category');
		}
}