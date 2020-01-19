@extends('layouts.master')

@section('content')

@include('includes.message-block')

<section class="notice">
<div class="col-md-12 col-md-offset-3">
<header><h3>Here are the notices</h3></header>
@foreach($posts as $post)
<article class="post" >
<div class="card text-center">
  <div class="card-header">
    NOTICE
  </div>
  <div class="card-body" style = "background-color: whitesmoke">
    <p class="card-text" style = "background-color:whitesmoke" >{{ $post->body }}</p>
  </div>
  <div class="card-footer text-muted " style = "background-color:white;">
  Posted by {{$post->user->first_name}} on {{$post->created_at}}
  </div>
</div>
</article>
<br>
@endforeach
</div>
</section>
@endsection


