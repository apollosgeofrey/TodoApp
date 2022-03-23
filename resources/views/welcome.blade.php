@extends('layouts.master')
@section('content')
<hr>
<div class="text-center alert alert-success">
    <h3 class="">Our toDos Laravel Devs</h3>
</div>
<hr>
<div class="row">
    <div class="navbar col-md-12">
        <nav class="nav">
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="{{asset('/todos')}}">Click to proceed to All Todos Dashboard</a><br>
                <!-- <a class="nav-link" href="{{asset('/todos')}}">Create a new Todo</a><br> -->
                <!-- <a class="nav-link" href="{{asset('/todos')}}">Delete a Todo</a><br>
                <a class="nav-link" href="{{asset('/todos')}}">Update an Existing Todo</a><br> -->
            </li>
        </nav>
    </div>
</div>
@endsection