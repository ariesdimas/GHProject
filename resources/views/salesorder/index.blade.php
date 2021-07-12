@extends('layouts.app', ['activePage' => 'salesorders', 'titlePage' => __('salesorders
 Management')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Sales Orders</h4>
              <p class="card-category"> Here you can manage your sales orders data</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('salesorders.create') }}" class="btn btn-sm btn-primary">Add</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        Code
                      </th>
                      <th>
                        Orderdate
                      </th>
                      <th>
                        Finishdate
                      </th>
                      <th>
                        Product
                      </th>
                      <th>
                        Cust
                      </th>
                      <th>
                        Qty
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Total
                      </th>
                      
                   
                      <th class="text-right">
                        Actions
                      </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($salesorders as $row )
                    <tr>
                      <td>{{$row->code}}</td>
                      <td>{{$row->orderdate}}</td>
                      <td>{{$row->finishdate}}</td>
                      <td>{{$row->product}}</td>
                      <td>{{$row->cust }}</td>
                      <td>{{$row->qty }}</td>
                      <td>{{$row->price }}</td>
                      <td>{{$row->total }}</td>
                      <td class="text-right">
                        <a href="{{ route('salesorders.show',$row->id) }}">Preview</a> | 
                        <a href="{{ route('salesorders.edit',$row->id) }}">Edit</a> | 
                        <a href="{{ route('salesorders.deletedata',$row->id) }}">Delete</a>
                        
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