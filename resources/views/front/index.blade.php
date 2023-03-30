@extends('front.master')

@section('content')

<!--Slider-->
<div class="rev_slider_wrapper">
    <div id="rev_slider_full" class="rev_slider"  data-version="5.0">
      <ul>
        <!-- SLIDE  -->
        <li data-transition="fade">
          <img src="{{asset('uploads/slider/Investing-in-land-The-pros-and-cons-FB-1200x700-compressed.jpg')}}"  alt="" data-bgposition="center top" data-bgfit="cover">
          <h1 class="tp-caption tp-resizeme uppercase text-center"
            data-x="center" data-hoffset="15"
            data-y="275" data-width="full"
            data-transform_idle="o:1;"
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
            data-start="500"
            data-splitin="none"
            data-splitout="none"
            style="z-index: 6; font-weight:900 !important; text-shadow: 1px 1px 0px #000000;">We Keep it Real on Matters Lands
          </h1>

          <div class="tp-caption  tp-resizeme text-center"
            data-x="center" data-hoffset="15"
            data-y="400"
            data-width="full"
            data-transform_idle="o:1;"
            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
            data-start="800">
            <a href="#deals" class="btn-blue border_radius uppercase active">Learn More</a>
            <a href="tel:+254 711 880047" class="btn-white border_radius uppercase">Contact Us</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- END REVOLUTION SLIDER -->
  </div>

  <!--Best Deal Properties-->
<section id="deals" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h2 class="uppercase">About Us</h2>
          <p class="heading_space">Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="full-slider" class="owl-carousel">
            <div class="item">
              <div class="media deal_media proerty_content">
                <div class="media-left">
                  <a href="{{url('/')}}/our-services">
                  <img class="media-object" style="border-radius:10px;" src="{{asset('theme/images/best-deal1.jpg')}}" alt="...">
                  </a>
                </div>
                <div class="media-body">

                  <div class="proerty_text">
                    <h3 class="bottom15"> <a href="{{url('/')}}/our-services" style="color:#b3864d">Valuation Services</a></h3>
                    <p>The company provides expertise valuation of fixed and movable assets i.e. land, buildings, plant & machinery, petrol stations, oil depots, equipment, motor vehicles, chattels and stock amongst others for purposes of advisory....</p>
                  </div>

                  <div class="proerty_text">
                    <h3 class="bottom15"> <a href="{{url('/')}}/our-services" style="color:#b3864d">Agency (Letting and Sales) Services</a></h3>
                    <p>
                        This involves letting and selling of commercial, residential, office, industrial and agricultural properties at optimum value to meet our clients’ satisfaction. The process involves assessment of the current market value/ rent of the property before the property is placed in the market.
                    </p>
                  </div>

                  <div class="proerty_text">
                    <h3 class="bottom15"> <a href="{{url('/')}}/our-services" style="color:#b3864d">Management Services</a></h3>
                    <p>The company provides both property and facility management services to our esteemed clients.</p>
                  </div>




                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Best Deal Properties Ends-->


  <!--Deals-->
  <section id="deal" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="uppercase">Best Deal Properties</h2>
          <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($Featured as $featured)
        <div class="col-sm-6">
            <a href="{{url('/')}}/properties/explore/{{$featured->slung}}">
                <div class="listing_full">
                    <div class="image">
                        <img alt="image" style="min-height:365px;" src="{{url('/')}}/uploads/products/{{$featured->image_one}}">
                        <span class="tag_t">{{$featured->type}}</span>
                    </div>
                    <div class="listing_full_bg">
                        <div class="listing_inner_full">
                        <span><a href="#."><i class="icon-like"></i></a></span>
                        <a style="min-height: 85px;" href="{{url('/')}}/properties/explore/{{$featured->slung}}">
                            <h3>{{$featured->name}}</h3>
                            <p>{{$featured->location}}</p>
                        </a>
                        <div class="favroute clearfix">
                            <div class="property_meta">
                                <span><i class="icon-select-an-objecto-tool"></i>{{$featured->sqft}} sq ft</span>
                                <span><i class=" icon-bed"></i>{{$featured->bedroom}} Bedrooms</span>
                                <span><i class="icon-safety-shower"></i>{{$featured->bathroom}} Bathroom</span>
                                @if($featured->type == "sale")

                                <span class="border-l">Kes {{$featured->price}}</span>
                                @else

                                <span class="border-l">Kes {{$featured->price}}</span>
                                @endif

                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </a>
        @endforeach


      </div>
    </div>
  </section>
  <!--Deals ends-->



  <!-- Latest Property -->
  {{-- <section id="property" class="padding index2 bg_light">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10">
          <h2 class="uppercase">Featured properties</h2>
          <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g.
            across Kenya for affordable prices.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="three-item owl-carousel">
            @foreach ($Best as $best)
            <div class="item">
                <div class="property_item">
                  <div class="property_head text-center">
                    <h3 class="captlize" style="min-height:53px" ><a href="{{url('/')}}/properties/explore/{{$featured->slung}}">{{$best->name}}</a></h3>
                    <p>{{$best->location}}</p>
                  </div>
                  <div class="image">
                    <a href="{{url('/')}}/properties/explore/{{$best->slung}}"><img style="min-height:200px" src="{{url('/')}}/uploads/products/{{$best->image_one}}" alt="latest property" class="img-responsive"></a>
                    <div class="price lighter clearfix">
                      <span class="tag pull-right">For {{$best->type}}</span>
                    </div>
                  </div>
                  <div class="proerty_content">
                    <div class="property_meta">
                      <span><i class="icon-select-an-objecto-tool"></i>{{$best->sqft}} sq ft</span>
                      <span><i class="icon-bed"></i>{{$best->bedroom}} Bedrooms</span>
                      <span><i class="icon-safety-shower"></i>{{$best->bathroom}} Bathroom(s)</span>
                    </div>
                    <div class="proerty_text">
                      <p>{{$best->meta}}</p>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left">kes {{$best->price}}</p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="one">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
      </div>
    </div>
  </section> --}}
  <!-- Latest Property Ends -->



  <!--Parallax-->
  {{-- <section id="parallax_four" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 bottom30">
          <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
          <div class="bottom15"></div>
          <div class="row number-counters text-center">
        <div class="col-sm-4 col-xs-4 counters-item margin40">
          <i class="icon-icons215"></i>
          <strong data-to="82">0</strong>
          <p>Properties Sale</p>
        </div>
        <div class="col-sm-4 col-xs-4 counters-item margin40">
          <i class="icon-icons230"></i>
          <strong data-to="3">0</strong>
          <p>Total Agents</p>
        </div>
        <div class="col-sm-4 col-xs-4 counters-item margin40">
          <i class="icon-smiling-face"></i>
          <strong data-to="100">0</strong> %
          <p>Satisfied customers</p>
        </div>
      </div>

        </div>
      </div>
    </div>
  </section> --}}
  <!--About Owner ends-->


  <!--Testinomials-->
  {{-- <section id="agent" class="padding">

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="uppercase">agents you can trust</h2>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 text-center">
          <div class="agent_wrap margin40">
            <div class="image">
              <img src="{{asset('theme/images/pexels-andrew-personal-training-733500.jpg')}}" alt="Agents">
              <div class="overlay">
              <div class="centered text-center">
              <ul class="social_share">
              <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
              <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
              <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
              <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
            </ul>
              </div>
              </div>
            </div>
            <div class="agent_text">
              <h3>Alex  Kipchoge</h3>
              <p>sales executive</p>
              <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
              <a class="btn-more" href="javascript:void(0)">
              <i><img alt="arrow" src="{{asset('theme/images/arrowlY.png')}}" ></i><span>Contact Me</span><i><img alt="arrow" src="{{asset('theme/images/arrowrY.png')}}" ></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> --}}
  <!--Testinomials ends-->


  <!--News-->
  {{-- <section id="news" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <h2 class="uppercase">Latest News</h2>
          <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
        </div>
      </div>
      <div class="row">
      <div id="news_slider" class="owl-carousel">
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--News ends-->


  <!--Partners-->
  <section id="logos" class="bg_light">
    <div class="container partner2 padding">
      <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="uppercase">Our Partners</h2>
          <p class="heading_space">TRUSTED BY</p>
        </div>
      </div>
      <div class="row">
      <div id="partners" class="owl-carousel">
          <div class="item">
            <img src="{{asset('theme/images/logo1.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo2.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo3.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo4.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo5.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo1.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo2.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo3.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo4.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo5.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo1.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo2.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo3.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo4.png')}}" alt="Featured Partner">
          </div>
          <div class="item">
            <img src="{{asset('theme/images/logo5.png')}}" alt="Featured Partner">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Partners Ends-->

@endsection
