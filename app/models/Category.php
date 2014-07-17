<?php

class Category extends BaseModel {

	protected $table = 'categories';

	public function providers()
		{
	  	  return $this->belongsToMany('Provider', 'provider_category');
		}
}