@extends('layouts.master')

@section('content')

@include('includes.message-block')

<section class="row new-post">
<div class="col-md-6 col-md-offset-3">
<h3> This is going to be your profile </h3>
<br>
<header><h3>Your Post</h3></header>
<form action=" {{route('post.create') }}" method="post">
<div class="form-group">
<textarea class="form-control" name="body" id="new-post" rows="5" cols="20" placeholder="Your Post"></textarea>
</div>
<button type="submit" class="btn btn-primary">Create Post</button>
<input type="hidden" value="{{ Session::token()}}" name="_token">
</form>
</div>
</section>
<hr>

<section class="row new-post">
<div class="col-md-6 col-md-offset-3">
<h3> This is going to be your Notice </h3>
<br>
<header><h3>Your Post</h3></header>
<form action=" {{route('post.notice') }}" method="post">
<div class="form-group">
<textarea class="form-control" name="body" id="new-post" rows="5" cols="20" placeholder="Your Notice"></textarea>
</div>
<button type="submit" class="btn btn-primary">Create Notice</button>
<input type="hidden" value="{{ Session::token()}}" name="_token">
</form>
</div>
</section>

@endsection