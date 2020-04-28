@extends('layout.master') @section('pageTitle', 'Edit') @section('content')
<div class="row text-center coverImg">
    <div class="col-md-12" style="margin-top: 15%">
        <h1>Brainster.xyz Labs</h1>
        <p>Student's projects from Brainster Academies</p>
    </div>
</div>

<div class="row">
    <div class="container cardContainer" style="color:white">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="deck">
                    <div class="card">
                        <div class="front face text-center" style="box-shadow: inset 0 0 0 1000px rgba(2, 2, 2, 0.6); border: yellow outset 3px">
                            <form method="POST" action="{{route('update', $blog->id)}}" style="font-size:small; margin-top:2%">
                                @csrf

                                <div class="form-group">
                                    <label class="yellow" for="name">Name</label>
                                    <input class="edit" type="text" class="form-control" id="name" name="name" value="{{$blog->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="subHeading" class="yellow">Heading</label>
                                    <input class="edit" type="text" class="form-control" id="subHeading" name="subHeading" value="{{$blog->subHeading}}">
                                </div>
                                <div class="form-group">
                                    <label for="link" class="yellow">Link</label>
                                    <input class="edit" type="text" class="form-control" id="link" name="link" value="{{$blog->link}}">
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="yellow">Photo URL</label>
                                    <input class="edit" type="text" class="form-control" id="photo" name="photo" value="{{$blog->photo}}">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="yellow">Description</label>
                                    <textarea class="edit" type="text" class="form-control" id="description" name="description" rows="4">{{$blog->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary">Update</button>
                                <a href="{{route('cancel')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-12 col-12">
                <div class="deck">
                    <div class="card">
                        <div class="front face text-center">
                            <img src="{{$blog->photo}}" style="width:180px; height:100px; border:1px solid yellow; border-radius:5%; margin-top:5%">
                            <h4 style="font-weight:800">{{$blog->name}}</h4>
                            <p>{{$blog->subHeading}}</p>
                            <br>
                            <p>{{$blog->description}}</p>
                            <div class="editDelete">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection