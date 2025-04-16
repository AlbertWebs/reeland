@extends('front.master')

@section('content')




  <!-- Listing Start -->
  <section id="listing1" class="listing1 padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <h2 class="uppercase">Properties For Rent</h2>
              <p class="heading_space">Please have a view of our latest listing and contact us for further information on property of your choice</p>
            </div>

          </div>
          <div class="row">


            @foreach ($Property as $featured)
            <div class="cbp-item latest @if($featured->type == "sale") sale @endif" style="width: 360px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
                <div class="property_item">
                  <div class="image">
                    <a href="{{url('/')}}/properties/explore/{{$featured->slung}}"><img style="width:358px; height:358px; object-fit:cover" src="{{url('/')}}/uploads/products/{{$featured->image_one}}" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix">
                      <span class="tag pull-right"> @if($featured->type == "sale") Kes. {{number_format($featured->price)}} @else Kes. {{number_format($featured->price)}} Per Month @endif</span>
                    </div>

                    <span class="tag_t">For @if($featured->type == "sale") Sale @else Rent @endif </span>
                    {{-- <span class="tag_l">Featured</span> --}}
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 style="min-height:105px" class="captlize"><a href="{{url('/')}}/properties/explore/{{$featured->slung}}">{{$featured->name}}</a></h3>
                      <p>{{$featured->location}}</p>
                    </div>
                    <div class="property_meta transparent">
                        <span><i class="icon-select-an-objecto-tool"></i>{{$featured->sqft}} sq ft</span>
                        <span><i class=" icon-bed"></i>{{$featured->bedroom}} Bedrooms</span>
                        <span><i class="icon-safety-shower"></i>{{$featured->bathroom}} Bathroom</span>

                    </div>


                  </div>
                </div>
              </div>
            </div>
            @endforeach


          </div>
          {{$Property}}


        </div>
        {{-- @include('front.aside') --}}
      </div>
    </div>
  </section>
  <!-- Listing end -->


@endsection
