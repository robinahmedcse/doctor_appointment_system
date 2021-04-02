@extends('admin.master')
@section('title','Edit Information')


@section('x')

<?php
//var_dump($categoryById);
//die();
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> </h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 >তথ্য টি দেখানো হল<small></small></h2>
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


                        <br />

                        {!! Form::open(['name'=>'myForm','class'=>'form-horizontal form-label-left']) !!}    
                        <!-- Category name -->

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="applier_id">আবেদনকারী আইডি <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" readonly value="{{$infos_by_id->applier_id}}" class="form-control col-md-7 col-xs-12" >

                            </div>	
                        </div> 

                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="applier_name">আবেদনকারী নাম  <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$infos_by_id->applier_name}}" class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 


                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apply_type">আবেদনের ধরন <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->apply_type}}"  class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 

                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apply_date">আবেদনের তারিখ<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->apply_date}}" class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 

    
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="delivary_date">প্রদানের তারিখ<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->delivary_date}}" n class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 

     
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="upozela">উপজেলা<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->upozela}}"  class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 

   
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mouza">মৌজা<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->mouza}}"  class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 


                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jel_no">জে .এল .নং <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->jel_no}}" class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="khotian_no">খতিয়ান নং<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="text" value="{{$infos_by_id->khotian_no}}"  class="form-control col-md-7 col-xs-12" readonly>
                            </div>	
                        </div> 




                                   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">আবেদনের অবস্থা<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <?php   if( $infos_by_id->apply_status == 1){   ?>
                                
                                <input type="text" value="প্রদানের অপেক্ষায়"  class="form-control col-md-7 col-xs-12" readonly>
                                
                                <?php }else{?>
                                
                                <input type="text" value="প্রক্রিয়াধীন রয়েছে"  class="form-control col-md-7 col-xs-12" readonly>
                                
                                                <?php }?>
                            </div>	
                        </div> 

                        <div class="ln_solid"></div>
 
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.forms['myForm'].elements['apply_status'].value={{$infos_by_id->apply_status}};
</script>   

@endsection