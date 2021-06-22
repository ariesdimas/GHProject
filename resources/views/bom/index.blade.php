@extends('layouts.app', ['activePage' => 'bom', 'titlePage' => __('bom
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Bom</h4>
              <p class="card-category"> Here you can manage your bom data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('bom.create') }}" class="btn btn-sm btn-primary">Add</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        Kode
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Vehicle
                      </th>
                      <th>
                        Catalogue
                      </th>
                      
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bom as $row )
                    <tr>
                      <td>{{$row->kode}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->vehicle }}</td>
                      <td>
                        <a href="{{ route('bom.edit',$row->id) }}">Edit</a> | 
                        <a href="{{ route('bom.deletedata',$row->id) }}">Delete</a>
                        
                      </td>
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