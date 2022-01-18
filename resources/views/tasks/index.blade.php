@extends('layouts.app')
@section('title','Index')
@section('content')

    <a class="btn btn-success" href="{{url('/tasks/create')}}">Add New Task</a>
    <hr>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Task Name</th>
            <th>Category</th>
            <th>Task Details</th>
            <th>Task status</th>
            <th>Task Deadline</th>
            <th>Action</th>
        </tr>

       @foreach($tasks as $task)
       <tr>
        <th>{{ $task->name }}</th>
        <th>{{ $task->category->category_name }}</th>
        <th>{{ $task->details }}</th>
        <th>{{ App\Enums\TaskStatus::getDescription($task->status)}}</th>
        <th>{{ $task->deadline }}</th>
        <th>
            <div class="style-btn">
                <div class="edit-btn">
                    <a class="btn btn-warning" href="{{ url("/tasks/$task->id/edit")}}">Edit</a>
                </div>
                <div class="delete-btn">
                    <form action="{{ url("/tasks/$task->id")}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this task?');">Delete</button>
                    </form>
                </div>
            </div>
        </th>
      </tr>
       @endforeach
    </table>
@endsection
