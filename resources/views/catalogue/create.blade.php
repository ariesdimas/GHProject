@extends('layouts.app', ['activePage' => 'catalogue', 'titlePage' => __('Add New Catalogue')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('catalogue.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Catalogue') }}</h4>
                <p class="card-category">{{ __('Catalogue Management') }}</p>
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
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text" placeholder="Name" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="description" id="description" type="text" placeholder="description" required="true" aria-required="true"/>
                      @if ($errors->has('description'))
                        <span id="description-error" class="error text-danger" for="description">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Specific</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="specific" id="specific" type="text" placeholder="specific" required="true" aria-required="true"/>
                      @if ($errors->has('specific'))
                        <span id="specific-error" class="error text-danger" for="specific">{{ $errors->first('specific') }}</span>
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
@endsection