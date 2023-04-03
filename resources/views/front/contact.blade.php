@extends('front.master')

@section('content')

<!--Contact-->
<section id="contact-us">
    <div class="contact">
      <div id="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.850612513805!2d36.7892717!3d-1.2619494999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17ecc05b31b3%3A0x130718aa910139fd!2sReeland%20Realty%20Limited!5e0!3m2!1sen!2ske!4v1678261020459!5m2!1sen!2ske" width="100%" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="container">
        <div class="row">

             <div class="col-md-4 hidden-xs">
             </div>

             <div class="col-md-4 hidden-xs">
             </div>

             <div class="col-md-4 col-sm-4 col-xs-12  contact-text">

                  <div class="agent-p-contact">
                      <div class="our-agent-box bottom30">
                          <h2>get in touch</h2>
                      </div>
                      <div class="agetn-contact-2 bottom30">
                           <p><i class="icon-telephone114"></i> +254 738 171937</p>
                           <p><i class="icon-telephone114"></i> +254 711 880047</p>
                           <p><i class=" icon-icons142"></i> info@reeland.co.ke</p>

                           <p><i class="icon-browser2"></i>www.reeland.co.ke</p>
                           <p><i class="icon-icons74"></i> Le'Mac Building, Waiyaki Way,  Church Rd, Nairobi</p>
                        </div>
                      <ul class="social_share bottom20">
              <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
              <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
              <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
              <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
            </ul>
                  </div>

                  <div class="agent-p-form">
                      <div class="our-agent-box bottom30">
                          <h2>Send us a message</h2>
                      </div>

                      <div class="row">
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif

                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                      <form class="callus" method="POST" action="{{url('/')}}/send-message">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                          <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                      </form>

                      </div>

                  </div>

              </div>

          </div>
      </div>
    </div>
  </section>
  <!-- Contact End -->

@endsection
