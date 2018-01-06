@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Update Page</div>

                <div class="panel-body">
                    
                    <div class="container col-md-12">
                      <h2>Update Tasks</h2>

                      {!! Form::model($tasks, array('route'=>['tasks.update',$tasks->id],'method'=>'PUT')) !!}

                        <div class="form-group">
                          {!! Form::label('title','Enter Title') !!}
                          {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::label('description','Enter Description') !!}
                          {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                       </div>

                      {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection