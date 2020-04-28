<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link type="text/css"rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>@yield('pageTitle')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color:#FBD12F">
            <div class="col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand text-center" style="padding:0%" href="{{route('home')}}">
                        <img src="{{asset('image/logo.png')}}" width="30" height="30" alt="">
                        <p style="font-size:small; font-weight:bolder; margin-bottom:0">BRAINSTER</p>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav justify-content-center" style="width:100%;">
                            <li class="nav-item">
                                <a class="nav-link" href="http://codepreneurs.co/" target="_blank">Programming Academy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.brainster.io/marketpreneurs?utm_source=brainster.co&utm_medium=academies&utm_campaign=website&utm_content=mkt" target="_blank">Marketing Academy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.brainster.io/design?utm_source=brainster.co&utm_medium=academies&utm_campaign=website&utm_content=design" target="_blank">Design Academy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://blog.brainster.co/" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <button data-toggle="modal" data-target="#subscribeModal" type="button" class="btn btn-danger"><i class='fas fa-fingerprint' style='font-size:15px;color:white'></i> Subscribe</button>
                            </li>
                            @if (empty($loggedin))
                            <li class="nav-item" style="font-weight:900; margin-top:-0.5%">
                                <a class="nav-link" href="{{route('login')}}"><button type="button" class="btn btn-success"><i class='fas fa-user-lock' style='font-size:15px;color:white'></i> Login</button></a>
                            </li>
                            @else
                            <div class="dropdown show" style="padding-left:1%">
                                <a class="btn btn-success dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='fas fa-cog' style='font-size:15px;color:white'></i> Manage
                                </a>
                                <div class="dropdown-menu" style="background-color: rgba(253, 251, 251, 0.8);" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('home')}}">Home</a>
                                    <a class="dropdown-item" href="{{route('add')}}">Add project</a>
                                    <a class="dropdown-item" href="{{route('mail')}}">Send message</a>
                                    <hr>
                                    <button data-toggle="modal" data-target="#logoutModal" type="button" class="btn btn-danger btn-block"><i class='fas fa-sign-out-alt' style='font-size:15px;color:white'></i> Logout</button></a>
                                </div>
                            </div>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>