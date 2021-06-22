@extends('layouts.app', ['activePage' => 'employees', 'titlePage' => __('Employees
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Employees</h4>
              <p class="card-category"> Here you can manage your employees data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('employees.create') }}" class="btn btn-sm btn-primary">Add</a>
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
                      <th>
                        Password
                      </th>
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($employees as $employee )
                    <tr>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->address}}</td>
                      <td>{{$employee->phone}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->password}}</td>
                      <td>
                        <a href="{{ route('employees.edit',$employee->id) }}">Edit</a> | 
                        <a href="{{ route('employees.destroy',$employee->id) }}">Delete</a>

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