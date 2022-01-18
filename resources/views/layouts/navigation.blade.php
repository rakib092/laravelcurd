<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">LaravelCurd</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('dashboard*') ? 'active' : '' }}"><a class="" href="{{url('dashboard')}}">DashBoard</a></li>
        <li class="{{ Request::is('categories*') ? 'active' : '' }}"><a href="{{url('categories')}}">Category</a></li>
        <li class="{{ Request::is('tasks*') ? 'active' : '' }}"><a href="{{url('/tasks')}}">Task</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" >
         <form action="{{route('logout')}}" method="post">
           @csrf
             <button type="submit" class="logout"><span class="glyphicon glyphicon-log-out"></span>Logout</button>
         </form>
      </ul>

    </div>
  </nav>
