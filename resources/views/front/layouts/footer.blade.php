   <!-- Header Begin -->
    <!-- Footer Section Begin -->
<footer class="footer-section set-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                
                <div class="fs-logo">
                    <div class="logo">
                        <a href="./index.html"><img src="{{ asset('front_assets/img/logo.png') }}" alt=""></a>
                    </div>
                    <div class="fs-widget mb-0">
                        <h4 class="mb-2">About Funolymics 2023</h4>
                    </div>
                    
                    <p class="text-white">
                        The City of Yokyo wons the bid to host FunOlympic Games 2023. This platform is the project to broadcast the games and reach all its audience all over the world.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="fs-widget">
                    <h4>Navigation</h4>
                    <ul class="fw-links">
                        <li><a href="{{ url('/login')}}">Administrator</a></li>
                        @Auth
                            <li>
                                   <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                         </li>  
                        @else
                        <li><a href="{{ url('/user/login') }}">Login</a></li>
                        @EndAuth
                        <li><a href="{{ url('/watch_live') }}">Streaming Now</a></li>
                        <li><a href="{{ url('/video') }}">Latest Videos</a></li>
                        <li><a href="{{ url('/schedule') }}">Schedule</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="fs-widget">
                    <div class="fs-logo">
                        <h4>Contact</h4>
                        <ul>
                            <li><i class="fa fa-envelope"></i> support@funolympics.com</li>
                            <li><i class="fa fa-phone"></i> +(12) 345 6789</li>
                            <li><i class="fa fa-map"></i>930 City of Yokyo, Japan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663406.961768823!2d137.27036213600465!3d35.4834597292379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2sTokyo%2C%20Japan!5e0!3m2!1sen!2snp!4v1687371246035!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright-option">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="co-text">
                        <p class="text-center">TM © 2023 – International Olympic Committee – All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="fa fa-close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->
    <!-- Header End -->

    <!-- Js Plugins -->
    <script src="{{ asset('front_assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_assets/js/main.js') }}"></script>
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
 @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('success') }}");
  @endif

  @if ($errors->any())
  @foreach ($errors->all() as $error)
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("Invalid Email address or password");
        @endforeach
        @endif
</script>

</body>

</html>