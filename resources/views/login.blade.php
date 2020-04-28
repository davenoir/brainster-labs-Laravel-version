@extends('layout.master') @section('pageTitle', 'Login') @section('content')

<div class="row justify-content-center" style="margin-top:12%">
    <div class="col-md-6">
        @if ($errors->any()) @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach @endif @if(session()->has('messageError'))
        <div class="alert alert-danger">
            {{ session()->get('messageError') }}
        </div>
        @endif
        <form method="POST" action="{{route('loginAdmin')}}">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-warning btn-lg btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection