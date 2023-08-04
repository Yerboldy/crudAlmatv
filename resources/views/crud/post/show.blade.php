@extends('layouts.crud')
@section('title', "Show Post")
@section('title', $post->title)
@section('content')
    <h1 class="mt-5 mb-5 text-muted">Category - {{$post->title}}</h1>
    <a href="{{route('crud.post.index')}}" class="btn btn-success mb-5"><i class="fas fa-arrow-left"></i></a>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('storage/post/'.$post->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->author}}-{{$post->created_at}}</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection



