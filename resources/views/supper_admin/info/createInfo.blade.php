@extends('admin.master')
@section('title','Add Information')


@section('x')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>তথ্য <small>সংযুক্ত করুন</small></h2>
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

                        {!! Form::open(['url'=>'admin/save/infos','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}    
                        <!-- Category name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="applier_id">আবেদনকারী আইডি <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('applier_id',null,['class'=>'form-control','required','placeholder'=>'আবেদনকারী আইডি'])}}
                                <span class="text-danger">{{$errors->has('applier_id')? $errors->first('applier_id'):''}}</span>
                            </div>	
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="applier_name">আবেদনকারী নাম  <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('applier_name',null,['class'=>'form-control','required','placeholder'=>'আবেদনকারী নাম '])}}
                                <span class="text-danger">{{$errors->has('applier_name')? $errors->first('applier_name'):''}}</span>
                            </div>	
                        </div> 


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">আবেদনের ধরন</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">   
                                <select name="apply_type" class="form-control" required>
                                    <option value="null">আবেদনের ধরন নিধারন করুন  </option>
                                    <option value="সি এস">সি এস </option>
                                    <option value="আর এস">আর এস </option>
                                    <option value="এস এ ">এস এ </option>
                                    <option value="বি এস">বি এস </option>
                                    <option value="দিয়ারা">দিয়ারা</option>
                                    <option value="পেটি">পেটি </option>
                                </select>
                            </div>
                        </div>   


<!--                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apply_date">আবেদনের তারিখ<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('apply_date',null,['class'=>'form-control','required','placeholder'=>'১ জানুয়ারী ২০১৯'])}}
                                <span class="text-danger">{{$errors->has('apply_date')? $errors->first('apply_date'):''}}</span>
                            </div>	
                        </div> 
                        -->
                        
                        <div class="form-group row">
                            <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12" >আবেদনের তারিখ<span class="required">*</span></label>
                            <div class="col-md-8" >
                                <div class="col-md-4 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control "  required  name="a_day">
                                                <option value="0" selected disabled>দিন নির্বাচন করুন</option>
                                                <option value="০১">০১</option>
                                                <option value="০২">০২</option>
                                                <option value="০৩">০৩</option>
                                                <option value="০৪">০৪</option>
                                                <option value="০৫">০৫</option>
                                                <option value="০৬">০৬</option>
                                                <option value="০৭">০৭</option>
                                                <option value="০৮">০৮</option>
                                                <option value="০৯">০৯</option>
                                                <option value="১০">১০</option>
                                                <option value="১১">১১</option>
                                                <option value="১২">১২</option>
                                                <option value="১৩">১৩</option>
                                                <option value="১৪">১৪</option>
                                                <option value="১৫">১৫</option>
                                                <option value="১৬">১৬</option>
                                                <option value="১৭">১৭</option>
                                                <option value="১৮">১৮</option>
                                                <option value="১৯">১৯</option>
                                                <option value="২০">২০</option>
                                                <option value="২১">২১</option>
                                                <option value="২২">২২</option>
                                                <option value="২৩">২৩</option>
                                                <option value="২৪">২৪</option>
                                                <option value="২৫">২৫</option>
                                                <option value="২৬">২৬</option>
                                                <option value="২৭">২৭</option>
                                                <option value="২৮">২৮</option>
                                                <option value="২৯">২৯</option>
                                                <option value="৩০">৩০</option>
                                                <option value="৩১">৩১</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control "  required  name="a_month">
                                                <option value="0" selected disabled>মাস নির্বাচন করুন</option>
                                                <option value="জানুয়ারি">জানুয়ারি</option>
                                                <option value="ফেব্রুয়ারি">ফেব্রুয়ারি</option>
                                                <option value="মার্চ">মার্চ</option>
                                                <option value="এপ্রিল">এপ্রিল</option>
                                                <option value="মে">মে</option>
                                                <option value="জুন">জুন</option>
                                                <option value="জুলাই">জুলাই</option>
                                                <option value="আগস্ট">আগস্ট</option>
                                                <option value="সেপ্টেম্বর">সেপ্টেম্বর</option>
                                                <option value="অক্টোবর">অক্টোবর</option>
                                                <option value="নভেম্বর">নভেম্বর</option>
                                                <option value="ডিসেম্বর"> ডিসেম্বর</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control "  required  name="a_year">
                                                <option value="0" selected disabled>সন নির্বাচন করুন</option>
                                                <option value="২০১৮">২০১৮</option>
                                                <option value="২০১৯">২০১৯</option>
                                                <option value="২০২০">২০২০</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                
                        
                        
                        
                        
                        
                        
                        
                        
<!--                        
                        

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="delivary_date">প্রদানের তারিখ<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('delivary_date',null,['class'=>'form-control','required','placeholder'=>'১৫ জানুয়ারী ২০১৯ '])}}
                                <span class="text-danger">{{$errors->has('delivary_date')? $errors->first('delivary_date'):''}}</span>
                            </div>	
                        </div> 
                        
                        -->
                        
                                            <div class="form-group row">
                            <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12" >প্রদানের তারিখ<span class="required">*</span></label>
                            <div class="col-md-8" >
                                <div class="col-md-4 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control " required  name="p_day">
                                                <option value="0" selected disabled>দিন নির্বাচন করুন</option>
                                                <option value="০১">০১</option>
                                                <option value="০২">০২</option>
                                                <option value="0৩">০৩</option>
                                                <option value="০৬">০৪</option>
                                                <option value="০৫">০৫</option>
                                                <option value="০৬">০৬</option>
                                                <option value="০৭">০৭</option>
                                                <option value="০৮">০৮</option>
                                                <option value="০৯">০৯</option>
                                                <option value="১০">১০</option>
                                                <option value="১১">১১</option>
                                                <option value="১২">১২</option>
                                                <option value="১৩">১৩</option>
                                                <option value="১৪">১৪</option>
                                                <option value="১৫">১৫</option>
                                                <option value="১৬">১৬</option>
                                                <option value="১৭">১৭</option>
                                                <option value="১৮">১৮</option>
                                                <option value="১৯">১৯</option>
                                                <option value="২০">২০</option>
                                                <option value="২১">২১</option>
                                                <option value="২২">২২</option>
                                                <option value="২৩">২৩</option>
                                                <option value="২৪">২৪</option>
                                                <option value="২৫">২৫</option>
                                                <option value="২৬">২৬</option>
                                                <option value="২৭">২৭</option>
                                                <option value="২৮">২৮</option>
                                                <option value="২৯">২৯</option>
                                                <option value="৩০">৩০</option>
                                                <option value="৩১">৩১</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control "  required name="p_month">
                                                <option value="0" selected disabled>মাস নির্বাচন করুন</option>
                                                <option value="জানুয়ারি">জানুয়ারি</option>
                                                <option value="ফেব্রুয়ারি">ফেব্রুয়ারি</option>
                                                <option value="মার্চ">মার্চ</option>
                                                <option value="এপ্রিল">এপ্রিল</option>
                                                <option value="মে">মে</option>
                                                <option value="জুন">জুন</option>
                                                <option value="জুলাই">জুলাই</option>
                                                <option value="আগস্ট">আগস্ট</option>
                                                <option value="সেপ্টেম্বর">সেপ্টেম্বর</option>
                                                <option value="অক্টোবর">অক্টোবর</option>
                                                <option value="নভেম্বর">নভেম্বর</option>
                                                <option value="ডিসেম্বর"> ডিসেম্বর</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 " style="background-color: none; display: inline-block;">
                                    <div class="form-group row" >
                                        <div class="col-md-12">
                                            <select class="form-control " required  name="p_year">
                                                <option value="0" selected disabled>সন নির্বাচন করুন</option>
                                                <option value="২০১৮">২০১৮</option>
                                                <option value="২০১৯">২০১৯</option>
                                                <option value="২০২০">২০২০</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">উপজেলা</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">   
                                <select name="upozela" class="form-control" required>
                                    <option value="null">উপজেলা নিধারন করুন  </option>
                                    <option value="টাঙ্গাইল সদর ">টাঙ্গাইল সদর </option>
                                    <option value="কালিহাতি ">কালিহাতি  </option>
                                    <option value="ঘাটাইল ">ঘাটাইল  </option>
                                    <option value="বাসাইল ">বাসাইল </option>
                                    <option value="গোপালপুর ">গোপালপুর </option>
                                    <option value="মির্জাপুর"> মির্জাপুর</option>
                                    <option value="ভূঞাপুর">ভূঞাপুর </option>
                                    <option value="নাগরপুর">নাগরপুর </option>
                                    <option value="মধুপুর">মধুপুর </option>
                                    <option value="সখিপুর">সখিপুর </option>
                                    <option value="দেলদুয়ার"> দেলদুয়ার</option>
                                    <option value="ধনবাড়ী"> ধনবাড়ী</option>
                                </select>
                            </div>




                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mouza">মৌজা<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('mouza',null,['class'=>'form-control','required','placeholder'=>'মৌজা'])}}
                                <span class="text-danger">{{$errors->has('mouza')? $errors->first('mouza'):''}}</span>
                            </div>	
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jel_no">জে .এল .নং <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('jel_no',null,['class'=>'form-control','required','placeholder'=>'জে .এল .নং .'])}}
                                <span class="text-danger">{{$errors->has('jel_no')? $errors->first('jel_no'):''}}</span>
                            </div>	
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="khotian_no">খতিয়ান নং<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{Form::text('khotian_no',null,['class'=>'form-control','required','placeholder'=>'খতিয়ান নং '])}}
                                <span class="text-danger">{{$errors->has('khotian_no')? $errors->first('khotian_no'):''}}</span>
                            </div>	
                        </div> 


                        <br />

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">আবেদনের অবস্থা</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <select name="apply_status" class="form-control" required>
                                    <option value="null">নিধারন করুন আবেদনের অবস্থা </option>
                                    <option value="1">
                                        ডাকযোগে প্রেরিত</option>
                                    <option value="0">প্রক্রিয়াধীন রয়েছে</option>
                                </select>
                            </div>
                        </div>    




                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                                <input type="submit" name='btn' value="প্রেরন" class="btn btn-success">
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection