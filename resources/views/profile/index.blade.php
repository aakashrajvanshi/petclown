@extends('app')
@section('title')
    <title>Profile Homepage</title>
    <meta name="description" content="Profile of a funny guy or gal">
@stop

@section('content')
    Welcome <b>{{ $user['name'] }}!</b>
    Email: {{ $user['email'] }}
    <br><br>
    <img src="{{ $user['avatar'] }}">


@stop
