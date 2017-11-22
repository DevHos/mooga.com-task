@extends('layouts.app')

@section('content')
<div class="col-lg-12 col-xs-12 col-md-12 col-xs-12 def-padding">
    <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
        <h2 class="full-lines sm-font"><span class="blue-font">اضف مشروع جديد</span></h2>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">
                    <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 center-table">
						<form action="{{route('projects.store')}}" class="login-form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						    {{ csrf_field() }}
						    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <label class=" control-label md-font bold black-font">اسم المشروع  (مطلوب) </label>
                                <input type="text" class="form-control error" id="name" name="name" placeholder="" required>
                                <label for="name"><span id="name-error" class="error">برجاء ادخل على الاقل 6 احرف.</span></label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label class="control-label md-font bold black-font">نوع المشروع (مطلوب)</label>
                                <label for="project_type"></label>
                                <select class="select2-multi form-control" name="project_type" required>
                                	@foreach($project_types as $project_type)
                                		<option value="{{$project_type}}">{{$project_type}}</option>
                                	@endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="project_field" class=" control-label md-font bold black-font">مجال عمل المشروع (مطلوب)</label>
                                <select class="select2-multi form-control" name="project_field" required>
                                	@foreach($project_fields as $project_field)
                                		<option value="{{$project_field}}">{{$project_field}}</option>
                                	@endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <label class=" control-label md-font bold black-font">وصف المشروع   (مطلوب) </label>
                                <textarea type="text" class="form-control error" id="description" name="description" placeholder="" required></textarea>
                                <label for="description"><span id="description-error" class="error">برجاء ادخل على الاقل 50 احرف.</span></label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12 pull-right">
                                <label class=" control-label md-font bold black-font">حالة المشروع (مطلوب) </label><label for="stage"></label>
                                <select class="select2-multi form-control" name="project_status" required>
                                	@foreach($project_status as $status)
                                		<option value="{{$status}}">{{$status}}</option>
                                	@endforeach
                                </select>

                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12 pull-right">
	                            <label class=" control-label md-font bold black-font">الدولة  (مطلوب) </label><label for="country"></label>
	                            <select class="select2-multi form-control" name="project_country" required>
                                	@foreach($project_countries as $project_country)
                                		<option value="{{$project_country}}">{{$project_country}}</option>
                                	@endforeach
                                </select>
	                        </div>
	                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
	                            <label for="needpartner" class="control-label md-font bold black-font">احتياج المشروع لـ:  (مطلوب)</label>
	                            <select class="select2-multi form-control" name="project_needs[]" multiple required>
	                            	@foreach($project_needs as $project_need)
                                		<option value="{{$project_need}}">{{$project_need}}</option>
                                	@endforeach
	                            </select>
	                        </div>
	                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <label class=" control-label md-font bold black-font">المبلغ المطلوب تقريباً (مطلوب) </label>
                                <input type="number" id="budget" name="budget" placeholder="" class="form-control error" required>
                                <label for="budget"></label>
                            </div>
                            <div class="form-group">
                                <label for="closedescription" class="control-label md-font bold black-font">صورة المشروع</label>
                                <input type="file" name="project_img" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" id="project_img">
                            </div>
						    <div class="form-group">
						        <input type="submit" class="btn orange-btn" value="اضافة مشروع جديد">
						    </div>
						</form>

                        <div class="alert alert-error form-group">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection