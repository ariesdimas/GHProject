@extends('layouts.app', ['activePage' => 'catalogue', 'titlePage' => __('Edit catalogue')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('catalogue.savephoto') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit catalogue') }}</h4>
                <p class="card-category">{{ __('Vehicle Management') }}</p>
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
                  <label class="col-sm-2 col-form-label" for="img">Photo</label>
                  <div class="col-sm-7">
                      <input type="hidden" name="id" id="id" value="{{$catalogue->id}}">
                      <input type="file" class="form-control" name="img" id="img" />
                      @if ($errors->has('img'))
                        <span id="img-error" class="error text-danger" for="img">{{ $errors->first('img') }}</span>
                      @endif
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

  
@endsection
