@extends('admin.master')

@section('title','Manage Information')



@section('x')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>সকল  <small>তথ্য</small></h3>
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
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                       <h2>সব্বমোট {{ $all_infos->total()}} টি  তথ্য বিদ্যমান<small></small></h2> 
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
                    <div class="">
                        <h4 class="tex text-center text-success">
                            <?php
                            echo Session::get('message');
                            session::put('message', '');
                            ?>
                        </h4>
                        <br><br>
                    </div> 
                    <div class="x_content">
                        <div class="table-responsive">
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>আবেদনকারী আইডি</th>
                                    <th>আবেদনকারীর নাম</th>
                                    <th>আবেদনের ধরন</th>
                                    <th>আবেদনের তারিখ</th>
                                    <th>প্রদানের তারিখ</th>
                                    <th>উপজেলা </th>
                                    <th>মৌজা </th>
                                    <th>জে এল নং</th>
                                    <th>খতিয়ান নং </th>
                                    <th>আবেদনের অবস্থা</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_infos as $info)
                                <tr>
                                    <th scope="row">{{$info->infos_id}}</th>
                                    <td>{{$info->applier_id}}</td>
                                    <td>{{$info->applier_name}}</td>
                                    <td>{{$info->apply_type}}</td>
                                    <td>{{$info->apply_date}}</td>
                                    <td>{{$info->delivary_date}}</td>
                                    <td>{{$info->upozela}}</td>
                                    <td>{{$info->mouza}}</td> 
                                    <td>{{$info->jel_no}}</td>
                                    <td>{{$info->khotian_no}}</td>



                                    <td>{{$info->apply_status ==1?'ডাকযোগে প্রেরিত':'প্রক্রিয়াধীন রয়েছে' }}</td>
                                    <td>

                                        <?php if ($info->apply_status == 1) { ?>
                                            <a href="{{URL::to('admin/infos/unpublished/'.$info ->infos_id)}}" class="btn btn-warning">
                                                <span class="glyphicon glyphicon-arrow-down"></span> প্রক্রিয়া 
                                            </a> 
                                        <?php } else { ?>
                                            <a href="{{URL::to('admin/infos/published/'.$info ->infos_id)}}" class="btn btn-info">
                                                <span class="glyphicon glyphicon-arrow-up"></span> ডাকযোগে  
                                            </a>
                                        <?php } ?>

                                        <a href="{{URL::to('admin/infos/edit/'.$info ->infos_id)}}" class="btn btn-success">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a> 

                                        <a href="{{URL::to('admin/infos/delete/'.$info ->infos_id)}}" class="btn btn-danger"  onclick="return one_delete();">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>


                                    </td>  
                                </tr> 
                                @endforeach()
                            </tbody>
                            
                        </table>
                        </div>
{{ $all_infos->links() }}
                    </div>
                </div>
            </div>




            <div class="clearfix"></div>
            
                 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                       <h2>সব্বমোট  টি  তথ্য বিদ্যমান<small></small></h2> 
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
                        <div class="table-responsive">
                            <table id="info_table" class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>আবেদনকারী আইডি</th>
                                    <th>আবেদনকারীর নাম</th>
                                    <th>আবেদনের ধরন</th>
                                    <th>আবেদনের তারিখ</th>
                                    <th>প্রদানের তারিখ</th>
                                    <th>উপজেলা </th>
                                    <th>মৌজা </th>
                                    <th>জে এল নং</th>
                                    <th>খতিয়ান নং </th>
                                    <th>আবেদনের অবস্থা</th>
                                    <th> </th>
                                </tr>
                            </thead>
               
                            
                        </table>
                        </div>
 
                    </div>
                </div>
            </div>
              <div class="clearfix"></div>



        </div>
    </div>
</div>

<script>

$(document).ready(function(){
    
    alert('ssdsd');
    
});

</script>




    
 <script type="text/javascript">
$(document).ready(function() {
     $('#info_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('info.data') }}",
        "columns":[
            { "data": "infos_id" },
             { "data": "applier_id" },
              { "data": "applier_name" },
               { "data": "apply_type" },
                { "data": "apply_date" },
                 { "data": "delivary_date" },
                  { "data": "upozela" },
                   { "data": "mouza" },
                    { "data": "jel_no" },
                     { "data": "khotian_no" },
                      { "data": "apply_status" },
                      
                
                
          
          
        ]
     });
});
</script>

@endsection