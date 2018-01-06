@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

          @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
          @endif

            <div class="panel panel-default">
                <div class="panel-heading">Index Page!</div>

                <div class="panel-body">
                    
                    <div class="container col-md-12">
                      <h2>Manage Tasks</h2>          
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width:200px !important">Title</th>
                            <th style="width:200px !important">Description</th>
                            <th style="width:200px !important">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tasks as $k => $v)
                          <tr>
                            <td>{{ $v->title }}</td>
                            <td>{{ $v->description }}</td>
                            <td>Edit | Delete</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                </div>
            </div>

           {{--  {{ link_to_route('tasks.create','Add Task',null,['class'=>'btn btn-primary']) }} --}}
           <a href="{{ url('tasks/create') }}" class="btn btn-primary">Add New Task</a>

        </div>
    </div>
</div>
@endsection