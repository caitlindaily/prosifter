<?php

class CategoryController extends BaseController {

    public function findCategory($categoryName) {

    $category = Category::where('name', '=', $categoryName)->get();
    // pass the $category on to the view
    return View::make('results')->with('category', $category);

	}

}