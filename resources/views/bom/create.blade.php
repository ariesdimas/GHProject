@extends('layouts.app', ['activePage' => 'bom', 'titlePage' => __('Add New Bom')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('bom.store') }}" autocomplete="off" class="form-horizontal">
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
                  <label class="col-sm-2 col-form-label">Kode</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="kode" id="kode" type="text" placeholder="Kode" required="true" aria-required="true"/>
                      @if ($errors->has('kode'))
                        <span id="kode-error" class="error text-danger" for="kode">{{ $errors->first('kode') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
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
                  <label class="col-sm-2 col-form-label">Vehicle</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="vehicle" id="vehicle" required="true" aria-required="true">
                          @foreach ($vehicle as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                      </select>
                      @if ($errors->has('vehicle'))
                        <span id="vehicle-error" class="error text-danger" for="vehicle">{{ $errors->first('vehicle') }}</span>
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