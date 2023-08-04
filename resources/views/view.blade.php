@extends('layouts.app')
@section('title', "App")
@section('content')
    <main>

        <section class="py-5 text-center container">
            <a href="{{route('welcome.index')}}" class="btn btn-success mb-5"><i class="fas fa-arrow-left"></i></a>
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="{{asset('storage/post/'.$post->image)}}">
                    <h1 class="fw-light mb-5 mt-5">Post - {{$post->title}}</h1>
                    <p class="lead text-muted">{{$post->description}}}</p>
                    <p>
                        <small class="text-muted">{{$post->author}}-{{$post->created_at}}</small>
                    </p>
                </div>
            </div>
        </section>
    </main>

@endsection


