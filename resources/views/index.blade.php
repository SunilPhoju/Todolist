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

            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class ="card-body">
                    <ul class="list-group">
                        <li>Task 1</li>
                        <li>Task 2</li>
                        <li>Task 3</li>
                        <li>Task 4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection