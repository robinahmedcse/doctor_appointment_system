
@extends('supper_admin.master')

@section('title','Add Allowances|R-PMS')


@section('x')




     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Allowance Management</h3>
              </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create <small>Allowance</small></h2>
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

                  {!! Form::open(['url'=>'supper/admin/master/-/save','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                      <!-- <span class="section">Allowance Info</span> -->
                      <div>                        
                            @if(Session::get('fail'))
                               <span class="invalid-feedback" role="alert">
                                    <strong style="color:red"> {{ session::get('fail') }} </strong>
                                </span>
                             @endif
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="allowance_name">Allowance Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  
                                 id="allowance_name" 
                                 data-validate-length-range="6" 
                                 data-validate-words="2" 
                                 name="allowance_name" placeholder=""
                                  
                                 type="text"
                                 value="{{ old('allowance_name') }}"
                                  autofocus
                                  class="form-control{{ $errors->has('allowance_name') ? ' is-invalid' : '' }}" 
                                 >
                                 @if ($errors->has('allowance_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('allowance_name') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>
                      

                 

                      

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Allowance Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="allowance_status" class="form-control">
                                    <option value="null">Select Allowance Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">De-active</option>
                                </select>
                            </div>
                            <br>

                        </div> 

 

                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        {{Form::submit('Save',['class'=>'btn btn-success ','name'=>'btn'])}}  
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