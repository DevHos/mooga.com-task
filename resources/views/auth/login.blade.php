@extends('layouts.app')

@section('content')
<div class="col-lg-12 col-xs-12 col-md-12 col-xs-12 def-padding">
    <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
        <h2 class="full-lines sm-font"><span class="blue-font">تسجيل دخول</span></h2>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">
                    <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 center-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">تسجيل دخول</div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">الايميل</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">كلمة المرور</label>

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
                                        <div class="col-md-6 col-md-offset-4 text-center">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                تسجيل دخول
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                هل نسيت كلمة السر؟
                                            </a>
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
