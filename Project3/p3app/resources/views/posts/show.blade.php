@extends('layouts.app')

@section('content')


<div class="container lessons">
    <div class="row">
        <div class="col-md-9 bg-white">
            <div class="lesson">
                <h3><b>Learning from failed community how to build Remote clan</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>
        <div class="lesson">
            <h3><b>Step by step of how we build the remote clan</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>
        <div class="lesson">
            <h3><b>How i realised that tracking metrics is a double-edged sword</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>
        <div class="lesson">
            <h3><b>Ex-digital nomad is erasing borders & growing remote work with Crypto</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>
        <div class="lesson">
            <h3><b>School curriculum and teaching during coronavirus</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>
        <div class="lesson">
            <h3><b>Remote teaching webinars</b></h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ad consequatur deleniti dolore eos eum similique reiciendis minus excepturi quasi. 
            Possimus quasi voluptatem distinctio consequuntur exercitationem eaque deserunt impedit modi rerum.
        </div>


        </div>
        <div class="col-md-3 bg-white baner">
          
            
        <h3>{{$post->baner_title}}</h3>
            <p>
                {{$post->baner_body}}
            </p>
        <p class="btn btn-success"><a href="{{$post->link}}">Повеќе...</a></p>
        

        </div>
    </div>
</div>

{{-- <h1>{{$post->title}}</h1>


<hr>
<small>Written on {{$post->created_at}}</small>
<hr> --}}

{{-- @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
<hr>


        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif --}}
    
@endsection

