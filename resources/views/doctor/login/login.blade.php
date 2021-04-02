 
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Admin Login| </title>

        <!-- Bootstrap -->
        <link href="{{asset('public/asset/backEnds/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('public/asset/backEnds/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('public/asset/backEnds/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('public/asset/backEnds/')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{asset('public/asset/backEnds/')}}/build/css/custom.min.css" rel="stylesheet">
    </head>

   
     <body class="login">
        <div>

            <div class="login_wrapper">
                
                <div class="animate form login_form">
                    <section class="login_content">
                        {!! Form::open(['url'=>'/login/check/admin/supper','method'=>'POST' ]) !!}
                        <h1>Login Form</h1>
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

                           <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

                            {{Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter Your Email'])}}

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter Your Password'])}}
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            
                        </div>
                        
                        <div>
                          {{Form::submit('login',['class'=>'btn btn-default ','name'=>'btn'])}} 

                          <a href="{{ url('/registration/admin/supper') }}">I don't have an account. Create new</a>
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
