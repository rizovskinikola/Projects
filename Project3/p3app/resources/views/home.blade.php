@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Админ панел</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <a href="/posts/create" class="btn btn-success">Креирај нова категорија </a> 
                      <hr>
                    <table class="table table-striped">
                        <tr>
                            <th>Наслов</th> 
                        </tr>
                        
                        @foreach ($posts as $post)
                        <tr>
                        <td> {{$post->title}} </td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Едитирај</a></td>
                        <td>
                            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Избриши', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        </tr>
                            
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
