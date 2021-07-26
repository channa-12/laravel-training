@extends('layouts.app')

{{-- wrape in section content which is extends from layouts.app --}}
@section('content')
  <main class="container">
    @if(!Auth::guest())
      <h1 style='text-align:center;'>Welcome to laravel.</h1>
    @else 
      <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
        <p><a class="btn btn-dark btn-lg" href="/login" role="button">Login</a> <a class="btn btn-light btn-lg" href="/register" role="button">Register</a></p>
      </div>
    @endif
  </main>
@endsection


{{-- <div class="jumbotron text-center">
  <h1>{{$title}}</h1>
  <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
  <p><a class="btn btn-dark btn-lg" href="/login" role="button">Login</a> <a class="btn btn-light btn-lg" href="/register" role="button">Register</a></p>
</div> --}}
