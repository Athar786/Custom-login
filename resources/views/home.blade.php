@extends('layouts.app')

@section('content')
<h1>Welcome Admin </h1>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

You are logged in!
@endsection
