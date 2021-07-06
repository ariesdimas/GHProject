<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('GH APP') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <img src="{{ asset('material/img/logo.png') }}" style="width: 100%;">
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($vehicle as $row )
                <div class="col-12">
                    <a href="{{url('vehicle/'.$row->id)}}">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">{{$row->name}}</h5>
                            <div class="card-text">
                                {{$row->description}}
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            @endforeach
        </div>
    </div>
    <div style="text-align: center;position: fixed;bottom: 0;width: 100%;padding: 10px;background: white;">
        <div class="row">
            <div class="col"><a href="{{url('mobile')}}"> Browse</a></div>
            <div class="col"><a href="{{url('about')}}">About</a></div>
            <div class="col"><a href="{{url('contact')}}">Contact</a></div>
            <div class="col"><a href="{{url('login')}}">Login</a></div>
        </div>
    </div>

    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>
