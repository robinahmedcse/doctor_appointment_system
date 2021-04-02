
@extends('supper_admin.master')

@section('title','Edit Department|R-PMS')


@section('x')



     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Department</h3>
              </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Create <small>department</small></h2> -->
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

                  {!! Form::open(['url'=>'supper/admin/master/dept/update/data','method'=>'POST', 'name'=>'editForm','class'=>'form-horizontal form-label-left']) !!}  
                      <span class="section">Department Info</span>
                      @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                       <h2> {{ session::get('fail') }} </h2>
                                    </div>
                                @endif
                      <input name="dept_id"   type="hidden"  value="{{ $data->emp_department_id }}"
                        class="form-control"  >

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept_name">Department Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  
                                 id="dept_name" 
                                 data-validate-length-range="6" 
                                 data-validate-words="2" 
                                 name="dept_name" placeholder=""
                                  
                                 type="text"
                                 value="{{ $data->emp_department_name }}"
                                  autofocus
                                  class="form-control{{ $errors->has('dept_name') ? ' is-invalid' : '' }}" 
                                 >
                             
                        </div>
                      </div>
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept_code">Department Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input 
                                 id="dept_code" 
                                 data-validate-length-range="6" data-validate-words="2" 
                                 name="dept_code" 
                                 placeholder="" 
                               
                                 type="text"
                                 value="{{ $data->emp_department_code }}"
                                 autofocus
                                 class="form-control{{ $errors->has('dept_code') ? ' is-invalid' : '' }}" 
                                 >

                                 @if ($errors->has('dept_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('dept_code') }}</strong>
                                </span>
                                @endif
                        </div>
                      </div>

                      

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Department Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="dept_status" id="dept_status" class="form-control">
                                    <option value="null">Select Department Status</option>
                                    <option value="0">Active</option>
                                    <option value="1">De-active</option>
                                </select>
                            </div>
                            <br>
                        
                             @if(Session::get('fail'))
                             <span class="invalid-feedback" role="alert">
                                    <strong style="color:red"> {{ session::get('fail') }} </strong>
                                </span>
                                @endif

                        </div> 


                       <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Designation Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="designation" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                                 name="designation" placeholder="Designation" required="required" type="text">
                        </div>
                      </div> -->

                    
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



<script>

document.forms['editForm'].elements['dept_status'].value={{$data->emp_department_status}}";

</script>
        @endsection