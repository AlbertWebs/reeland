@extends('front.master-property')

@section('content')
@foreach ($Property as $Pro)
<!-- Property Detail -->
<section id="property" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 listing1 property-details">
          <h2 class="text-uppercase">{{$Pro->name}}</h2>
          <p class="bottom30">{{$Pro->location}}</p>
          <div id="property-d-1" class="owl-carousel single">
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_three}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_four}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_three}}" alt="image"/></div>
          </div>
          <div id="property-d-1-2" class="owl-carousel single">
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_three}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_four}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/></div>
            <div class="item"><img src="{{url('/')}}/uploads/products/{{$Pro->image_three}}" alt="image"/></div>
          </div>
          <div class="property_meta bg-black bottom40">
            <span><i class="icon-select-an-objecto-tool"></i>{{$Pro->sqft}} sq ft</span>
            <span><i class=" icon-microphone"></i>{{$Pro->bedroom}} Bedrooms</span>
            <span><i class="icon-safety-shower"></i>{{$Pro->bathroom}} Bathroom</span>
            <span><i class="icon-old-television"></i>TV Lounge</span>
            <span><i class="icon-garage"></i>1 Garage</span>
          </div>
          <h2 class="text-uppercase">Property Description</h2>
          <p class="bottom30">{!!html_entity_decode($Pro->content)!!}</p>

          <div class="text-it-p bottom40">
            <p>{!!html_entity_decode($Pro->meta)!!}</p>
          </div>
          <h2 class="text-uppercase bottom20">Quick Summary</h2>
          <div class="row property-d-table bottom40">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-responsive">
                <tbody>
                  <tr>
                    <td><b>Property Id</b></td>
                    <td class="text-right">{{$Pro->sku}}</td>
                  </tr>
                  @if($Pro->type == "sale")
                  <tr>
                    <td><b>Price</b></td>
                    <td class="text-right">kes {{$Pro->price}}</td>
                  </tr>
                  @else
                  <tr>
                    <td><b>Price</b></td>
                    <td class="text-right">kes {{$Pro->price}} / month</td>
                  </tr>
                  @endif

                  <tr>
                    <td><b>Property Size</b></td>
                    <td class="text-right">{{$Pro->sqft}} sqft</td>
                  </tr>
                  <tr>
                    <td><b>Bedrooms</b></td>
                    <td class="text-right">{{$Pro->bedroom}}</td>
                  </tr>
                  <tr>
                    <td><b>Bathrooms</b></td>
                    <td class="text-right">{{$Pro->bathroom}}</td>
                  </tr>
                  <tr>
                    <td><b>Available From</b></td>
                    <td class="text-right">{{$Pro->created_at}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-responsive">
                <tbody>
                  <tr>
                    <td><b>Status</b></td>
                    <td class="text-right">{{$Pro->type}}</td>
                  </tr>
                  <tr>
                    <td><b>Year Built</b></td>
                    <td class="text-right">N/A</td>
                  </tr>
                  <tr>
                    <td><b>Garages</b></td>
                    <td class="text-right">1</td>
                  </tr>
                  <tr>
                    <td><b>Location</b></td>
                    <td class="text-right">{{$Pro->location}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {{-- <h2 class="text-uppercase bottom20">Features</h2> --}}
          {{-- <div class="row bottom40">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="pro-list">
                <li>
                  Air Conditioning
                </li>
                <li>
                  Barbeque
                </li>
                <li>
                  Dryer
                </li>
                <li>
                  Laundry
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="pro-list">
                <li>
                  Microwave
                </li>
                <li>
                  Outdoor Shower
                </li>
                <li>
                  Refrigerator
                </li>
                <li>
                  Swimming Pool
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="pro-list">
                <li>
                  Quiet Neighbourhood
                </li>
                <li>
                  TV Cable & WIFI
                </li>
                <li>
                  Window Coverings
                </li>
              </ul>
            </div>
          </div> --}}
          <h2 class="text-uppercase">Features</h2>
          <p class="bottom20">Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya on 16th May, 2022. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.
          </p>
          <div class="row bottom40">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="pro-img">
                <figure class="wpf-demo-gallery">
                  <img src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="image"/>
                  <figcaption class="view-caption">
                    <a data-fancybox-group="gallery" class="fancybox" href="{{url('/')}}/uploads/products/{{$Pro->image_one}}"><i class="icon-focus"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            @if($Pro->image_two == "0" OR $Pro->image_two == null)

            @else
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pro-img">
                  <figure class="wpf-demo-gallery">
                    <img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/>
                    <figcaption class="view-caption">
                      <a data-fancybox-group="gallery" class="fancybox" href="{{url('/')}}/uploads/products/{{$Pro->image_two}}"><i class="icon-focus"></i></a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            @endif

            @if($Pro->image_three == "0" OR $Pro->image_three == null)

            @else
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pro-img">
                  <figure class="wpf-demo-gallery">
                    <img src="{{url('/')}}/uploads/products/{{$Pro->image_three}}" alt="image"/>
                    <figcaption class="view-caption">
                      <a data-fancybox-group="gallery" class="fancybox" href="{{url('/')}}/uploads/products/{{$Pro->image_three}}"><i class="icon-focus"></i></a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            @endif

            @if($Pro->image_four == "0" OR $Pro->image_four == null)

            @else
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pro-img">
                  <figure class="wpf-demo-gallery">
                    <img src="{{url('/')}}/uploads/products/{{$Pro->image_four}}" alt="image"/>
                    <figcaption class="view-caption">
                      <a data-fancybox-group="gallery" class="fancybox" href="{{url('/')}}/uploads/products/{{$Pro->image_four}}"><i class="icon-focus"></i></a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            @endif

            @if($Pro->image_two == "0" OR $Pro->image_two == null)

            @else
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pro-img">
                  <figure class="wpf-demo-gallery">
                    <img src="{{url('/')}}/uploads/products/{{$Pro->image_two}}" alt="image"/>
                    <figcaption class="view-caption">
                      <a data-fancybox-group="gallery" class="fancybox" href="{{url('/')}}/uploads/products/{{$Pro->image_two}}"><i class="icon-focus"></i></a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            @endif
          </div>


          <hr>
          {{-- <h2 class="text-uppercase bottom20">Virtual Tour</h2>
          <div class="row bottom40">
            <div class="col-md-12 padding-b-20">
              <div class="pro-video">
                <figure class="wpf-demo-gallery">
                  <video  class="video" controls>
                    <source src="{{asset('theme/video/video.mp4')}}" type="video/mp4">
                    <source src="{{asset('theme/video/video.html')}}" type="video/ogg">
                  </video>
                </figure>
              </div>
            </div>
          </div>
          <h2 class="text-uppercase bottom20">Property Map</h2>
          <div class="row bottom40">
            <div class="col-md-12 bottom20">
              <div class="property-list-map">
                <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;"></div>
              </div>
            </div>
            <div class="social-networks">
              <div class="social-icons-2">
                <span class="share-it">Share this Property</span>
                <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
                <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
                <span><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
              </div>
            </div>
          </div> --}}
          <h2 class="text-uppercase bottom20">Contact Agent</h2>
          <div class="row">
            {{-- <div class="col-sm-4 bottom40">
              <div class="agent_wrap">
                <div class="image">
                  <img src="{{url('/')}}/theme/images/pexels-andrew-personal-training-733500.jpg" alt="Agents">
                </div>
              </div>
            </div> --}}
            <div class="col-sm-6 bottom40">
              <div class="agent_wrap">
                <h3>Frank Karmanga </h3>
                <p class="bottom30">
                    {{-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue nihil imperdiet doming… --}}
                </p>
                <table class="agent_contact table">
                  <tbody>
                    <tr class="bottom10">
                      <td><strong>Phone:</strong></td>
                      <td class="text-right">+254 711 880047</td>
                    </tr>
                    <tr class="bottom10">
                      <td><strong>Mobile:</strong></td>
                      <td class="text-right">+254 738 171937</td>
                    </tr>
                    <tr>
                      <td><strong>Email Address:</strong></td>
                      <td class="text-right"><a href="#.">frank@reeland.co.ke</a></td>
                    </tr>
                    <tr>
                      <td><strong>Email Address:</strong></td>
                      <td class="text-right"><a href="#.">info@reeland.co.ke</a></td>
                    </tr>
                  </tbody>
                </table>
                <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>

                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://web.whatsapp.com/send?phone=+254738171937&text=I%20have%20just%20visited%20*https://reeland.co.ke*" class="facebook"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 bottom40">
              <form class="callus">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message"></textarea>
                </div>
                <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
              </form>
            </div>
            <div class="clearfix"></div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Property Detail End -->
  @endforeach

@endsection
