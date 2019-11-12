@extends('layouts.app')
@section('title')
    Todo List
@endsection

@section('content')
    <h1 class="text-center">Task list</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('success'))
        <div class="alert alert-success">
        {{session('success')}}
        </div>
        @endif

        @if(session('delete'))
        <div class="alert alert-danger">
        {{session('delete')}}
        </div>
        @endif
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class ="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li>{{$todo->title}}</li>
                            <a href="/todos/{{ $todo->id}}/delete" class = "btn btn-danger my-2">Delete</a>
                            <a href="/todos/{{ $todo->id}}" class = "btn btn-info my-2">View</a>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection