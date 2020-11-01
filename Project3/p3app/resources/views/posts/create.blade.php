@extends('layouts.app')

@section('content')


<h2>Креирај нова категорија</h2>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Наслов на категорија')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Наслов на категорија'])}}
</div>

<div class="form-group">
    {{Form::label('body', 'Опис на категорија')}}
    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Опис на категорија'])}}
</div>
<div>Додади слика за категорија</div>
<div class="form-group">
    {{Form::file('image')}}
</div>
<div>Додади банер</div>
<div class="form-group">
    {{Form::label('baner_title', 'Наслов на банер')}}
    {{Form::text('baner_title', '', ['class' => 'form-control', 'placeholder' => 'Наслов на банер'])}}
</div>
<div class="form-group">
    {{Form::label('baner_body', 'Опис на банер')}}
    {{Form::textarea('baner_body', '', ['class' => 'form-control', 'placeholder' => 'Опис на банер'])}}
</div>
<div class="form-group">
    {{Form::label('link', 'Линк за информации')}}
    {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Линк за информации'])}}
</div>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection




        