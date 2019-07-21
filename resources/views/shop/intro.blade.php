
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>はじめようネットショッピング</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

    <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- jQuery Easing -->
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Waypoints -->
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <!-- Owl Carousel -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <!-- Flexslider -->
  <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

  <!-- MAIN JS -->
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- Modernizr JS -->
  <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
  <!-- FOR IE9 below -->
  <!-- [if lt IE 9]> -->
  <script src="{{ asset('js/respond.min.js') }}"></script>
  
  <!-- <![endif] -->
  <script src="{{ asset('js/intro.js') }}"></script>


  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap2.css') }}">
  <!-- Flexslider  -->
  <!-- <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}"> -->
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <!-- Theme style  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/inrto.css') }}">


  </head>
  <body>
  <div id="fh5co-page">
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="header-inner">
        <a class="navbar-brand" href="{{ url('home') }}">
          <!-- {{ config('app.name', 'Laravel') }} -->
          <img alt="logo" src="{{url('../images/logo4.png')}}" class="mr-5">
        </a>
        <nav role="navigation">
          <ul>
            <li><a href="#hoge" id="scroll_button">概要</a></li>
            <li><a href="#huga">サービス</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  
  <div class="container">
    
  </div>
  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <div class="slides">
        <li style="background-image: url(images2/slide_2.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>はじめての</h2>
                <h2>ネットショッピング</h2>
                <p><a href="{{ url('home') }}" class="btn btn-primary btn-lg">はじめる</a></p>
              </div>
            </div>
          </div>
        </li>
<!--         <li style="background-image: url(images2/slide_2.jpg);">
=======
        <li style="background-image: url(images2/slide_2.jpg);">
>>>>>>> Stashed changes
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Take Your Business To The Next Level</h2>
                <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images2/slide_3.jpg);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>We Think Different That Others Can't</h2>
                <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
              </div>
            </div>
          </div>
        </li> -->
        </div>
      </div>
  </aside>
  <div id="fh5co-services-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
          <h1 id="hoge">はじめてのネットショッピングとは？</h1>
          <h3> ネットの利用が初めての方でもネットショッピングの使い方を</h3>
          <h3>説明と演習を通してわかりやすく学べるサイトです。</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-laptop"></i>
            <div class="desc">
              <h3>Dashboard</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-server"></i>
            <div class="desc">
              <h3>Administration</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-money"></i>
            <div class="desc">
              <h3>Make Money</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-tablet"></i>
            <div class="desc">
              <h3>SEO Monitoring</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-line-chart"></i>
            <div class="desc">
              <h3>Online Marketing</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 animate-box">
          <!-- <div class="services">
            <i class="icon-pie-chart"></i>
            <div class="desc">
              <h3>Business Analytics</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fh5co-work-section" class="fh5co-light-grey-section">
    <div id="huga" class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" id="target">
          <h1>サービス紹介</h1>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 animate-box">
          <div class="item-grid text-center">
            <div class="image" style="background-image: url(images2/image01.jpg)"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h2 class="title">見やすい構成</h2>
                <h5 class="category"></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 animate-box">
          <div class="item-grid text-center">
            <div class="image" style="background-image: url(images2/image02.jpg)"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h2 class="title">動作ごとの説明つき</h2>
                <h5 class="category"></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 animate-box">
          <div class="item-grid text-center">
            <div class="image" style="background-image: url(images2/image03.jpg)"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h2 class="title">商品の検索も可能</h2>
                <h5 class="category"></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 animate-box">
          <div class="item-grid text-center">
            <div class="image" style="background-image: url(images2/image04.jpg)"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h2 class="title">メールも届く本番仕様</h2>
                <h5 class="category"></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fh5co-testimony-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
          <h1>ネットショッピングを始めよう！</h1>
          <p>インターネットを使うことに抵抗がありませんか？ネットショッピングが使えるようになれば欲しい時に欲しい物を買うことができてとっても便利。</p>
          <p>まずは新規登録から！</p>
                  <div class="col-md-12 text-center animate-box">
          <p><a href="{{ url('home') }}" class="btn btn-primary with-arrow">新規登録 <i class="icon-arrow-right"></i></a></p>
        </div>
        </div>
      </div>
<div class="row">
        <div class="col-md-12 col-offset-0 to-animate">
          <div class="wrap-testimony animate-box">


          </div>
        </div>
      </div>
    </div>
  </div>
   <footer>
        <div class="footerv2-w3ls" style="background-color: #eeeeee">
            <div class="container-fluid footer-copy_w3ls mt-5 agile_btxt">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                    </div>
                    <div class="cpy-right align-self-center">
                        <p>はじめてのネットショッピング | Created by team34 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-- <footer id="fh5co-footer"> -->
    <!-- <div class="container"> -->
<!--       <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
      </div>
      <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">

      </div>

      <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0"> -->
        <!-- <h3>Follow Us</h3>
        <ul class="fh5co-social">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-google-plus"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
        </ul>
      </div> -->
      
      
     <!--  <div class="cpy-right align-self-center" style="text-align: center;">
                        <p>はじめてのネットショッピング | Created by team34 </p>
                    </div> -->
      
    <!-- </div> -->
  </footer>
  </div>
  </body>
</html>

