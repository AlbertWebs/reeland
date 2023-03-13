<aside class="col-md-4 col-xs-12">
    <div class="property-query-area clearfix">
      <div class="col-md-12">
        <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
      </div>
      <form class="callus" method="POST" action="{{url('/')}}/search-property">
        @csrf
        <div class="single-query form-group col-sm-12">
          <input name="keyword" type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
        </div>
        <div class="single-query form-group col-sm-12">
          <div class="intro">
            <div class="single-query form-group">
                <input type="text" name="location" class="keyword-input" placeholder="Location">
              </div>
          </div>
        </div>
        <div class="single-query form-group col-sm-12">
          <div class="intro">
            <select name="type">
                <option class="active">Property Type</option>
                <?php
                $Category = DB::table('categories')->get();
            ?>
            @foreach($Category as $Cat)
            <option value="{{$Cat->id}}">{{$Cat->title}} </option>
            @endforeach
              </select>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="min" class="keyword-input" placeholder="Min Price">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="max" class="keyword-input" placeholder="Max Price">
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 form-group">
          <button type="submit" class="btn-blue border_radius">Search</button>
        </div>
      </form>

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
        <h3 class="bottom40 margin40">Properties for Sale</h3>
      </div>
    </div>
    <?php $Sale = DB::table('products')->where('type','sale')->get(); ?>
    @foreach ($Sale as $sale)
    <div class="row bottom20">
        <div class="col-md-4 col-sm-4 col-xs-6 p-image">
          <img src="{{url('/')}}/uploads/products/{{$sale->image_one}}" alt="image"/>
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

    <div class="row">
        <div class="col-md-12">
          <h3 class="bottom40 margin40">Properties for Rent</h3>
        </div>
      </div>
      <?php $Sale = DB::table('products')->where('type','sale')->get(); ?>
      @foreach ($Sale as $sale)
      <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="{{url('/')}}/uploads/products/{{$sale->image_one}}" alt="image"/>
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




  </aside>
