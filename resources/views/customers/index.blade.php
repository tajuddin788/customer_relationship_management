@extends('layouts.admin')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="padding-left:10px;">
                <h2>Check all customers</h2>

                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create new customer</a>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="padding-left:10px;">
        <tr>
            <th>#</th>
            <th>PhoneNumber</th>
            <th>Address</th>
            <th>Email</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->customerPhone }}</td>
            <td>{{ $customer->customerAddress }}</td>
            <td>{{ $customer->customerEmail }} </td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
@endsection