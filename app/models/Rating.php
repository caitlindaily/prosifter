<?php

class Rating extends BaseModel {

	protected $table = 'ratings';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function provider()
	{
		return $this->belongsTo('Provider');
	}
}