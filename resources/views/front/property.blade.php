@extends('front.master')

@section('content')


<!-- Property Detail -->
<section id="property" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 listing1 property-details">
          <h2 class="text-uppercase">987 Cantebury Drive</h2>
          <p class="bottom30">45 Regent Street, London, UK</p>
          <div id="property-d-1" class="owl-carousel single">
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
            <div class="item"><img src="{{asset('theme/images/property-details/property-d-1-1.jpg')}}" alt="image"/></div>
          </div>
          <div id="property-d-1-2" class="owl-carousel single">
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-1.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-2.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-3.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-4.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-5.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-1.jpg')}}" alt="image"/></div>
            <div class="item" ><img src="{{asset('theme/images/property-details/property-d-s-1-2.jpg')}}" alt="image"/></div>
          </div>
          <div class="property_meta bg-black bottom40">
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
            <span><i class=" icon-microphone"></i>2 Office Rooms</span>
            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
            <span><i class="icon-old-television"></i>TV Lounge</span>
            <span><i class="icon-garage"></i>1 Garage</span>
          </div>
          <h2 class="text-uppercase">Property Description</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.</p>
          <p class="bottom30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. </p>
          <div class="text-it-p bottom40">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet. consectetuer elit sed diam power nonummy</p>
          </div>
          <h2 class="text-uppercase bottom20">Quick Summary</h2>
          <div class="row property-d-table bottom40">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-responsive">
                <tbody>
                  <tr>
                    <td><b>Property Id</b></td>
                    <td class="text-right">5456</td>
                  </tr>
                  <tr>
                    <td><b>Price</b></td>
                    <td class="text-right">$8,600 / month</td>
                  </tr>
                  <tr>
                    <td><b>Property Size</b></td>
                    <td class="text-right">5,500 ft2</td>
                  </tr>
                  <tr>
                    <td><b>Bedrooms</b></td>
                    <td class="text-right">5</td>
                  </tr>
                  <tr>
                    <td><b>Bathrooms</b></td>
                    <td class="text-right">3</td>
                  </tr>
                  <tr>
                    <td><b>Available From</b></td>
                    <td class="text-right">22-04-2017</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <table class="table table-striped table-responsive">
                <tbody>
                  <tr>
                    <td><b>Status</b></td>
                    <td class="text-right">Rent</td>
                  </tr>
                  <tr>
                    <td><b>Year Built</b></td>
                    <td class="text-right">1991</td>
                  </tr>
                  <tr>
                    <td><b>Garages</b></td>
                    <td class="text-right">1</td>
                  </tr>
                  <tr>
                    <td><b>Cross Streets</b></td>
                    <td class="text-right">Nordoff</td>
                  </tr>
                  <tr>
                    <td><b>Floors</b></td>
                    <td class="text-right">Carpet - Ceramic Tile</td>
                  </tr>
                  <tr>
                    <td><b>Plumbing</b></td>
                    <td class="text-right">Full Copper Plumbing</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <h2 class="text-uppercase bottom20">Features</h2>
          <div class="row bottom40">
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
          </div>
          <h2 class="text-uppercase">Features</h2>
          <p class="bottom20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet,
            vulputate mauris. Ut adipiscing gravida tincidunt.
          </p>
          <div class="row bottom40">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="pro-img">
                <figure class="wpf-demo-gallery">
                  <img src="{{asset('theme/images/property-details/property-d-1-f-1.jpg')}}" alt="image"/>
                  <figcaption class="view-caption">
                    <a data-fancybox-group="gallery" class="fancybox" href="images/property-details/property-d-1-f-1.jpg')}}"><i class="icon-focus"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="pro-img">
                <figure class="wpf-demo-gallery">
                  <img src="{{asset('theme/images/property-details/property-d-1-f-2.jpg')}}" alt="image"/>
                  <figcaption class="view-caption">
                    <a data-fancybox-group="gallery" class="fancybox" href="images/property-details/property-d-1-f-1.jpg')}}"><i class="icon-focus"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="pro-img">
                <figure class="wpf-demo-gallery">
                  <img src="{{asset('theme/images/property-details/property-d-1-f-3.jpg')}}" alt="image"/>
                  <figcaption class="view-caption">
                    <a data-fancybox-group="gallery" class="fancybox" href="images/property-details/property-d-1-f-1.jpg')}}"><i class="icon-focus"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <h2 class="text-uppercase bottom20">Video Tour</h2>
          <div class="row bottom40">
            <div class="col-md-12 padding-b-20">
              <div class="pro-video">
                <figure class="wpf-demo-gallery">
                  <video  class="video" controls>
                    <source src="{{asset('theme/video/video.mp4')}}" type="video/mp4">
                    {{-- <source src="{{asset('theme/video/video.html')}}" type="video/ogg"> --}}
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
          </div>
          <h2 class="text-uppercase bottom20">Contact Agent</h2>
          <div class="row">
            <div class="col-sm-4 bottom40">
              <div class="agent_wrap">
                <div class="image">
                  <img src="{{asset('theme/images/agent-one.jpg')}}" alt="Agents">
                </div>
              </div>
            </div>
            <div class="col-sm-4 bottom40">
              <div class="agent_wrap">
                <h3>Bohdan Kononets</h3>
                <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue nihil imperdiet doming…</p>
                <table class="agent_contact table">
                  <tbody>
                    <tr class="bottom10">
                      <td><strong>Phone:</strong></td>
                      <td class="text-right">(+01) 34 56 7890</td>
                    </tr>
                    <tr class="bottom10">
                      <td><strong>Mobile:</strong></td>
                      <td class="text-right">(+033) 34 56 7890</td>
                    </tr>
                    <tr>
                      <td><strong>Email Adress:</strong></td>
                      <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                    </tr>
                    <tr>
                      <td><strong>Skype:</strong></td>
                      <td class="text-right"><a href="#.">bohdan.kononets</a></td>
                    </tr>
                  </tbody>
                </table>
                <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 bottom40">
              <form class="callus">
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

@endsection
