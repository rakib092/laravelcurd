@extends('layouts.app')
@section('title','create')
@section('content')
  <h1>Create Comment</h1>
  <hr>
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form action="{{ url('/comments')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="comment_body">Comment_body</label>
      <input type="text" class="form-control" name="comment_body" value="{{ old('comment_body') }}" id="comment_body" placeholder="Enter Comment">
    </div>

    <div class="form-group">
        <label for="task_id">Task</label>
         <select name="task_id" id="task_id" class="form-control">
             <option value="">--selsected task--</option>
             @foreach ($task_list as $task)
                <option value="{{ $task->id }}" {{ old('task_id')==$task->id ? 'selected' : ' '}}>{{ $task->name }}</option>
             @endforeach
         </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
@endsection
