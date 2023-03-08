<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
{{-- Meta Tags --}}
<title>Reeland Realty Limited - Real Estate in kenya</title>
<link rel="canonical" href="{{url('/')}}">
<meta name="description" content="Reeland Realty Limited">
<meta name="author" content="Designekta Studios">

<meta property="og:site_name" content="Reeland Realty Limited">
<meta property="og:url" content="{{url('/')}}">
<meta property="og:title" content="Reeland Realty Limited - Real Estate in kenya">
<meta property="og:type" content="website">
<meta property="og:description" content="Reeland Realty Limited">

<meta name="twitter:site" content="@reeland">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Reeland Realty Limited - Real Estate in kenya">
<meta name="twitter:description" content="Reeland Realty Limited">
{{-- Meta Tags --}}

<link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/reality-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootsnav.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/owl.transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/cubeportfolio.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/range-Slider.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/search.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}">
@include('favicon')
 <!--Floating WhatsApp css-->
 <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
</head>
<body>
<!--Div where the WhatsApp will be rendered-->
<div style="z-index:1000000000000" id="WAButton"></div>



<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->


<!--Header-->
<header class="white_header">
  <div class="topbar white border">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Registered Valuers, Estate Agents, Property Managers & Consultants</p>
        </div>
        <div class="col-md-6 text-right">
          <ul class="breadcrumb_top text-right">
            <li><a href="{{url('/')}}/contact-us"><i class="icon-telephone114"></i>Contact Us</a></li>
      <li><a href="{{url('/')}}/account/add-property"><i class="icon-icons215"></i>Submit Property</a></li>
      <li><a href="{{url('/')}}/account/my-properties"><i class="icon-icons215"></i>My Property</a></li>
      <li><a href="{{url('/')}}/account/profile"><i class="icon-icons230"></i>Profile</a></li>
      <li><a href="{{url('/')}}/account"><i class="icon-icons179"></i>Login / Register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default bootsnav">
    <div class="container">
      <div class="attr-nav">
        <div class="upper-column info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul>
            <li><strong>Phone Number</strong></li>
            <li>+254 711 880047</li>
          </ul>
        </div>
      </div>
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{url('/')}}"><img style="max-width:200px" src="{{asset('uploads/Small-Web-Logo.jpg')}}" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
              <li class="dropdown active">
                <a href="{{url('/')}}">Home <span class="fa fa-home"></span> </a>
              </li>

              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">For Sale </a>
                <ul class="dropdown-menu">
                    <?php
                       $Category = DB::table('categories')->get();
                    ?>
                    @foreach ($Category as $Cat)
                      <li><a href="{{url('properties/for-sale')}}/{{$Cat->slung}}">{{$Cat->title}} for Sale</a></li>
                    @endforeach
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">For Rent </a>
                <ul class="dropdown-menu">
                    @foreach ($Category as $Cat)
                    <li><a href="{{url('properties/for-rent')}}/{{$Cat->slung}}">{{$Cat->title}} for Sale</a></li>
                  @endforeach
                  </ul>
              </li>

              <li class="dropdown active">
                <a href="{{url('/')}}/our-services">Our Services  </a>
              </li>


              <li><a href="tel:+254 711 880047"><span class="fa fa-phone"></span> Talk to Us</a></li>
              {{-- <li><a class="advanced text-center border_radius" href="#">Add Listing</a></li> --}}
            </ul>
      </div>
    </div>
  </nav>
</header>
<!--Header-->


<!--Advance Search-->
<div class="blue_navi">
  <div class="container">
  <div class="row">
  <div class="property-query-area">

    <form class="callus clearfix">
      <div class="col-md-6 col-sm-6">
        <div class="single-query form-group">
          <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="single-query form-group">
            <input type="text" name="location" class="keyword-input" placeholder="e.g Loresho">
          </div>
      </div>
      <div class="col-md-2 col-sm-12 text-right">
        <button type="button" class="advanced text-center text-uppercase border_radius"><i class="icon-settings"></i>advanced</button>
      </div>
    </form>
    <div class="opened">
      <form class="callus clearfix">
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select>
                <option class="active">Property Type</option>
                <option selected="selected" disabled>Select Type</option>
                <?php
                    $Category = DB::table('categories')->get();
                ?>
                @foreach($Category as $Cat)
                <option value="{{$Cat->id}}">{{$Cat->title}} </option>
                @endforeach

              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select>
                <option class="active">Property Status</option>
                <option>All areas</option>
                <option>Sale </option>
                <option>Rent</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Min Price">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Max Price">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">

        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 text-right form-group">
              <button type="submit" class="border_radius top15 btn-yellow bottom15">Search property</button>
            </div>
          </div>
        </div>
      </form>
      <div class="search-propertie-filters collapse">
        <div class="container-2">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Home Theater</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Air Conditioning</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Balcony</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Gas Heat</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Washer and Dryer</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>TV Cable</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Swimming Pool</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="search-form-group white">
                <input type="checkbox" name="check-box" />
                <span>Rap music</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
<!--Advance Search-->


@yield('content')


<!--Footer-->
@include('front.footer')



<script src="{{asset('theme/js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.appear.js')}}"></script>
<script src="{{asset('theme/js/jquery-countTo.js')}}"></script>
<script src="{{asset('theme/js/bootsnav.js')}}"></script>
<script src="{{asset('theme/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('theme/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('theme/js/range-Slider.min.js')}}"></script>
<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('theme/js/selectbox-0.2.min.js')}}"></script>
<script src="{{asset('theme/js/zelect.js')}}"></script>
<script src="{{asset('theme/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('theme/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('theme/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('theme/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('theme/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('theme/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('theme/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('theme/js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('theme/js/custom.js')}}"></script>
<script src="{{asset('theme/js/functions.js')}}"></script>

 <!--Floating WhatsApp javascript-->
 <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

 <script type="text/javascript">
     $(function () {
         $('#WAButton').floatingWhatsApp({
             phone: '+254738171937', //WhatsApp Business phone number
             headerTitle: 'Chat with us on WhatsApp!', //Popup Title
             popupMessage: 'Welcome to Reeland Realty Limited, How can we serve you today?', //Popup Message
             message: 'I have just visited *https://reeland.co.ke*',
             showPopup: true, //Enables popup display
             buttonImage: '<img src="{{url('/')}}/uploads/icon/whatsapp.svg" />', //Button Image
             //headerColor: 'crimson', //Custom header color
             //backgroundColor: 'crimson', //Custom background button color
             position: "left" //Position: left | right

         });
     });
 </script>

</body>

</html>

