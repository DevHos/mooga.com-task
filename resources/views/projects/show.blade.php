@extends('layouts.app')

@section('content')

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner">
    <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
        <h2 class="full-lines sm-font"><span class="blue-font">{{$project->name}}</span></h2>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-xs-6 col-sm-6">
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <img src="images/img-part-1.jpg" class="">
                            <a class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
                            <a class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 def-padding zero-top-padding">
                            <p class="sm-font black-font">
                                {{$project->user->name}}
                            </p>
                            <p class="md-font orange-font">{{$project->user->job_title}}</p>
                            <p class="md-font grey-font">البلد : {{$project->project_country}}</p>
                            <p class="md-font grey-font">نوع المشروع :  {{$project->project_type}}</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                        <p class="text-right grey-font md-font">مقدمة :</p>
                        <p class="text-right grey-font md-font">
                            {{str_limit($project->description, 300)}}
                        </p>
                    </div>
                    <!---->
                </div>
                <div class="row">


                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding-sm round-corner" style="height: 192px;">
                            <div class="col-md-4 col-lg-4 col-xs-6 col-sm-6">
                                <p class="black-font bold">يحتاج إلى:</p>
                            </div>
                            <div class="col-md-8 col-lg-8 col-xs-6 col-sm-6">
                            	@foreach($project_needs as $need)
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                    <i class="green-tick"></i>
                                    <p class="blue-font sm-font"> {{$need}} </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm">
                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                <p class="orange-font sm-font text-right float-right">الدولة:</p>
                                <p class="grey-font sm-font text-right float-right">{{$project->project_country}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm" style="height: 120px">
                            <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 col-md-offset-2 col-lg-offset-2">
                                <div class="col-md-4 col-lg-4 col-xs-6 col-sm-6">
	                                <p class="black-font bold">حالة المشروع:</p>
	                            </div>
                                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                    <p class="orange-font md-font text-right float-right">{{$project->project_status}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <p class="grey-font md-font text-justify def-padding-sm">
                  	{{$project->description}}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection