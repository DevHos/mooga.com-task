@extends('layouts.app')

@section('content')

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 triangle-tabs no-border">
	<ul class="nav nav-tabs nav-justified zero-right-padding " role="tablist">
	    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">ابحث في مجتمع موجة</a></li>
	    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab"  data-toggle="tab">ابحث في المشروعات</a></li>
	</ul>
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane " id="tab1">
	        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm grey btm-mrg-sm">
	            <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12 def-padding left-border">
	                <h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">                                أبحث عن خبرات</span></h2>
	                <form class="cust-form">
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <select class="form-control">
	                                <option>استشاري في مجال</option>
	                                <option></option>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <input type="text" class="form-control" id="" placeholder="أحتاج منتج أوخدمة">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-4 control-label">أحتاج وكيل في</label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="" placeholder="">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-4 control-label">أحتاج مستثمر </label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="" placeholder="">
	                        </div>
	                    </div>
	                    <button type="submit" class="btn orange-btn">إبحث</button>
	                </form>
	            </div>
	            <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12 def-padding left-border">
	                <h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">                                أبحث عن خبرات</span></h2>

	                <form class="cust-form">
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <select class="form-control">
	                                <option>استشاري في مجال</option>
	                                <option></option>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <input type="text" class="form-control" id="" placeholder="أحتاج منتج أوخدمة">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-4 control-label">أحتاج وكيل في</label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="" placeholder="">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-4 control-label">أحتاج مستثمر </label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="" placeholder="">
	                        </div>
	                    </div>
	                    <button type="submit" class="btn orange-btn">إبحث</button>
	                </form>
	            </div>
	            <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12 def-padding">
	                <p class="black-font sm-font text-center">
	                    إقترح لي
	                </p>
	                <p class="grey-font md-font text-justify">
	                    الاسم (وجنبه عدد المشروعات اللي تحت المستخدم ده)، والصورة ، البلد   ويتكتب استشاري في مجالات كذا
	                </p>
	                <button type="submit" class="btn orange-btn">   إبدأ</button>
	            </div>
	        </div>
	        @foreach ($users as $user)
	        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm lg-btm-mrg">
	            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 left-border def-padding-sm" >
	                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
	                    <img src="images/project-owner.jpg" class="justified-img">
	                    <p class="black-font sm-font text-center bold">
	                        {{$user->name}}
	                    </p>
	                </div>
	                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
	                    <p class="sm-font text-right orange-font zero-bottom-margin">
	                        {{$user->job_title}}
	                    </p>
	                    <p class="md-font text-right grey-font zero-bottom-margin">
	                        المشروعات :  {{$user->projects->count()}}
	                    </p>
	                    <a href="mailto:{{$user->email}}" class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
	                    <a href="tel:{{$user->phone}}" class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
	                </div>
	            </div>
	            <div class="left-btns-cont-bottom"><a href="#" class="btn white-btn md-font text-center border-btn">المزيد ...</a></div>
	        </div><!--end single item-->
	        @endforeach
	    </div>
	    <div role="tabpanel" class="tab-pane active" id="tab2">
	        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm grey btm-mrg-sm">
	            <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12 def-padding left-border ">
	                <h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">تصنيفات البحث</span></h2>
	                <form class="cust-form col-md-10 col-lg-offset-2 col-md-10 col-lg-offset-2 ">
	                    <div class="form-group">
	                        <label for="" class="col-sm-3 control-label">ابحث عن </label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" name="search" placeholder="مصنع">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-3 control-label">في دولة</label>
	                        <div class="col-sm-8">
	                            <select name="project_country" class="form-control select2-multi">
	                            	@foreach($project_countries as $country)
	                            	<option value="{{$country}}">{{$country}}</option>
	                            	@endforeach
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="" class="col-sm-3 control-label">المرحلة</label>
	                        <div class="col-sm-8">
	                            <select name="project_status" class="form-control select2-multi">
	                            	@foreach($project_status as $status)
	                            	<option value="{{$status}}">{{$status}}</option>
	                            	@endforeach
	                            </select>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-9">
	                            <label for="" class="col-sm-3 control-label">المشروع يحتاج </label>
	                            @foreach($project_needs as $need)
	                            <label class="checkbox-inline">
	                                <input type="checkbox" value="{{$need}}">{{$need}}
	                            </label>
	                            @endforeach
	                        </div>
	                    </div>
	                    <div class="col-sm-8 col-sm-offset-4">
	                        <button type="submit" class="btn orange-btn">إبحث</button>
	                    </div>
	                </form>
	            </div>
	            <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 def-padding">
	                <p class="black-font sm-font text-center">
	                    إقترح لي
	                </p>
	                <p class="grey-font md-font text-justify">
	                    الاسم (وجنبه عدد المشروعات اللي تحت المستخدم ده)، والصورة ، البلد   ويتكتب استشاري في مجالات كذا
	                </p>
	                <button type="submit" class="btn orange-btn">   إبدأ</button>
	            </div>
	        </div>
	        @foreach($projects as $project)
	        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm lg-btm-mrg">
	            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 left-border def-padding-sm" >
	                <p class="black-font sm-font text-right bold">
	                    {{$project->name}}
	                </p>
	                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
	                    <img src="{{asset($project->project_img)}}" class="justified-img">
	                </div>
	                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
	                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
	                        <p class="md-font  orange-font zero-bottom-margin cst-right-alignment">المشروع:  </p>
	                        <p class="md-font grey-font zero-bottom-margin">{{$project->project_status}}</p>
	                    </div>
	                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
	                        <p class="md-font  orange-font zero-bottom-margin cst-right-alignment">الدولة: </p>
	                        <p class="md-font  grey-font zero-bottom-margin ">{{$project->project_country}}</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 left-border def-padding-sm">
	                <p class="md-font text-right grey-font zero-bottom-margin sm-top-padding">
	                    {{str_limit($project->description, 300)}}
	                </p>
	            </div>
	            <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12  def-padding-sm" >
	                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
	                    <p class="black-font sm-font text-center bold">
	                        مالك المشروع
	                    </p>
	                    <img src="images/project-owner.jpg" class="justified-img">
	                    <p class="black-font sm-font text-center bold zero-bottom-margin">
	                        {{$project->user->name}}
	                    </p>
	                    <div class="abs-btn cst">
	                        <a href="mailto:{{$project->user->email}}" class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
	                        <a href="tel:{{$project->user->phone}}"class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
	                    </div>
	                </div>
	            </div>
	            <div class="left-btns-cont-bottom center-button"><a href="{{route('project.show', $project->slug)}}" class="btn white-btn md-font text-center border-btn">المزيد ...</a></div>
	        </div><!--end single item-->
	        @endforeach

	    </div>
	</div>
</div>

@endsection