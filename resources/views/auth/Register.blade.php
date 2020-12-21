@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <center>
    <form id="form" action="{{route('register')}}" method="post" accept-charset="utf-8">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" name="name" />
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group">
                <label for="name">SurName:</label>
                <input type="text" class="form-control" id="surname" placeholder="Enter name" name="surname" />
                <span class="text-danger">{{ $errors->first('surname') }}</span>
            </div>

            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter name" name="username" />
                <span class="text-danger">{{ $errors->first('username') }}</span>
            </div>

            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter name" name="email" />
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter Mobile NO" name="phone_number" />
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            </div>

            <div class="form-group">
                <label for="name">Company:</label>
                <select name="company" class="form-control"  >
                <option disabled selected value="">--- Select Company ---</option>
                    <option value="Eternal">Eternal</option>
                    <option value="athar">Athar</option>
                    <option value="marfatia">marfatia</option>
                    <option value="ahmed">ahmed</option>
                    <option value="incipient">incipient</option>
                </select>
                <span class="text-danger">{{ $errors->first('company') }}</span>
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>


            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

            </div>
        </div>
    </form>
</center>
    </div>
</div>
</div>
</div>

</div>
@endsection
