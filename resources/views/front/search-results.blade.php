@extends('front.master')

@section('content')




  <!-- Listing Start -->
  <section id="listing1" class="listing1 padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <h2 class="uppercase">Properties For Sale</h2>
              <p class="heading_space">Reeland Realty Limited is a real estate professional limited liability company incorporated in Kenya on 16th May, 2022. The company specializes on property valuations, management and estate agency, project appraisal and real estate consultancy services.</p>
            </div>
          </div>
          <div class="row">
            @foreach ($Property as $Pro)
            <div class="col-sm-6">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="{{url('/')}}/properties/explore/{{$Pro->slung}}"><img style="min-height:250px;" src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix">
                      <span class="tag pull-right">kes {{$Pro->price}}</span>
                    </div>
                    <span class="tag_t">For Sale</span>
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">{{$Pro->name}}</a></h3>
                      <p>{{$Pro->location}}</p>
                    </div>
                    <div class="property_meta transparent">
                      <span><i class="icon-select-an-objecto-tool"></i>{{$Pro->sqft}} sq ft</span>
                      <span><i class="icon-bed"></i>{{$Pro->sqft}} Bedrooms</span>
                      <span><i class="icon-safety-shower"></i>{{$Pro->bathroom}} Bathroom</span>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach



          </div>


        </div>
        @include('front.aside')
      </div>
    </div>
  </section>
  <!-- Listing end -->


@endsection
