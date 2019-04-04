@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">Welcome to our site!</h1>
        <p class="lead">This website was made using Laravel 5.8!</p>
        <hr class="my-4">
        <p>This site was made with the help of WebDev Hacks.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fab fa-twitter"></i> Follow</a>
    </div>

@endsection

@section('scripts')
    <script>
        console.log("Hello, World!");
    </script>
@endsection