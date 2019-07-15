@extends('layouts.app')
@section('title')
@endsection
@section('content')
  
  <div class="container-fluid bg-img">
    <aside id="fh5co-hero" class="js-fullheight">
      <div class="flexslider js-fullheight">
          <!-- <div class="overlay-gradient"></div> -->
            <div class="wrapper">
              <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                <div class="slider-text-inner">
                  <img alt="logo" src="storage/images/logo2.png" class="mt-5"><br>
                  <a href="{{ url('home') }}" class="btn btn-primary btn-lg mt-5">始める</a>
                </div>
              </div>
            </div>
        </div>
    </aside>
  </div>
    <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Owl Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- MAIN JS -->
  <script src="js/main.js"></script>

@endsection