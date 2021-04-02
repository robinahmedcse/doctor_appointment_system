@extends('supper_admin.master')

@section('title','Manage Allowance|R-PMS')

@section('x')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Allowance<small>Info</small></h2>
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
                    <div class="row">

                    <div class="col-sm-12">
                        <div class="massage">                        
                              @if(Session::get('fail'))
                                 <span class="invalid-feedback" role="alert">
                                      <strong style="color:red"> {{ session::get('fail') }} </strong>
                                  </span>
                               @endif

                               @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }} 
                                    </div>
                                @endif 
                                
                        </div>

                        <div class="container-fluid">
                            <div class="row">

                            <div align='right'>
                                 <button type="button" class="btn btn-success btn-info" data-toggle="modal" data-target="#myModal">Add Allowances</button>
                            </div>
                                                  <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Create <small>Allowance</small></h4>
                                
                                </div>
                                <div class="modal-body">

                                  <div class=''>
                                  {!! Form::open(['url'=>'supper/admin/master/allowance/save','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                                          <!-- <span class="section">Allowance Info</span> -->
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="allowance_name">Allowance Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input  
                                                    id="allowance_name" 
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
                                                        <option value="Inactive">Select Allowance Status</option>
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
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>

                                <!-- END row -->
                            </div>
                             <!-- END container-fluid -->
                        </div>




                     <!--  edit_data_Modal -->
                    <div class="container-fluid">
                         <div class="row">
                              <!-- Modal -->
                              <div class="modal fade" id="edit_data_Modal" role="dialog">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Edit <small>Deduction</small></h4>
                                    
                                    </div>
                                    <div class="modal-body">

                                      <div class=''>
                                      {!! Form::open(['url'=>'supper/admin/master/allowance/update','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                                             @CSRF
                                              <!-- <span class="section">Deduction Info</span> -->
                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="allow_name">Allowance Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input  
                                                        id="name_allow"  name="allow_name"  
                                                        type="text" class="form-control" 
                                                        >
                                                        <input  
                                                        id="allow_id"  name="allow_id"  
                                                        type="hidden" class="form-control" 
                                                        >
                                                      
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Allowance Status</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                      <select name="allow_status" id="allow_status" class="form-control">
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
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                             
                              <!-- END ROW -->
                          </div>
                          <!-- END container-fluid -->
                       </div>




                          <!-- end of col-sm-12 -->
                     </div>






                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <!-- <p class="text-muted font-13 m-b-30">
                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                          </p> -->
                      

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Allowance Name</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>


                            <tbody>
                            <?php $i=1;?>
                            @foreach($data as $allowance)
                                <tr class="even pointer">
                                <td class="center "><?php echo $i; ?></td>
                                <td class="center ">{{$allowance ->allowances_name}}</td>
           
                                <td class="center ">{{$allowance ->allowances_status == 'Active'?'Active':'De-active'}}</td>
                                <td>
                                @if ($allowance->allowances_status == 'Active')
                                    
                                    <a href="{{url('supper/admin/master/allowance/deactive/'.$allowance ->allowances_id)}}" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-arrow-down">De-active</span> 

                                    </a> 
                                    @else
                                    <a href="{{url('supper/admin/master/allowance/active/'.$allowance ->allowances_id)}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-arrow-up">Active  </span> 
                                    </a>
                                    
                                    @endif



                                    <a href="#" 
                                    id= "{{$allowance ->allowances_id}}"
                                        class="btn btn-success edit_data">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a> 
                                    
                                    <a href="{{url('supper/admin/master/allowance/delete/'.$allowance ->allowances_id)}}" class="btn btn-danger"  onclick="return one_delete();">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    
                                    
                                  </td>  
                               </tr>
                               
                               <?php $i++; ?>
                               @endforeach
                            </tbody>
                          </table>


                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>


              </div>  
        </div>  

</div>   


<script>  
      $(document).ready(function(){
          $(document).on('click', '.edit_data', function(){  
              var allow_id = $(this).attr("id");  
               alert (allow_id);
                $.ajax({  
                         url :"{{url('supper/admin/master/allowance/edit/.')}}"+'/'+allow_id,    
                         method:"get",
                        
                         data:{
                              id:allow_id},  
                  
                      success:function(data){  
                        console.log (data); 
                      //  console.log (data[0].deduction_id);
                      //  console.log (data[0].deduction_name);
                      //  console.log (data[0].deduction_status); 
                          
                           var a_id = data[0].allowances_id ;
                           var name = data[0].allowances_name ;
                           var status = data[0].allowances_status ;
                           //  alert (name);
                         //    alert (status);
                     $('#allow_id').val(a_id);
                     $('#name_allow').val(name);
                      $('#allow_status').val(status);
                       
                       $('#edit_data_Modal').modal('show');
                           
                        }  
                   });  
 
            });
       });
</script> 
 
             
@endsection