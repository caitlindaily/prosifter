<?php

class Post extends BaseModel {

	//The db table that this model relates to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //Validation rules for our model properties
    //Static means you don't need to create an instance to use it
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

    public function user() {

        return $this->belongsTo('User');
    }

    public function addUploadedImage($image) {

        //Creating path and directory for files to live--will live under public dir and then the name we give the next dir
        $systemPath = public_path() . '/' . $this->imgDir . '/';//--> public/img-upload/
        //To make image name unique, apply post id to the image's origianl name
        $imageName = $this->id . '-' . $image->getClientOriginalName();//--> 2-image.jpg
        //Need to move newly named image into image dir that was created
        $image->move($systemPath, $imageName);
        //defines the image path. this is used when wanting to display image. ex:--> show.blade.php <img src="{{{ $post->img_path }}}"
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function purifyParseBody($truncate = false)
    {
        //Purifying HTML to protect
        $body = $truncate ? substr($this->body, 0, 100) : $this->body;
        $dirty_html = Parsedown::instance()->parse($body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $clean_html = $purifier->purify($dirty_html);
        //Parsing body input, converting to HTML
        return $clean_html;
    }

    public function setSlugAttribute ($title) 
    {
        $title = str_replace(' ', '-', trim($title));
        $this->attributes['slug'] = strtolower($title);
    }

    static public function findBySlug($slug) 
    {
       $post = self::where('slug', $slug)->first();
       return ($post == null) ? App::abort(404) : $post;
    } 

}