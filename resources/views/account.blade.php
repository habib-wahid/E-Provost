
@extends('layouts.master')

@section('content')

@include('includes.message-block')

<section class="row posts">
<div class="col-md-6 col-md-offset-3">
<header><h3>what other people say about you...</h3></header>
<h1> hello everyone </h1>
@foreach($posts as $post)
<article class="post" style="padding-left:10px;border: 3px solid #a21b24;margin-bottom:30 px;" >
<p > {{ $post->body }} </p>
<div class="info">
Posted by {{$post->user->first_name}} on {{$post->created_at}}
</div>
<div class="interaction">
<a href="#">Like</a>
<a href="#">Dislike</a>
@if(Auth::user() == $post->user)
<a href="#" class = "edit">Edit</a>
<a href="{{route('post.delet', ['post_id' => $post->id])}}">Delet</a>
@endif
</div>
</article>
<br>
@endforeach
</div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id = "edit-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
       <form>
       <div class="form-group">
       <lavel class="post-body">
       Edit the Post
       </lavel>
       <textarea class="form-control" name="post-body" id="post-body"  rows="5"></textarea>
       </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

