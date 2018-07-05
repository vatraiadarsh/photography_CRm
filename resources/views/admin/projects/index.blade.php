@extends('layouts.master')
@section('title','projects')

@section('content')

    <div class="page-header">
        <h1>Projects</h1>
    </div>

    @include('admin.projects.filter')

    <div>
        <div class="pull-right">
                <p>
                    <a href="{{url('admin/projects/create')}}" class="btn btn-primary btn-xs" title="Add Customres">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </p>
            </div>

    </div>

    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Customer</th>
            <th>Project Type</th>
            <th>Project Date</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                 <td>{{$project->customer->first_name}} {{$project->customer->last_name}}</td>
                <td>{{$project->projectType->type_name}}</td>
                <td>{{$project->start_date}} | {{$project->end_date}} </td>
                <td>{{$project->created_date}}</td>
                <td>
                @if($project->status)
                <label class="label label-success">Active</label>
                @else
                <label class="label label-danger">Inactive</label>
                @endif
                </td>
                <td>
                    <form method="post" action="{{url('admin/projects/'.$project->id)}}">
                        <a href="{{url('admin/projects/'.$project->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Program Types">
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
