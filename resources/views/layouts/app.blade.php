<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/select2.full.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mooga') }}</title>
    </head>
    <body>
        <header>
            <div class="top-header">
                <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="social-media header-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <p class="text-left white-font md-font half-padding table-left">
                            <a href="" class="md-font white-link"> إتصل بنا</a>
                            -
                            <a href="" class="md-font white-link"> من نحن</a>
                        </p>
                       
                        @if (Auth::guest())
                            <p class="text-right white-font md-font half-padding table-right">
                                <a href="{{route('login')}}" class="md-font white-link text-right right"><i class="lock-cust"></i>تسجيل الدخول</a>
                            </p>
                            <p class="text-right white-font md-font half-padding table-right">
                                <a href="{{route('register')}}" class="md-font white-link text-right right"><i class="lock-cust"></i>حساب جديد</a>
                            </p>
                        @else
                            <p class="text-right white-font md-font half-padding table-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    تسجيل خروج
                                </a>
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 round-corner no-overflow">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand main-logo" href="#"></a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav alg-left">
                                    <li class="active"><a href="#">الرئيسية <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">مشروعات  </a></li>
                                    <li><a href="#"> تصفيات </a></li>
                                    <li><a href="#">عروض وفرص </a></li>
                                    <li><a href="#">لمقالات</a></li>
                                    <li class="search-link"><a href="#"><i class="fa fa-search"></i></a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div><!--new navigation-->

        </header>
        <div class="container">
            <div class="row">
                @if(Auth::user())
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner internal-sub-header btm-mrg-sm grey">
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 def-padding-sm">
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <img src="images/logged-user.jpg" class="round-corner justified-img">
                        </div>
                        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 ">
                            <p class="orange-font md-lg-font text-right">{{auth()->user()->name}}</p>
                            <p class="grey-font md-font text-right">{{auth()->user()->job_title}}</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 def-padding-sm justified-div">
                        <a href="{{route('projects.create')}}" class="header-btn md-font grey-font"><i class="btn-ico case"></i>اضف مشروع جديد</a>
                        <a href="{{route('projects.all')}}" class="header-btn md-font grey-font"><i class="btn-ico case"><span class="notification green">{{auth()->user()->projects->count()}}</span></i>كل المشروعات</a>
                    </div>
                </div>
                @endif
                @if (session('announce'))
                    <div class="alert alert-success announce">
                       <i class="fa fa-check"></i> {{ session('announce') }}
                    </div>
                @endif
                <!-- Here's where the content go -->
                @yield('content')
            </div>
        </div>
        <div class="container">
            <div class="row footer-dark round-corner">
                <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 def-padding">
                    <p class="md-font white-font">
                        2017 -  كامل الحقوق محفوظة  لشركةموجة
                        <br>
                        <a href="" class="md-font white-link">سياسة الخصوصية</a>
                        -
                        <a href="" class="md-font white-link"> بنود الإستخدام</a>
                    </p>
                    <ul class="social-media">
                        <li><a href="#"><i class="fa fa-facebook round-corner"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter round-corner"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin round-corner"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube round-corner"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss round-corner"></i></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 def-padding">
                    <ul class="footer-nav">
                        <li><a class="md-font white-link" href=""> ريادة أعـمال  </a></li>
                        <li><a class="md-font white-link" href=""> تســويق     </a></li>
                        <li><a class="md-font white-link" href=""> مبيــعات       </a></li>
                        <li><a class="md-font white-link" href=""> إدارة أعــمال  </a></li>
                        <li><a class="md-font white-link" href=""> قـصص النجـاح</a></li>
                    </ul>
                    <ul class="footer-nav">
                        <li><a class="md-font white-link" href=""> الصفحة الرئيسة</a></li>
                        <li><a class="md-font white-link" href="">من نحن</a></li>
                        <li><a class="md-font white-link" href="">إتصل بنا</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
