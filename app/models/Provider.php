<?php

class Provider extends BaseModel {

	protected $table = 'providers';

	static public $rules = [
    	//'rating' => 'required|max:100',
    ];

	public function category()
	{
  	    return $this->belongsToMany('Category', 'provider_category');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function ratings()
	{
		return $this->hasMany('Rating');
	}

	public function avgRating()
	{
		//Grabs ratings for provider and takes the average, then formats the decimal places by 1 place.
		$avgRating =  $this->ratings()->avg('rating');
		$rating = number_format($avgRating, 1);
		return $rating;
	}

	//Depending upon the rating, a different color will be displayed
	public function getColor()
	{
		$rating = $this->avgRating();

		if ($rating > 4.0) {
		    $color = '#0F0';
		} elseif ($rating > 3.0 && $rating < 4.0) {
			$color = '#00F';
		} elseif ($rating == 0) {
			$color = '#B8C0DB';
		} else {
			$color = '#F00';
		}
	    return $color;
	}

}

