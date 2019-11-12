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
                Create New Todo
            </div>
            <form action="/store-todo" method="post">
                @csrf
                <div class="form-group">
                    <input name="title" type="text" class ="form-control" placeholder="Task title">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Create Todo</button>
                </div>
            </form>
        </div>
        </div>
    </div>      
      </div>

@endsection