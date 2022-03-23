@extends('layouts.master')
@section('content')
<div class="row">
        @if ($todo)
                <div class="col-lg-12">
                    <form action="/todo/{{$todo->id}}/edit" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Edit Todo</label>
                            <input type="text" class="form-control" name="todo" value="{{$todo->todo}}">
                        </div>
                        <input type="submit" value="Update" class="btn btn-warning">
                    </form>
                </div>
        @endif
</div>
@endsection