@extends('layouts.master')
@section('content')
    <div class="row mt-2">
        <div class="col-lg-6 offset-3">
            <form action="{{asset('/create/todo')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Create a new Todo below</label>
                    <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
                </div>
                <input type="submit" value="Get work done" class="btn btn-warning">
            </form>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List of all avilable Todos</h1>
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item">{{$todo->todo}} 
                        <form action="{{route('todo.delete', ['id'=>$todo->id])}}" method="POST" class="float-right">
                            {{ csrf_field() }}
                            @method("DELETE")
                            <input type="submit" value="X" class="btn btn-danger pull-right">
                        </form>
                        <a href="/todo/{{$todo->id}}/edit" class="btn btn-info float-right mr-2">✎</a>
                        @if (!$todo->completed)
                            <a href="{{route('todo.complete', ['id'=>$todo->id])}}" class="btn btn-warning float-right mr-2">{!!'&#10004'!!}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection