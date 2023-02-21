@extends('front.master')

@section('content')




  <!-- Listing Start -->
  <section id="listing1" class="listing1 padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-9">
              <h2 class="uppercase">Properties For Sale</h2>
              <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
            <div class="col-md-3">
            <form class="callus">
              <div class="single-query">
                <div class="intro">
                  <select>
                    <option class="active">Default Order</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing1.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>
                  <span class="tag_l">Featured</span>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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

            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing2.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>

                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-like"></i></a></li>
                      <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                    </ul>
                  </div>
                  <div class="toggle_share collapse" id="three">
                    <ul>
                      <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                      <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                      <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing7.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-like"></i></a></li>
                      <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                    </ul>
                  </div>
                  <div class="toggle_share collapse" id="three">
                    <ul>
                      <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                      <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                      <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing4.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>
                  <span class="tag_l">Featured</span>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-like"></i></a></li>
                      <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                    </ul>
                  </div>
                  <div class="toggle_share collapse" id="three">
                    <ul>
                      <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                      <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                      <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing5.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>
                  <span class="tag_l">Featured</span>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-like"></i></a></li>
                      <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                    </ul>
                  </div>
                  <div class="toggle_share collapse" id="three">
                    <ul>
                      <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                      <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                      <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{asset('theme/images/listing6.jpg')}}" alt="latest property" class="img-responsive"></a>
                  <div class="price clearfix">
                    <span class="tag pull-right">$8,600 Per Month</span>
                  </div>
                  <span class="tag_t">For Sale</span>
                  <span class="tag_l">Featured</span>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                    <p>45 Regent Street, London, UK</p>
                  </div>
                  <div class="property_meta transparent">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class="icon-bed"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                  </div>
                  <div class="property_meta transparent bottom30">
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                    <span></span>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-like"></i></a></li>
                      <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                    </ul>
                  </div>
                  <div class="toggle_share collapse" id="three">
                    <ul>
                      <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                      <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                      <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="padding_bottom text-center">
            <ul class="pager">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>
        </div>
        <aside class="col-md-4 col-xs-12">
          <div class="property-query-area clearfix">
            <div class="col-md-12">
              <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
            </div>
            <form class="callus">
              <div class="single-query form-group col-sm-12">
                <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option selected="" value="any">Location</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option class="active">Property Type</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option class="active">Property Status</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="search-2 col-sm-12">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <div class="intro">
                        <select>
                          <option class="active">Min Beds</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <div class="intro">
                        <select>
                          <option class="active">Min Baths</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 bottom10">
                <div class="single-query-slider">
                  <label><strong>Price Range:</strong></label>
                  <div class="price text-right">
                    <span>$</span>
                    <div class="leftLabel"></div>
                    <span>to $</span>
                    <div class="rightLabel"></div>
                  </div>
                  <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 form-group">
                <button type="submit" class="btn-blue border_radius">Search</button>
              </div>
            </form>
            <div class="col-sm-12">
              <div class="group-button-search">
                <a data-toggle="collapse" href=".html" class="more-filter bottom15">
                  <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                  <div class="text-1">Show more search options</div>
                  <div class="text-2 hide">less more search options</div>
                </a>
              </div>
            </div>
            <div class="search-propertie-filters collapse">
              <div class="container-2">
                <div class="row">
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="bottom40 margin40">Featured Properties</h3>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="{{asset('theme/images/f-p-1.png')}}" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">$128,600</a>
              </div>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="{{asset('theme/images/f-p-1.png')}}" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">$128,600</a>
              </div>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="{{asset('theme/images/f-p-1.png')}}" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">$128,600</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="margin40 bottom20">Featured Properties</h3>
            </div>
            <div class="col-md-12">
              <div id="agent-2-slider" class="owl-carousel">
                <div class="item">
                  <div class="property_item heading_space">
                    <div class="image">
                      <a href="#"><img src="{{asset('theme/images/slider-list2.jpg')}}" alt="listin" class="img-responsive"></a>
                      <div class="feature"><span class="tag-2">For Sale</span></div>
                      <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="property_item heading_space">
                    <div class="image">
                      <a href="#"><img src="{{asset('theme/images/slider-list2.jpg')}}" alt="listin" class="img-responsive"></a>
                      <div class="feature"><span class="tag-2">For Sale</span></div>
                      <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Listing end -->


@endsection
