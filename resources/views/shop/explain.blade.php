@extends('layouts.app')  <!-- layouts.appを呼び出している -->
@section('style')  <!-- layout.appのスタイルを呼び出している -->
@endsection


  <!-- <link href="{{ asset('css/explain.css') }}" rel="stylesheet"> -->
  <body>
@section('content')
<h1 class="mt-2 moji1 midashi">全体図</h1>
  <div class="bd-example mt-5 img3 mx-auto">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    </ol>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('../images2/explain01.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('../images2/explain02.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('../images2/explain03.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img src="{{url('../images2/explain04.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img src="{{url('../images2/explain05.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img src="{{url('../images2/explain06.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img src="{{url('../images2/explain07.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
  </div>
  <p class="mx-auto" style="text-align: center;margin-top: 50px;"><a href="{{ url('home') }}" class="btn btn-primary btn-lg">実際に始めてみる</a></p>
</div>

  </body>
@endsection
