@extends('admin.master')

@section('title','Manage Information')



@section('x')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                       <h4 class="tex text-center text-success">
                            <?php
                            echo Session::get('message');
                            session::put('message', '');
                            ?>
                        </h4>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
       
                    <div class="alert" >
                        <div class="alert alert-success col-md-6" role="alert">
                            <h5>   এই রং এর অর্থ হল পর্চা ডাকযোগে প্রেরিত হয়েছে </h5>
                        </div>

                        <div class="alert alert-warning col-md-6" role="alert">
                           <h5>   এই রং এর অর্থ হল পর্চা প্রক্রিয়াধীন রয়েছে </h5>
                        </div>
                    </div>
                    
                    
                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="info_table" class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>আবেদনকারী আইডি</th>
                                    <th>আবেদনকারীর নাম</th>
                                    <th>আবেদনের ধরন</th>
                                    <th>আবেদনের তারিখ</th>
                                    <th>প্রদানের তারিখ</th>
                                    <th>উপজেলা </th>
                                    <th>মৌজা </th>
                                    <th> </th>
                                </tr>
                            </thead>
                        </table>
                        </div>
 
                    </div>
                </div>
            </div>
              <div class="clearfix"></div>


              
                  <!-- Modal -->
                        <div class="modal fade" id="divisionModal" tabindex="-1" 
                             role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" >
                                    <form method="POST" id="division_form">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Division</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                             {{csrf_field()}}

                                            <span id="form_output"></span>
                                            
                                            
                                            <div class="form-group" id="input_1">
                                                <label for="">আবেদনের বর্তমান অবস্থা</label><p></p>
                                                <input type="text" class="form-control" id="status_n" name="status_n"   readonly="">

                                            </div>
                                            <br>
                                            
                  
                                            
                                            <h3 id="heading">আবেদনের অবস্থা পবিবর্তন করতে চাইলে</h3>

                                            <div class="form-group" id="select_1">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">নিধারন করুন পরিবর্তিত অবস্থা</label>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <select name="update_apply_status" class="form-control">
                                                        <option value="null" selected disabled >নিধারন করুন পরিবর্তিত অবস্থা</option>
                                                        <option value="1">ডাকযোগে প্রেরিত</option>
                                                        <option value="0">প্রক্রিয়াধীন রয়েছে</option>
                                                    </select>
                                                </div>
                                            </div>   
                                        </div>


                                        <div class="modal-footer">
                                            <input type="hidden" name="infos_id" id="infos_id" value="" />

                                            <input  type="hidden" name="button_action" id="button_action"  value="insert" >

                                            <input  type="submit" name="Submit" value="Add" id="action" class="btn btn-warning" >
                                          
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
           <!-- Modal --> 

        </div>
    </div>
</div>



<script type="text/javascript">
$(document).ready(function() {
    $('#info_table').DataTable({
       "processing": true,
       "serverSide": true,
       "ajax": "{{ route('info.data') }}",
       "columns":[
                        { "data": "applier_id" },
                        { "data": "applier_name" },
                        { "data": "apply_type" },
                        { "data": "apply_date" },
                        { "data": "delivary_date" },
                        { "data": "upozela" },
                        { "data": "mouza" },
                        { "data": "Action",  orderable:false, searchable: false },
                      ]
               });
        });
</script>


 


<script>
           $(document).on('click', '.published', function(){
                 var id = $(this).attr("id");
 
         
         $.ajax({
                    url:"{{route('info.getDataById')}}",
                    method:'get',
                    data:{
                              id_value:id
                    },
                    dataType:'json',
                    
                    success:function(data){
  
                         $('#status_n').val(data.apply_status);
                             $('#infos_id').val(id);
                             $('#divisionModal').modal('show');
                              $('#action').val('পরিবর্তন করুন');
                               $('.modal-title').text('সম্পাদন  করুন');
                               $('#button_action').val('update');
                    }  
             
             ///end ajax
         })
                
                });

</script>




<script>

  $('#division_form').on('submit',function(event){
                    event.preventDefault();
                        var form_data =$(this).serialize();
           
               $.ajax({
                   url:"{{  route('info.changeStatus')}}",
                   method:"POST",
                   data:form_data,
                   dataType:"json",
                   success:function(data){
         
                                    $('#form_output').html(data.success);
                                    $('#division_form')[0].reset();
                                    $('#action').hide();
                                           $('#input_1').hide();
                                                  $('#heading').hide();
                                                    $('#select_1').hide();
                                    $('.modal-title').text('সম্পাদন  করুন');
                                    $('#button_action').val('insert');
                                    $('#division_table').DataTable().ajax.reload();

          
                     
                     
                     
                      ///end success  
                   }
                   ///end ajax
               })
               
            });

</script>





 



<!--edit script-->

@endsection