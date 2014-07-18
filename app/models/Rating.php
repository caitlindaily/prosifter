<?php

class Rating extends BaseModel {

	protected $table = 'ratings';


	public function user()
	{
		return $this->belongsTo('User');
	}

	public function providers()
	{
		return $this->belongsTo('Provider');
	}
}