@extends('layout.master') @section('pageTitle', 'Home') @section('content')
<div class="row text-center coverImg">
    <div class="col-md-12 headingHome" style="margin-top: 15%">
        <h1>Brainster.xyz Labs</h1>
        <p>Student's projects from Brainster Academies</p>
    </div>
</div>

<div class="row">
    <div class="container cardContainer" style="color:white; margin-bottom:5%">
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="deck">
                    <div class="card">
                        <div class="front face text-center">
                            <img src="{{$blog->photo}}" style="width:180px; height:100px; border:1px solid yellow; border-radius:5%; margin-top:5%">
                            <h4 style="font-weight:800">{{$blog->name}}</h4>
                            <p>{{$blog->subHeading}}</p>
                            <br>
                            <p>{{$blog->description}}</p>
                            @if(empty($loggedin))
                            <div class="fixed-bottom linkProject" style="margin-bottom:3%">
                                <a href="{{$blog->link}}" target="_blank"><button type="button" class="btn btn-secondary"><i class='fas fa-external-link-alt' style='font-size:25px;color:white'></i>View Project</button></a>
                            </div>
                            @else
                            <div class="editDelete">
                                <div class="fixed-bottom manageBtns justify-content-center" style=" background-color:; padding-bottom:2%;">
                                    <div style="margin-right:4%">
                                        <a href="{{route('edit', $blog->id)}}"><button type="button" class="btn btn-secondary btn-circle m-1"><i class='fas fa-edit' style='font-size:25px;color:white'></i></button></a>
                                    </div>
                                    <div>
                                        <button data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-danger btn-circle m-1 delete"><i class='fas fa-trash-alt' style='font-size:25px;color:white'></i></button>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="color:black">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModal">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Are you sure you want to delete this post?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="{{route('delete', $blog->id)}}"><button type="button" class="btn btn-danger">Ok</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection