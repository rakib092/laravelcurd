@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-md-6  col-md-offset-3">
       <h1>Edit Cetegory ::</h1>
       <hr>
       @if($errors->any())
       <div class="alert alert-danger">
        <ul>
           @foreach($errors->all() as $error)
             <li>{{$error}}</li>  
           @endforeach
        </ul>
       </div>

       @endif

       <div class="panel panel-default">
           <div class="panel-heading">Edit Cetegory</div>
           <form action="{{url("categories/update/$category->id")}}" method="post">
               @csrf
              <div class="panel-body">
                   <div class="form-group">
                     <label for="name">Category Name</label>
                     <input type="text" class="form-control" name="name" value="{{ $category->category_name }}" id="name" placeholder="Category Name">
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary">Update</button>
                    </div> 
                </div>
           </form>
       </div>
    </div>
</div>
@endsection