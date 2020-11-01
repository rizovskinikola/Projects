@extends('layouts.app')

@section('content')


<h2>Едитирај категорија</h2>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Наслов на категорија')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Наслов на категорија'])}}
</div>

<div class="form-group">
    {{Form::label('body', 'Опис на категорија')}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Опис на категорија'])}}
</div>
<div class="form-group">
    {{Form::file('image')}}
</div>
<h2>Едитирај банер</h2>
<div class="form-group">
    {{Form::label('baner_title', 'Наслов на банер')}}
    {{Form::text('baner_title', $post->baner_title, ['class' => 'form-control', 'placeholder' => 'Наслов на банер'])}}
</div>

<div class="form-group">
    {{Form::label('baner_body', 'Опис на банер')}}
    {{Form::textarea('baner_body', $post->baner_body, ['class' => 'form-control', 'placeholder' => 'Опис на банер'])}}
</div>
<div class="form-group">
    {{Form::label('link', 'Линк за информации')}}
    {{Form::text('link', $post->link, ['class' => 'form-control', 'placeholder' => 'Линк за информации'])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Потврди', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}



@endsection




        