@extends('layout.master') @section('pageTitle', 'Mail') @section('content')

<div class="row justify-content-center" style="margin-top:7%;margin-bottom:10%">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="text-center">
            <h2>Send message to subscribers</h2>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <form action="{{route('send')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="fromName">From</label>
                <input type="text" class="form-control" id="fromName" name="fromName" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" class="form-control" id="message" name="message" rows="8" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Send</button>
        </form>
    </div>
</div>
@endsection