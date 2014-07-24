<?php

class CategoryController extends BaseController {

    public function findCategory($categoryName) {

	    $category = Category::where('name', '=', $categoryName)->first();
	    // pass the $category on to the view
	    return View::make('results')->with('category', $category);

	}

	// todo - make this work
	public function show($categoryName)
	{
		$category = Category::where('name', '=', $categoryName)->first();
	    $providers = $category->providers()->orderBy('created_at', 'desc')->paginate(5);

	    $data = array(
	    	'category' => $category,
	    	'providers' => $providers,
	    );
	    // pass the $category on to the view
	    return View::make('category.show')->with($data);
	}

}