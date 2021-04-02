<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Admin Registration|  </title>

        <!-- Bootstrap -->
        <link href="{{asset('public/backEnds/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('public/backEnds/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('public/backEnds/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('public/backEnds/')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('public/backEnds/')}}/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">


                        {!! Form::open(['url'=>'/registration/check/admin/supper','method'=>'POST' ]) !!}
                        <h1>Registration Form</h1>
                        <div>
                              @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }} 
                                    </div>
                                @endif 
                                
                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ session::get('fail') }} 
                                    </div>
                                @endif 
            
                        </div>

                        <div>
                            {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Name'])}}
                            <span class="help-block" style="color:red">
                                 <strong>@error('name'){{ $message }} @enderror</strong>
                            </span>
                        </div>


                        <div>
                            {{Form::text('username',null,['class'=>'form-control','placeholder'=>'Username'])}}
                            <span class="help-block" style="color:red">
                                 <strong>@error('username'){{ $message }} @enderror</strong>
                            </span>
                        </div>



                        <div>
                            {{Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])}}
                            <span class="help-block" style="color:red">
                                <strong>@error('email'){{ $message }} @enderror</strong>
                            </span>
                        </div>
                        

                        <div >
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                            <span class="help-block" style="color:red">
                                <strong>@error('password'){{ $message }} @enderror</strong>
                            </span>
                        </div>


                        <div >
                            {{Form::password('confirm_password',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
                            <span class="help-block" style="color:red">
                                     <strong>@error('confirm_password'){{ $message }} @enderror</strong>
                            </span>
                        </div>


                        <div>
                          {{Form::submit('Save',['class'=>'btn btn-default ','name'=>'btn'])}} 
                         
                          <a href="{{ url('/login/admin/supper') }}">I already have an account. Login please</a>
                        
                        </div>



                        <div class="clearfix"></div>


                        <div class="separator">
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Robin Ahmed</h1>
                                  <p>©2021 All Rights Reserved & Privacy and Terms</p>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </section>
                </div>

            </div>
        </div>
    </body>
</html>
