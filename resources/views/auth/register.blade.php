@extends('layouts.app')

@section('content')
<div class="col-lg-12 col-xs-12 col-md-12 col-xs-12 def-padding">
    <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
        <h2 class="full-lines sm-font"><span class="blue-font">حساب جديد</span></h2>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">
                    <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 center-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">حساب جديد</div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">الاسم</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                                        <label for="job_title" class="col-md-4 control-label">الوظيفة</label>

                                        <div class="col-md-6">
                                            <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required autofocus>

                                            @if ($errors->has('job_title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('job_title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-md-4 control-label">التليفون</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">الايميل</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">كلمة السر</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">تأكيد كلمة السر</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                تسجيل حساب جديد
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
