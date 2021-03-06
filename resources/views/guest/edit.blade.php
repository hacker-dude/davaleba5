
@extends("layouts.main")

@section('content')

    <body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- preloader -->

    <div class="uc-mobile-menu-pusher">
    <div class="content-wrapper">
    <section id="header_section_wrapper" class="header_section_wrapper">
        <div class="container">
            <div class="header-section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left_section">
                                                <span class="date">
                                                    Sunday .
                                                </span>
                            <!-- Date -->
                                                <span class="time">
                                                    09 August . 2016
                                                </span>
                            <!-- Time -->
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                <!--Pinterest-->
                                <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            </div>
                            <!-- Top Social Section -->
                        </div>
                        <!-- Left Header Section -->
                    </div>
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="/"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                        </div>
                        <!-- Logo Section -->
                    </div>
                    <div class="col-md-4">
                        <div class="right_section">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li class="dropdown lang">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                            class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Bn</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Language Section -->

                            <ul class="nav-cta hidden-xs">
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                        class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head-search">
                                                <form role="form">
                                                    <!-- Input Group -->
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                               placeholder="Type Something"> <span class="input-group-btn">
                                                                                <button type="submit"
                                                                                        class="btn btn-primary">Search
                                                                                </button>
                                                                            </span></div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Search Section -->
                        </div>
                        <!-- Right Header Section -->
                    </div>
                </div>
            </div>
            <!-- Header Section -->
        <!-- .container -->
    </section>
    <!-- header_section_wrapper -->












    <div class="container" style="padding-top:30px">
        
        <form method="POST" action="{{ route('update') }}">
            @csrf
            <input type="hidden" name="id" value="{{$article->id}}">
            <input type="hidden" name="title" placeholder="title" value="{{$article->title}}">
            <h1>current title: {{$article->title}}</h1>
            <textarea class="form-control" name="title" placeholder="New Title"></textarea>
            <button type="submit" class="btn btn-submit red">Save</button>
        </form>

    </div>


@endsection()