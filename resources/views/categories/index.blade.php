@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <a class="btn btn-success" href="{{url('categories/create')}}">Add Categories</a>
     <hr>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
        @foreach($category_list as $category)
            <tr>
                <th>{{ $category->category_name }}</th>
                 <th>
                   <div class="style-btn">

                    <div class="edit-btn"> <a class="btn btn-warning" href="{{url("categories/edit/$category->id")}}">Edit</a></div>

                    <div class="delete-btn">
                        <form action="{{url("categories/$category->id")}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                        </form>
                    </div>

                </div>
                 </th>
            </tr>
        @endforeach
    </table>
@endsection
