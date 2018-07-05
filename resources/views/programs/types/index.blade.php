@extends('layouts.master')
@section('title','Program Types')

@section('content')

    <div class="page-header">
        <h1>Program Types</h1>
    </div>

    <div class="pull-right">
        <p>
            <a href="{{url('admin/Programtypes/create')}}" class="btn btn-primary btn-xs" title="Add Program Types">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </p>
    </div>

    <table class="table table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>    
        </tr>

        @foreach($types as $type)
            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>
                    <form method="post" action="{{url('admin/Programtypes/'.$type->id)}}">
                        <a href="{{url('admin/Programtypes/'.$type->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Program Types">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$type->id}}"/>
                        <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                            
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection