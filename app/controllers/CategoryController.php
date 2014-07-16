<?php

class CategoryController extends BaseController {

    public function findCategory($categoryName) {

	    $category = Category::where('name', '=', $categoryName)->first();
	    // pass the $category on to the view
	    return View::make('results')->with('category', $category);

	}

}