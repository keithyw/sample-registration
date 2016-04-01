@extends('app')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Welcome {{ $user->name }}</h1>
        </div>
        <div class="panel-body logout">
            Thanks for your stay. Click <a href="{{ url('/logout') }}">here</a> to logout.
        </div>
    </div>
@stop