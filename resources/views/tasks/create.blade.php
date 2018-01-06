@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Page</div>

                <div class="panel-body">
                    
                    <div class="container col-md-12">
                      <h2>Create Tasks</h2>

                      {!! Form::open(array('route'=>'tasks.store')) !!}

                        <div class="form-group">
                          {!! Form::label('title','Enter Title') !!}
                          {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::label('description','Enter Description') !!}
                          {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                       </div>

                      {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection