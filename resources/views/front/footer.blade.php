<footer class="footer_third">
    <div class="container contacts">
      <div class="row">
        <div class="col-sm-4 text-center">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul class="text-center hide-list-styles">
              <li><strong>Phone Number</strong></li>
              <li>+254 738 171937</li>
              <li>+254 711 880047</li>

            </ul>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul class="text-center hide-list-styles">
              <li><strong>Kampus Towers -2nd Floor
                University Way
                Nairobi City Centre </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul class="text-center hide-list-styles">
              <li><strong>Email Address</strong></li>
              <li><a href="mailto:info@reeland.co.ke">info@reeland.co.ke</a></li>
              {{-- <li><a href="mailto:hello@reeland.co.ke">hello@reeland.co.ke</a></li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container padding_top">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="footer_panel bottom30">
            <a href="#." class="logo bottom30"><img style="max-width:300px" src="{{asset('uploads/Small-Web-Logo.jpg')}}" alt="logo"></a>
            <p class="bottom15">
              Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.
            </p>
            {{-- <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p> --}}
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="footer_panel bottom30">
            <h4 class="bottom30 heading">Quick Links</h4>
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td>
                    <ul class="links">
                        <?php
                            $Services = DB::table('services')->get()
                        ?>
                        @foreach ($Services as $Ser)
                        <li><a href="{{url('/')}}/our-services/{{$Ser->slung}}"> <i></i>{{$Ser->title}}</a></li>
                        @endforeach
                    </ul>
                  </td>
                  <td class="text-right">
                    <ul class="links text-left hide-list-styles">
                      <li><a href="{{url('/')}}"><i></i>Home</a></li>
                      <li class="active"><a href="{{url('/')}}/our-services"><i></i>Our Services</a></li>
                      <li><a href="{{url('/')}}/contact-us"><i></i>Contact Us</a></li>
                      {{-- <li><a href="#."><i></i>Terms and Conditions</a></li> --}}

                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="footer_panel bottom30">
              <h4 class="bottom30 heading">Quick Links</h4>
              <table style="width:100%;">
                <tbody>
                  <tr>
                    <td>
                      <ul class="links">
                          <?php
                              $Categories = DB::table('categories')->get()
                          ?>
                          @foreach ($Categories as $Cat)
                          <li><a href="{{url('properties/for-sale')}}/{{$Cat->slung}}">{{$Cat->title}} for Sale</a></li>
                        @endforeach
                      </ul>
                    </td>
                    <td class="text-right">
                      <ul class="links text-left">
                        @foreach ($Categories as $Cat)
                        <li><a href="{{url('properties/for-sale')}}/{{$Cat->slung}}">{{$Cat->title}} for rent</a></li>
                        @endforeach


                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


      </div>
      <!--CopyRight-->
      <div class="copyright_simple">
        <div class="row">
          <div class="col-md-8 col-sm-5 top20 bottom20">
            <p>Copyright &copy; {{date('Y')}} <span>Reeland Realty Limited</span>. All rights reserved. | Powered By Designekta Studios</p>
          </div>
          <div class="col-md-4 col-sm-7 text-right top15 bottom10">
            <ul class="social_share">
              <li><a href="https://www.facebook.com/reelandrealty" class="facebook"><i class="icon-facebook-1"></i></a></li>
              <li><a href="https://twitter.com/ReelandRealty" class="twitter"><i class="icon-twitter-1"></i></a></li>
              <li><a href="https://www.instagram.com/reelandrealty/" class="google"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/company/reeland-realty-limited/" class="linkden"><i class="fa fa-linkedin"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
</footer>
