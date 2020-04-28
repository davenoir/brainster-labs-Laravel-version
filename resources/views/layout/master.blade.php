@include('layout.header')


<div class="container-fluid">
    @yield('content')

    <!--Include logout modal on all blade files!-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModal">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to logout?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a class="nav-link" href="{{route('logout')}}"><button type="button" class="btn btn-danger">Yes</button></a>
                </div>
            </div>
        </div>
    </div>
    <!--Include subscribe modal on all blade files!-->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="color:black">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModal">Subscribe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('subscribe')}}">
                        @csrf
                        <div>
                            <h3 class="text-center">Subscribe Your Email</h3>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Your Email">
                            <br/>
                            <div class="text-center">
                                <button class="btn btn-warning btn-block" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@include('layout.footer')