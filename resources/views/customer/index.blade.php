@extends('layouts.app', ['activePage' => 'customer', 'titlePage' => __('Customer
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Customers</h4>
              <p class="card-category"> Here you can manage your customer data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('customer.create') }}" class="btn btn-sm btn-primary">Add</a>
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
                        Address
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Email
                      </th>
                      
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($customer as $employee )
                    <tr>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->address}}</td>
                      <td>{{$employee->phone}}</td>
                      <td>{{$employee->email}}</td>
                      <td>
                        <a href="{{ route('customer.edit',$employee->id) }}">Edit</a> | 
                        <a href="{{ route('customer.destroy',$employee->id) }}">Delete</a>

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