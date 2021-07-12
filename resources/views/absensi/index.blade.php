@extends('layouts.app', ['activePage' => 'attendance', 'titlePage' => __('attendance
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Attendance</h4>
              <p class="card-category"> Here you can manage your attendance data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('attendance.create') }}" class="btn btn-sm btn-primary">Check In/Out</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      
                      <th>
                        Name
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Check In
                      </th>
                      <th>
                        Location In
                      </th>
                      <th>
                        Check Out
                      </th>
                      <th>
                        Location Out
                      </th>
                      
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($absensi as $row )
                    <tr>
                      <td>{{$row->empname}}</td>
                      <td>{{$row->date}}</td>
                      <td>{{$row->in}}</td>
                      <td>{{$row->in_lat.','.$row->in_long }}</td>
                      <td>{{$row->out}}</td>
                      <td>{{$row->out_lat.','.$row->out_long }}</td>
                     
                    </tr>
                  @endforeach
                </tbody>
                       
                </table>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</div>
@endsection