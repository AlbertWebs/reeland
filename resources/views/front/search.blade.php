<div class="blue_navi">
    <div class="container">
    <div class="row">
    <div class="property-query-area">

      <form class="callus clearfix">
        <div class="col-md-6 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="single-query form-group">
              <input type="text" name="location" class="keyword-input" placeholder="e.g Loresho">
            </div>
        </div>
        <div class="col-md-2 col-sm-12 text-right">
          <button type="button" class="advanced text-center text-uppercase border_radius"><i class="icon-settings"></i>advanced</button>
        </div>
      </form>
      <div class="opened">
        <form class="callus clearfix">
          <div class="col-md-3 col-sm-6">
            <div class="single-query form-group">
              <div class="intro">
                <select>
                  <option class="active">Property Type</option>
                  <option selected="selected" disabled>Select Type</option>
                  <?php
                      $Category = DB::table('categories')->get();
                  ?>
                  @foreach($Category as $Cat)
                  <option value="{{$Cat->id}}">{{$Cat->title}} </option>
                  @endforeach

                </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-query form-group">
              <div class="intro">
                <select>
                  <option class="active">Property Status</option>
                  <option>All areas</option>
                  <option>Sale </option>
                  <option>Rent</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="single-query form-group">
                  <input type="text" class="keyword-input" placeholder="Min Price">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="single-query form-group">
                  <input type="text" class="keyword-input" placeholder="Max Price">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-5">

          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4 text-right form-group">
                <button type="submit" class="border_radius top15 btn-yellow bottom15">Search property</button>
              </div>
            </div>
          </div>
        </form>

      </div>
      </div>
      </div>
    </div>
  </div>
