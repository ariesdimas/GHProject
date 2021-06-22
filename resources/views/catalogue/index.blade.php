@extends('layouts.app', ['activePage' => 'catalogue', 'titlePage' => __('catalogue
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Catalogue</h4>
              <p class="card-category"> Here you can manage your catalogue data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('catalogue.create') }}" class="btn btn-sm btn-primary">Add</a>
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
                        Description
                      </th>
                      
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($catalogue as $row )
                    <tr>
                      <td>{{$row->name}}</td>
                      <td>{{$row->description}}</td>
                      <td>
                        <a href="{{ route('catalogue.edit',$row->id) }}">Edit</a> | 
                        <a href="{{ route('catalogue.deletedata',$row->id) }}">Delete</a>
                        
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