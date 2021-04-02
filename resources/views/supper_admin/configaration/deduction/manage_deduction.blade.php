@extends('supper_admin.master')

@section('title','Manage Deduction|R-PMS')

@section('x')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Deduction<small>Info</small></h2>
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
                        <div>                        
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
                         <!-- Add Modal -->
                            <div align='right'>
                                    <button type="button" class="btn btn-success btn-info" data-toggle="modal" data-target="#myModal">Add Deduction</button>
                                </div>

                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Create <small>Deduction</small></h4>
                                    
                                    </div>
                                    <div class="modal-body">

                                      <div class=''>
                                      {!! Form::open(['url'=>'supper/admin/master/deduction/save','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                                              <!-- <span class="section">Deduction Info</span> -->
                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deduction_name">Deduction Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input  
                                                        id="deduction_name" 
                                                        data-validate-length-range="6" 
                                                        data-validate-words="2" 
                                                        name="deduction_name" placeholder=""
                                                          
                                                        type="text"
                                                        value="{{ old('deduction_name') }}"
                                                          autofocus
                                                          class="form-control{{ $errors->has('deduction_name') ? ' is-invalid' : '' }}" 
                                                        >
                                                        @if ($errors->has('deduction_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong style="color:red">{{ $errors->first('deduction_name') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Deduction Status</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <select name="deduction_status" class="form-control">
                                                            <option value="null">Select Deduction Status</option>
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
                                      {!! Form::open(['url'=>'supper/admin/master/deduction/update','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}  
                                             @CSRF
                                              <!-- <span class="section">Deduction Info</span> -->
                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_de">Deduction Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input  
                                                        id="name_de"  name="deduction_name"  
                                                        type="text" class="form-control" 
                                                        >
                                                        <input  
                                                        id="id_de"  name="id_de"  
                                                        type="hidden" class="form-control" 
                                                        >
                                                      
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Deduction Status</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <select name="deduction_status" id="deduction_status" class="form-control">
                                                            <option value="null">Select Deduction Status</option>
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
                                <th>Deduction Name</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>


                            <tbody>
                            <?php $i=1;?>
                            @foreach($data as $deduction)
                                <tr class="even pointer">
                                <td class="center "><?php echo $i; ?></td>
                                <td class="center ">{{$deduction ->deduction_name}}</td>
           
                                <td class="center ">{{$deduction ->deduction_status == 'Active'?'Active':'Inactive'}}</td>
                                <td>
                                @if ($deduction->deduction_status == 'Active')
                                    
                                    <a href="{{url('supper/admin/master/deduction/deactive/'.$deduction ->deduction_id)}}" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-arrow-down">De-active</span> 

                                    </a> 
                                    @else
                                    <a href="{{url('supper/admin/master/deduction/active/'.$deduction ->deduction_id)}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-arrow-up">Active  </span> 
                                    </a>
                                    
                                    @endif


                                    <!-- {{url('/wp-admin/master/manufacture/edit/'.$deduction ->deduction_id)}} -->
                                    <a href="#"
                                       id= "{{$deduction ->deduction_id}}"
                                       class="btn btn-success edit_data">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a> 
                                   
                                    <a href="{{url('supper/admin/master/deduction/delete/'.$deduction ->deduction_id)}}" class="btn btn-danger"  onclick="return one_delete();">
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
              var de_id = $(this).attr("id");  

              // alert (de_id);
             //  console.log(de_id); 

                $.ajax({  
                         url :"{{url('supper/admin/master/deduction/edit/.')}}"+'/'+de_id,    
                         method:"get",
                       //  dataType:"text",  
                         data:{
                              deduction_id:de_id},  
                  
                      success:function(data){  
                      //  console.log (data); 
                      //  console.log (data[0].deduction_id);
                      //  console.log (data[0].deduction_name);
                      //  console.log (data[0].deduction_status); 
                          
                           var d_id = data[0].deduction_id ;
                           var name = data[0].deduction_name ;
                           var status = data[0].deduction_status ;
                         //   alert (name);
                         //   alert (status);
                      $('#id_de').val(d_id);
                      $('#name_de').val(name);
                      $('#deduction_status').val(status);
                       
                       $('#edit_data_Modal').modal('show');
                        
                    
                            
                        }  
                   });  

            });
       });
</script> 
 

             
@endsection