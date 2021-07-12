@extends('layouts.app', ['activePage' => 'attendance', 'titlePage' => __('Add New Bom')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('attendance.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Bom') }}</h4>
                <p class="card-category">{{ __('Bom Management') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      
                      <input type="hidden" name="employee_id" id="employee_id" value="{{Auth::user()->id}}">
                      <input class="form-control" name="date" id="date" type="text" placeholder="Date" required="true" aria-required="true" value="{{date('Ymd')}}" readonly/>
                      @if ($errors->has('date'))
                        <span id="date-error" class="error text-danger" for="date">{{ $errors->first('date') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Check In</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="in" id="in" type="text" placeholder="Check In" required="true" aria-required="true" value="{{date('h:i:s')}}" readonly/>
                      @if ($errors->has('in'))
                        <span id="in-error" class="error text-danger" for="in">{{ $errors->first('in') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Lat</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="in_lat" id="in_lat" type="text" placeholder="in_lat" readonly/>
                      @if ($errors->has('in_lat'))
                        <span id="in_lat-error" class="error text-danger" for="in_lat">{{ $errors->first('in_lat') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Long</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="in_long" id="in_long" type="text" placeholder="in_long" readonly />
                      @if ($errors->has('in_long'))
                        <span id="in_long-error" class="error text-danger" for="in_long">{{ $errors->first('in_long') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

               
                

                

                
                

                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyA-zDlBiF6fOO0myJlywArKKYe5tp8jNm4"></script>
  <script>
    (function() {
      getLocation()

    })();

    var x = document.getElementById("in_lat");
    var y = document.getElementById("in_long");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        x.value = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      //console.log(position.coords.latitude)
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      var latlng = new google.maps.LatLng(lat, lng);
      x.value = position.coords.latitude;
      y.value = position.coords.longitude;

      var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        alert("Location: " + results[1].formatted_address);
                    }
                }
            });     

    }
  </script>
@endsection