  

@extends('supper_admin.master')

@section('title','Add Doctor|R-PMS')


@section('x')



<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Doctor Management</h3>
              </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Doctor <small> infos</small></h2>
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

                  {!! Form::open(['url'=>'supper/admin/master/doctor/info/save','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}  
                      <!-- <span class="section">Branch Info</span> -->
                      {{ csrf_field() }}
 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Doctor name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="name" placeholder="" type="text" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  >
                                 @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>

                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                           <!-- <input type="text" name="dob" value="{{ old('dob') }}"  data-inputmask="'mask': '99/99/9999'"
                                class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"  >   -->

                                <input type="text" name="dob" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>


                                 @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                          </div>
                      </div>


                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div id="gender" name="gender" class="btn-group" data-toggle="buttons">
                                       <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="gender" value="female"> Female
                                         </label>
                                         @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color:red">{{ $errors->first('gender') }}</strong>
                                            </span>
                                       @endif
                                    </div>
                                </div>

                        </div>


                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input name="phone" type="text" value="{{ old('phone') }}"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"  >
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                             </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input name="email" type="email" value="{{ old('email') }}"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" >
                                 @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                             </div>
                         </div>

                     

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password"> Password  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="password"  type="password" value="{{ old('password') }}"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"   >
                                 @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>


                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degree">Doctor Degree<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input name="degree" type="text" value="{{ old('degree') }}"  class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" >
                                 @if ($errors->has('degree'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('degree') }}</strong>
                                        </span>
                                    @endif
                             </div>
                         </div>


`

                         <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="speciacity">Doctor Speciacity<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input name="speciacity" type="text" value="{{ old('speciacity') }}"  class="form-control{{ $errors->has('speciacity') ? ' is-invalid' : '' }}" >
                                   @if ($errors->has('speciacity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('speciacity') }}</strong>
                                        </span>
                                    @endif
                             </div>
                         </div>




                         <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Local Address<span class="required">*</span>
                             </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <textarea id="textarea"   name="local_address" value="{{ old('local_address') }}"  class="form-control col-md-7 col-xs-12"></textarea>
                                 @if ($errors->has('local_address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('local_address') }}</strong>
                                        </span>
                                @endif
                               </div>

                         </div>


                         <div class="item form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo<span class="required">*</span>
                             </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                     <input type="file" id="" name="photo"    class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" accept="image/*" /><br>
                                     @if ($errors->has('photo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color:red">{{ $errors->first('photo') }}</strong>
                                                </span>
                                        @endif
                                </div>

                         </div>


                         <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" ">
                                                  <option value="" selected="selected">----Select One----</option>
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">De-Active</option>
                                             </select>
                                             @if ($errors->has('status'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color:red">{{ $errors->first('status') }}</strong>
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