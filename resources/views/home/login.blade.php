@extends('app')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Login</h1>
        </div>
        <div class="panel-body">
            <form method="POST" action="/login">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="panel-footer signup">
            Need an account? Click <a href="{{ url('/') }}">here</a> to signup.
        </div>
    </div>
@stop