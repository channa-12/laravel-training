@extends('layouts.app')

{{-- wrape in section content which is extends from layouts.app --}}
@section('content')
  <main class="container">
    <div class="jumbotron text-center">
      <h1>{{$title}}</h1>
      <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
      <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
  </main>
@endsection

