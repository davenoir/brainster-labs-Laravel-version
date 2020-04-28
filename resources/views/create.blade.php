@extends('layout.master') @section('pageTitle', 'Create') @section('content')
<div class="row justify-content-center" style="margin-top:5%;margin-bottom:6%">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="text-center">
            <h2>Create new blog post</h2>
        </div>
        @if ($errors->any()) @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach @endif @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <form method="POST" action="{{route('store')}}">
            @csrf

            <div class="form-group">
                <label for="name">Name of project</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter project name">
            </div>
            <div class="form-group">
                <label for="subHeading">Subheading</label>
                <input type="text" class="form-control" id="subHeading" name="subHeading" placeholder="Enter project subheading">
            </div>
            <div class="form-group">
                <label for="link">Link to project</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Enter valid link to project">
            </div>
            <div class="form-group">
                <label for="photo">Photo URL</label>
                <input type="text" class="form-control" id="photo" name="photo" placeholder="Enter valid photo URL">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="3" placeholder="Enter project description"></textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-lg btn-block">Add project</button>
        </form>
    </div>
</div>
@endsection