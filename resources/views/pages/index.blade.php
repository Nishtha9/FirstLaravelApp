@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p> This is my first Laravel Application </p>
        <p> <a href="/login"><button type="button" class="btn btn-primary">Login</button></a> <a href="/register"><button type="button" class="btn btn-success">Register</button></a> </p>
        </div>
@endsection
