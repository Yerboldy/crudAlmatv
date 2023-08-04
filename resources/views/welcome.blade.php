@extends('layouts.app')
@section('title', "App")
@section('content')
        <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Лента новостей</h1>
{{--                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>--}}
{{--                    <p>--}}
{{--                        <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
{{--                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @forelse($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{asset('storage/post/'.$post->image)}}" alt="">

                            <div class="card-body">
                                <h3 class="card-title text-center text-muted">{{$post->description}}</h3>
                                <p class="card-text">{{Str::limit($post->title, 100)}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('welcome.view', $post)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="{{route('crud.post.edit', $post)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-muted">{{$post->author}}-{{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h2 class="text-muted">No posts</h2>
                    @endforelse()
                </div>
            </div>
        </div>

    </main>

@endsection

