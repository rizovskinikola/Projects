{{-- @extends('layouts.app')

@section('content')

<h1>Post</h1>
<div class="container">
    <div class="row">

@if (count($posts) > 1)
@foreach ($posts as $post) 
            <div class="col-md-4">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>    
@endforeach
</div>                  
</div>

@else
<p>No posts found</p>
    
@endif
    
@endsection
 --}}
