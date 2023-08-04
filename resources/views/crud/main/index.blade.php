@extends('layouts.crud')
@section('title', "CRUD")
@section('content')
    <div cl></div>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">CRUD example</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">CRUD example</h1>
                    <p class="col-md-8 fs-4">My CRUD example</p>
                    <a href="{{route('welcome.index')}}" class="btn btn-primary btn-lg" type="button">Home</a>
                </div>
            </div>
            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2023
            </footer>
        </div>
    </main>
@endsection
