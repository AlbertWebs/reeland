@extends('front.master')

@section('content')

<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <h1 class="text-uppercase">Our Services</h1>
             <p style="max-width:600px; margin:0px auto">Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya on 16th May, 2022. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.</p>
             <ol class="breadcrumb text-center">
                <li><a href="#.">Home</a></li>
                <li><a href="#.">Services</a></li>
                <li class="active">All Services</li>
             </ol>
          </div>
       </div>
    </div>
 </section>
 <!-- Page Banner End -->



 <!-- Agent-Profile Start -->
 <section id="news" class="news-section-details padding_bottom_half padding_top">
   <div class="container">
     <div class="row">
        @foreach ($Services as $Ser)
        <div class="col-md-4 col-sm-6 col-xs-12 heading_space">
            <div class="sim-lar-p">
              <div class="image bottom20"><img style="border-radius:10px" src="{{url('/')}}/uploads/services/{{$Ser->image}}" alt="image"></div>
              <div class="sim-lar-text">
                <h3 class="bottom10" style="min-height:60px"><a href="{{url('/')}}/our-services/{{$Ser->slung}}">{{$Ser->title}}</a></h3>
                {{-- <p><span>By:</span> Admin <span>|</span> <span>Date:</span> Feb 22, 2017</p> --}}
                <p class="bottom20" style="min-height:110px">{{$Ser->meta}}</p>
                <a class="btn-more" href="{{url('/')}}/our-services/{{$Ser->slung}}">
                <i><img alt="arrow" src="{{asset('theme/images/arrowl.png')}}"></i><span>More Details</span><i><img alt="arrow" src="{{asset('theme/images/arrowr.png')}}"></i>
                </a>
              </div>
            </div>
          </div>
        @endforeach
     </div>
   </div>
 </section>
 <!-- Agent-Profile End -->

@endsection
