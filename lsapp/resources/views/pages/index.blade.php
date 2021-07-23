@extends('layouts.app')


@section('content')
  <main class="container" style="margin-top:4rem">
    <div class="jumbotron text-center">
      <h1>Welcome To Laravel</h1>
      <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
      <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-primary btn-lg" href="/register" role="button">register</a></p>
    </div>
  </main>
@endsection



{{-- <h1>{{$title}}</h1>
<p>This is the laravel application from the "Laravel From Scratch" Youtube series</p> --}}