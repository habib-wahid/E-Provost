@extends('layouts.master')

@section('content')

<div class="info">
<h3> Here are the information of the executive </h3>


 <div class="row">
  <div class="col-sm-6">
   <div class="card mb-3">
     <img src="samir_sir.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title" style="font-family: "Times New Roman", Times, serif">Asif Mohammad Samir</h5>
        <p class="card-text"style="text:italic">Dept:Software Engineering</p>
         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
     </div>
  </div>
    <div class="col-sm-6">
     <div class="card mb-3">
      <img src="rafi.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
 </div>

<!-- Footer -->

<div class="row" style="background:#e0e2e4;">
<div class="col-sm-12">
  <strong>
  <p style="text-align:center;">Posted by: Hege Refsnes</p>
  <p style="text-align:center;" >Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
  </strong>

</div>
</div>
</div>
@endsection