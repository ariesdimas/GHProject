@extends('layouts.app', ['activePage' => 'vehicle', 'titlePage' => __('Edit vehicle')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ $vehicle->name }}</h4>
                <p class="card-category">{{ $vehicle->description}}</p>
              </div>
              <div class="card-body ">
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">Kode</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="kode" id="kode" type="text" placeholder="Kode" value="{{$vehicle->kode}}" readonly/>
                      @if ($errors->has('kode'))
                        <span id="kode-error" class="error text-danger" for="kode">{{ $errors->first('kode') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
               

               
                <div class="row">
                  <label class="col-sm-2 col-form-label">Specific</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                        {!! $vehicle->specific !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="harga" id="harga" type="number" placeholder="harga" value="{{$vehicle->harga}}" readonly/>
                      @if ($errors->has('harga'))
                        <span id="harga-error" class="error text-danger" for="harga">{{ $errors->first('harga') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-7">
                      <div class="row">
                        @foreach ($photos as $row )

                            <div class="col-3">
                                <img src="{{asset('storage/pruduct/'.$row->photo)}}" style="width: 100%;">
                            </div>
                            
                        @endforeach
                      </div>
                    </div>
                  </div>
                
                

                
                

                
              </div>
              
            </div>
        </div>
      </div>
      
    </div>
  </div>
  <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("specific");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection