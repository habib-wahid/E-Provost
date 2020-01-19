
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{route('account')}}">Home</a>
<a class="navbar-brand" href="{{route('notice')}}">Notice Board</a>
<a class="navbar-brand" href="{{'information'}}">Information</a>
<a class="navbar-brand" href="{{route('dashboard')}}">Profile</a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logout')}}">Logout</a></li>
        
      </ul>

</nav>