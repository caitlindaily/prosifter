Want to display results of companys in specific category

1.Heading on page: Name of Category

2.Loop through and display all companys that are associated with specific category
-----------------

1. <h1>{{{ $category->title }}}</h1>
// Models
// Provider belongsToMany('Category')
// Category belongsToMany('Provider')

// Controller: $category = Category::findOrFail($value)
// pass the $category on to the view

// view: {{ $category->title }}
// @foreach($category->provider as $provider)





2. @foreach($providers as $provider)
   <h2>{{ link_to_action('PostsController@show', $post->title, $post->category) }}</h2>
   <hr>
   @endforeach

<!--Pagination-->
<div class="center">	
{{ $posts->appends(['search'=> Input::get('search')])->links() }}
</div>   
