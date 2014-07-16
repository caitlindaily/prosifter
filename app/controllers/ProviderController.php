<?php

class ProviderController extends BaseController {

    public function findProvider() {

    $provider = Provider::where('provider_id', '=', 'category_id')->get();
    // pass the $category on to the view
    return View::make('results')->with('provider', $provider);

	}

}