@extends('front.master')

@section('content')

@foreach ($Services as $Service)


<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <h1 class="text-uppercase">Our Services</h1>
             <p style="max-width:600px; margin:0px auto">Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.</p>
             <ol class="breadcrumb text-center">
                <li><a href="#.">Home</a></li>
                <li><a href="#.">Services</a></li>
                <li class="active">{{$Service->title}}</li>
             </ol>
          </div>
       </div>
    </div>
 </section>
 <!-- Page Banner End -->

 <!-- News Details Start -->
<section id="news-section-1" class="news-section-details property-details padding_top">
    <div class="container">

      <div class="row heading_space">

        <div class="col-md-8">

            <div class="row">

              <div class="news-1-box clearfix">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <img style="width:100%" src="{{url('/')}}/uploads/services/{{$Service->image}}" alt="image" class="img-responsive"/>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12 top30">



                      <h3>{{$Service->title}}</h3>

                      {!!html_entity_decode($Service->content)!!}


                  </div>
              </div>

           </div>



          <div class="row">

              <div class="col-md-12">
                  <div class="text-it-p">
                      <p>{{$Service->meta}}</p>
                  </div>
              </div>
              </div>

          <div class="row heading_space">

            <div class="news-2-tag">
            <div class="col-md-5 col-sm-5 col-xs-12 top15">
              {{-- <h4>Tags:</h4> --}}
              {{-- <p class="p-font-15">house , bedroom, bed</p> --}}
            </div>

            <div class="col-md-7 col-sm-7 col-xs-12 text-right">
              <div class="social-icons">
                <h4>Share:</h4>
                <ul class="social_share">
                    <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                    <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                    <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                    <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                 </ul>
              </div>
            </div>
            </div>

         </div>


          <hr>


         </div>
        <aside class="col-md-4 col-xs-12">
          <form class="form-search" method="get" id="news-search" action="http://wahabali.com/">
                      <div class="input-append">
                          <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                          <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                      </div>
                  </form>
          <h3>Services</h3>
          <ul class="pro-list padding-t-20">
            <br>
            <?php
                 $Serices = DB::table('services')->get();
                ?>
                @foreach ($Serices as $Ser)
                <li>
                    <a href="{{url('/')}}/our-services/{{$Ser->slung}}">{{$Ser->title}}</a>
                </li>
                @endforeach

            </ul>
          <div class="row">
            <div class="col-md-12">
              <h3 class="bottom40 margin40">Featured Properties</h3>
            </div>
          </div>
          <?php $Sale = DB::table('products')->where('featured','1')->get(); ?>
          @foreach ($Sale as $sale)
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img style="width:100%; height:100%;" src="{{url('/')}}/uploads/products/{{$sale->image_one}}" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>{{$sale->name}}</h4>
                <p class="bottom15">{{$sale->location}}</p>
                <a href="#.">kes {{$sale->price}}</a>
              </div>
            </div>
          </div>
          @endforeach


          <br><br>
          {{-- <div class="row padding-t-55">
            <div class="col-md-12 padding-b-20">
              <h3>Tag</h3>
            </div>
            <br><br>
            <div class="col-md-12">
                <div class="news-tag">
                    <?php
                    $Categories = DB::table('categories')->get()
                ?>
                @foreach ($Categories as $Cat)
                  <a style="margin-bottom: 10px !important" href="{{url('properties/for-sale')}}/{{$Cat->slung}}">{{$Cat->title}}</a>

                  @endforeach
              </div>

            </div>
          </div> --}}

        </aside>

      </div>

    </div>
  </section>
  <!-- News Details End -->


 @endforeach



@endsection
