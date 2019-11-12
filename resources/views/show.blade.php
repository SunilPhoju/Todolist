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
            </div>
        </div>
    </div>
</div>
@endsection