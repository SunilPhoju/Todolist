@extends('layouts.app')

@section('title')
    Create New Todo
@endsection

@section('content')
    <h1 class="text-center my-5">Create New Todo</h1>
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Update Todo
                </div>
                <div class ="card-body">
                    <form action="/todos/{{$todo->id}}/update-todo" method="post">
                        @csrf
                        <div class="form-group">
                        <input name="title" type="text" value = {{ $todo->title}} class ="form-control" placeholder="Task title">
                        </div>
                        <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Description" cols="30" rows="10">{{$todo->description}}</textarea>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>      
      </div>

@endsection