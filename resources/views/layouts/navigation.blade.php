<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">LaravelCurd</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('dashboard')}}">DashBoard</a></li>
        <li><a href="{{url('categories')}}">Category</a></li>
        <li><a href="#">Tag</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" >
         <form action="{{route('logout')}}" method="post">
           @csrf
             <button type="submit" class="logout"><span class="glyphicon glyphicon-log-out"></span>Logout</button>
         </form>
      </ul>

    </div>
  </nav>