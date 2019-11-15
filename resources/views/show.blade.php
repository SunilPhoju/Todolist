@extends('layouts.app')
@section('title')
    {{$todo->title}}

@endsection

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                 {{$todo->title}}
            </div>
            <div class="card-body">
                 {{$todo->description}}
                 <a href="/todos/{{ $todo->id}}/delete" class = "btn btn-danger my-2">Delete</a>
                 <a href="/todos/{{ $todo->id}}/edit" class = "btn btn-danger my-2">Update</a>
            </div>
        </div>
    </div>
</div>
@endsection