@extends('layouts.master')
@section('title','Customers')

@section('content')

    <div class="page-header">
        <h1>Add Customers</h1>
    </div>

    {!!Form::open(['url'=>'admin/customers/'.$customer->id,'method'=>'PUT','files'=>true])!!}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('First Name')}}
                    {{Form::text('first_name',$customer->first_name,['class'=>'form-control'])}}
                    @if ($errors->first('first_name'))
                    <div class="label label-danger">  
                        {{$errors->first('first_name')}} 
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Last Name')}}
                    {{Form::text('last_name',$customer->last_name,['class'=>'form-control'])}}
                    @if ($errors->first('last_name'))
                    <div class="label label-danger">  
                        {{$errors->first('last_name')}} 
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Email')}}
                    {{Form::email('email',$customer->email,['class'=>'form-control'])}}
                    @if ($errors->first('email'))
                    <div class="label label-danger">  
                        {{$errors->first('email')}} 
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::Label('Contact NO')}}
                    {{Form::text('contact_no',$customer->contact_no,['class'=>'form-control'])}}
                    @if ($errors->first('contact_no'))
                    <div class="label label-danger">  
                        {{$errors->first('contact_no')}} 
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {{Form::Label('Bio')}}
                    {{Form::textarea('bio',$customer->bio,['class'=>'form-control'])}}
                    @if ($errors->first('bio'))
                    <div class="label label-danger">  
                        {{$errors->first('bio')}} 
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{Form::Label('Photo')}}
                    {{Form::file('photo')}}
                    @if($customer->photo)
                    <div>
                    <img src="{{Storage::url($customer->photo)}}" style="height:75px;width:75px;"/>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success">Save</button>
        <a class="btn btn-danger" href="{{url('admin/customers')}}">Back</a>
    {!!Form::close()!!}

@endsection