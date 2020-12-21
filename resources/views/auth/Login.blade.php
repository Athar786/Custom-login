@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><h3>{{ __('Login') }}</h3></div>
                @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="card-body">

                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter name" name="email" />
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>

                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
