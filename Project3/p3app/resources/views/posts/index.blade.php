@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
    <div class="col-md-12 text-center join">
        <h1 class="join-text"> <b>Приклучи се на 1350 ентузијасти и учи дигитални вештини. Бесплатно.</b></h1>
        <input class="input" type="email" placeholder="Email adress"  ><span class="btn-light "> Пријави се</span>
        <h6>Можеш да се исклучиш од листата на маилови во секое време</h6>


    </div>
</div>
    <div class="row cards-margin">

@if (count($posts) > 0)
@foreach ($posts as $post) 
            <div class="col-xs-12  col-md-6 col-lg-4 cards">
                <a href="/posts/{{$post->id}}">
                <img class="picture" src="/storage/cover_images/{{$post->image}}" alt="">
                <h4>{{$post->title}}</h4>
                <p>{{$post->body}}</p>
                <small>6 лекции</small>
                </a>
            </div>    
@endforeach
</div>                  
</div>


    
@endif


  
        

    
@endsection

