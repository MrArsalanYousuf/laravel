@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    
                    <div class="col-md-12 text-center">
                        <h2>Enter Your Date of Birth Here</h2>
                        <br>
                        <hr>
                    </div>


                    {!! Form::open(array('route'=>'age.store')) !!}

                    <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('date','Please Enter') !!}
                        {!! Form::text('date',null,['class'=>'form-control datepicker1 user-date']) !!}
                        
                    </div>
                    </div>

                    <div class="col-md-6" style="margin-top: 25px">
                    <div class="form-group">

                        {!! Form::button('Find', ['type'=>'submit','class'=>'btn btn-success form-control find-age']) !!}
                        
                    </div>
                    </div>

                    <div class="col-md-12 text-center hide-div" style="display: none">
                        <br>
                        <hr>
                        <h2 class="show-div"></h2>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
 $(function() {
     $(document).on('focusin', '.datepicker1', function(){
      $(this).datepicker({
          format: 'yyyy-mm-dd',
          changeMonth: true,
          changeYear: true,
          yearRange: '1900:<?php echo date('Y'); ?>'
        });
    });
});
</script>

<script type="text/javascript">

$(document).ready(function(){

    $(".find-age").click(function(e){

        e.preventDefault();
        
        var user_date = $('.user-date').val();

        if(user_date == ''){
            alert('Please Select Date!');
            return false;
        }

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "<?php echo url('/finding'); ?>",
            data: {_token: CSRF_TOKEN,
                   user_date: user_date
            },
    
            success: function(data){

                $('.hide-div').css('display','block');

                $('.show-div').html(data);

            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    });
});
</script>

@endsection