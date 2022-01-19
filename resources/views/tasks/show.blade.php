@extends('layouts.app')
@section('title','Show')
@section('content')

 <h1>Show Task ::</h1>
 <hr>
 <table class="table table-bordered table-striped">
    <tr>
        <th>Task Name</th>
        <th>Category</th>
        <th>Task Details</th>
        <th>Task status</th>
        <th>Task Deadline</th>
    </tr>

    <tr>
        <th>{{ $task->name }}</th>
        <th>{{ $task->category->category_name }}</th>
        <th>{{ $task->details }}</th>
        <th>{{ App\Enums\TaskStatus::getDescription($task->status)}}</th>
        <th>{{ $task->deadline }}</th>
    </tr>
 </table>
  <hr>
  <a class="btn btn-success" href="{{url('comments/create')}}">Add New Comment</a>
  <h1>Comment List ::</h1>
   <ul>
       @foreach ($comment_list as $comment)
          <li>{{ $comment->comment_body }}</li>
       @endforeach
   </ul>

@endsection
