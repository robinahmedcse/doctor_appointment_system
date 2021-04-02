@extends('supper_admin.master')
@section('title','Manage Designation|R-PMS')
@section('x')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Designation<small>Info</small></h2>
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
                        <div class="card-box table-responsive">
                          <!-- <p class="text-muted font-13 m-b-30">
                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                          </p> -->
                          <div>
                              @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }} 
                                    </div>
                                @endif 
                                
                           
                              </div> 

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>designation Name</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>


                            <tbody>
                            <?php $i=1;?>
                            @foreach($data as $designation)
                                <tr class="even pointer">
                                <td class="center "><?php echo $i; ?></td>
                                <td class="center ">{{$designation ->emp_designation_name}}</td>
         
                                <td class="center ">{{$designation ->emp_designation_status == 1?'Active':'De-active'}}</td>
                                <td>
                                @if ($designation->emp_designation_status == 1)
                                    
                                    <a href="{{url('/wp-admin/master/manufacture/unpublished/'.$designation ->emp_designation_id)}}" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-arrow-down">De-active</span> 

                                    </a> 
                                    @else
                                    <a href="{{url('wp-admin/master/manufacture/published/'.$designation ->emp_designation_id)}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-arrow-up">Active  </span> 
                                    </a>
                                    
                                    @endif



                                    <a href="{{url('/wp-admin/master/manufacture/edit/'.$designation ->emp_designation_id)}}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a> 
                                    
                                    <a href="{{url('wp-admin/master/manufacture/delete/'.$designation ->emp_designation_id)}}" class="btn btn-danger"  onclick="return one_delete();">
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



             
@endsection