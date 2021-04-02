  

@extends('supper_admin.master')

@section('title','Change Password | R-PMS')


@section('x')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Password Management</h3>
              </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>change <small>password</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    
                    
                  <div class="x_content">
                     <div class="container-fluid">
                        <div class="row">

                             @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ session::get('fail') }} 
                                    </div>
                                @endif
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }} 
                                    </div>
                                @endif
                          </div> 
                     </div> 

                  {!! Form::open(['url'=>'supper/admin/master/change/password/update','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                      <!-- <span class="section">Branch Info</span> -->
                      {{ csrf_field() }}
 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="old_password"> Type Old password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  
                                 name="old_password" placeholder=""
                              
                                 type="password"
                                  class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" 
                                 >
                                 @if ($errors->has('old_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('old_password') }}</strong>
                                </span>
                                @endif
                        </div>


                      </div>

                     

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password">Type new password  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input 
                                 name="new_password" 
                              
                                 type="password"
                                 class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" 
                                 >

                                 @if ($errors->has('new_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('new_password') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm_password">Confirm new password  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input 
                                 name="confirm_password" 
                          
                                 type="password"
                                 class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" 
                                 >

                                 @if ($errors->has('confirm_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('confirm_password') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>
 

                  

                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        {{Form::submit('update',['class'=>'btn btn-success ','name'=>'btn'])}}  
                      </div>
                      {!! Form::close() !!}
                      
                      
                      
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>



        
@endsection