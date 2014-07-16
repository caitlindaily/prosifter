Want to display results of companys in specific category

1.Heading on page: Name of Category

2.Loop through and display all companys that are associated with specific category
-----------------

1. <h1>{{{ $category->name }}}</h1>
// Models
// Provider belongsToMany('Category')
// Category belongsToMany('Provider')


// view: {{ $category->title }}
// @foreach($category->provider as $provider)
<h2>{{ link_to_action('ProviderController@findProvider', $provider->company_name, $provider->location) }}</h2>
	@endforeach







