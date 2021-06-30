@extends('layouts.app', ['activePage' => 'customer', 'titlePage' => __('Add New Employee')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('customer.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Employee') }}</h4>
                <p class="card-category">{{ __('Employee Management') }}</p>
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
                  <label class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="address" id="address" type="text" placeholder="address" required="true" aria-required="true"/>
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Address 2</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="alamat2" id="alamat2" type="text" placeholder="alamat2" />
                      @if ($errors->has('alamat2'))
                        <span id="alamat2-error" class="error text-danger" for="alamat2">{{ $errors->first('alamat2') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="kota" id="kota" type="text" placeholder="kota"/>
                      @if ($errors->has('kota'))
                        <span id="kota-error" class="error text-danger" for="kota">{{ $errors->first('kota') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Country</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="negara" id="negara" type="text" placeholder="negara" required="true" aria-required="true"/>
                      @if ($errors->has('negara'))
                        <span id="negara-error" class="error text-danger" for="negara">{{ $errors->first('alamat2') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="phone" id="phone" type="text" placeholder="phone" required="true" aria-required="true"/>
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="phone">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Fax</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="fax" id="fax" type="text" placeholder="fax" />
                      @if ($errors->has('fax'))
                        <span id="fax-error" class="error text-danger" for="fax">{{ $errors->first('fax') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">E-Mail</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="email" id="email" type="email" placeholder="email" />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Limit Nominal</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="limitnominal" id="limitnominal" type="number" placeholder="limitnominal" />
                      @if ($errors->has('limitnominal'))
                        <span id="limitnominal-error" class="error text-danger" for="limitnominal">{{ $errors->first('limitnominal') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Limit Nota</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="limitnota" id="limitnota" type="number" placeholder="limitnota" />
                      @if ($errors->has('limitnota'))
                        <span id="limitnota-error" class="error text-danger" for="limitnota">{{ $errors->first('limitnota') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Proteksi</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="proteksi" id="proteksi" type="text" placeholder="proteksi" value="None" />
                      @if ($errors->has('proteksi'))
                        <span id="proteksi-error" class="error text-danger" for="proteksi">{{ $errors->first('proteksi') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Cara Pembayaran</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="carapembayaran" id="carapembayaran" type="text" placeholder="carapembayaran" value="Cash" required="true" aria-required="true"/>
                      @if ($errors->has('carapembayaran'))
                        <span id="carapembayaran-error" class="error text-danger" for="carapembayaran">{{ $errors->first('carapembayaran') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Transport Pengiriman</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="transportpengiriman" id="transportpengiriman" type="text" placeholder="transportpengiriman"/>
                      @if ($errors->has('transportpengiriman'))
                        <span id="transportpengiriman-error" class="error text-danger" for="transportpengiriman">{{ $errors->first('transportpengiriman') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Cara Pengiriman</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="carapengiriman" id="carapengiriman" type="text" placeholder="carapengiriman"/>
                      @if ($errors->has('carapengiriman'))
                        <span id="carapengiriman-error" class="error text-danger" for="carapengiriman">{{ $errors->first('carapengiriman') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Area</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="area" id="area" type="text" placeholder="area" />
                      @if ($errors->has('area'))
                        <span id="area-error" class="error text-danger" for="area">{{ $errors->first('area') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Sales</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="sales" id="sales" type="text" placeholder="sales" />
                      @if ($errors->has('sales'))
                        <span id="sales-error" class="error text-danger" for="sales">{{ $errors->first('sales') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Provinsi</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="provinsi" id="provinsi" type="text" placeholder="provinsi" />
                      @if ($errors->has('provinsi'))
                        <span id="provinsi-error" class="error text-danger" for="provinsi">{{ $errors->first('provinsi') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Tgl Bergabung</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="tglbergabung" id="tglbergabung" type="date" placeholder="tglbergabung" required="true" aria-required="true"/>
                      @if ($errors->has('tglbergabung'))
                        <span id="tglbergabung-error" class="error text-danger" for="tglbergabung">{{ $errors->first('tglbergabung') }}</span>
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