@extends('layouts.master')
@section('title','Customers')

@section('content')

    <div class="page-header">
        <h1>Customers</h1>
    </div>

    <div class="pull-right">
        <p>
            <a href="{{url('admin/customers/create')}}" class="btn btn-primary btn-xs" title="Add Customres">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>

    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Action</th>    
        </tr>

        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>
                @if($customer->photo!=='')
                
                <a href="{{Storage::url($customer->photo)}}" target="_blank"></a>
                <img src="{{Storage::url($customer->photo)}}" style="height:75px;width:75px;border-radius:100%;"/>
                @else
                <img src="{{url('img/na.jpg')}}" style="height:75px;width:75px;border-radius:100%;"/>
                @endif
                </td>
                
                <td>{{$customer->first_name}} {{$customer->last_name}} </td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->contact_no}}</td>
                <td>{{$customer->created_date}}</td>
                <td>
                @if($customer->status)
                <label class="label label-success">Active</label>
                @else
                <label class="label label-danger">Inactive</label>
                @endif
                </td>
                <td>
                    <form method="post" action="{{url('admin/customers/'.$customer->id)}}">
                        <a href="{{url('admin/customers/'.$customer->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Program Types">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                           
                            <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                            <input type="hidden" name="_method" value="DELETE">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection