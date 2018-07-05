@extends('layouts.master')
@section('title','Project')

@section('content')

    <div class="page-header">
        <h1>Add Project</h1>
    </div>

    {!!Form::open(['url'=>'admin/projects','method'=>'post','files'=>true])!!}
        <div class="form-group">
            {{Form::Label('title')}}
            {{Form::text('title','',['class'=>'form-control'])}}
            @if ($errors->first('title'))
                <div class="label label-danger">
                    {{$errors->first('title')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            {{Form::Label('Description')}}
            {{Form::textarea('description','',['class'=>'form-control'])}}
            @if ($errors->first('description'))
                <div class="label label-danger">
                    {{$errors->first('bio')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            {{Form::Label('Project Type')}}
                <select name="project_type_id" class="form-control">
                    {{-- customer_id is from database --}}
                    <option value="">Select Project Type</option>
                    @foreach($types as $type)
                        <option value="{{$type->id}}">
                        {{$type->type_name}}
                        </option>

                    @endforeach

                </select>
             @if ($errors->first('project_type_id'))
                <div class="label label-danger">
                    {{$errors->first('project_type_id')}}
                </div>
            @endif
        </div>


        <div class="form-group">
            {{Form::Label('Customer')}}
            <select name="customer_id" class="form-control">
                {{-- customer_id is from database --}}
                <option value="">Select Customer</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">
                        {{$customer->fullName()}}
                    </option>
                @endforeach
            </select>

            @if ($errors->first('customer_id'))
            <div class="label label-danger">
                {{$errors->first('customer_id')}}
            </div>
            @endif
        </div>

        <div class="form-group">
                {{Form::Label('Start Date')}}
                {{Form::text('start_date','',['class'=>'form-control'])}}
                @if ($errors->first('start_date'))
                <div class="label label-danger">
                    {{$errors->first('start_date')}}
                </div>
                @endif
        </div>

        <div class="form-group">
                {{Form::Label('End Date')}}
                {{Form::text('end_date','',['class'=>'form-control'])}}
                @if ($errors->first('end_date'))
                <div class="label label-danger">
                    {{$errors->first('end_date')}}
                </div>
                @endif
        </div>



        <button type="submit" class="btn btn-success">Save</button>
        <a class="btn btn-danger" href="{{url('admin/projects')}}">Back</a>
    {!!Form::close()!!}

@endsection
