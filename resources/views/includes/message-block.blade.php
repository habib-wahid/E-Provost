
@if(count($errors) > 0)
<div class="row">
<div class="col-md-4 col-md-offset-4">
<ul style="border = 1px solid red;">
@foreach($errors->all() as $error)
<li style="border:1px solid red;background-color:green;"> {{$error}} </li>
@endforeach
</ul>
</div>
</div>
@endif

@if(Session::has('message'))
<div class="row">
<div class="col-md-4 col-md-offset-4">
 <li style="border: 3px solid blue; background-color:red;">{{Session::get('message')}}</li>
</div>
</div>
@endif

