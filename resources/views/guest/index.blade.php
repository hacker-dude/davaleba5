
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

    <section id="feature_news_section" class="feature_news_section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature_article_wrapper">
                        <div class="feature_article_img">
                            <img class="img-responsive top_static_article_img" src="assets/img/clickbait.jpg"
                                 alt="feature-top">
                        </div>
                        <!-- feature_article_img -->

                        <div class="feature_article_inner">
                            <div class="feature_article_title">
                                <h1><a href="{{ route('show',["id"=>$articles[0]->id]) }}" target="_self">{{$articles[0]->title}}</a></h1>
                            </div>
                            <!-- feature_article_title -->

                            <div class="feature_article_date"><a href="#" target="_self">id: {{$articles[0]->id}}</a>,{{$articles[0]->updated_at}}></div>
                            <!-- feature_article_date -->

                            <div class="feature_article_content">
                            
                            </div>
                            <!-- feature_article_content -->
                            <!-- article_social -->

                        </div>
                        <!-- feature_article_inner -->

                    </div>
                    <!-- feature_article_wrapper -->

                </div>
                <!-- col-md-7 -->
                <div class="widget"><h2>News</a></h2>
                </div>
                @foreach ($articles as $article)           
                    <div class="media">
                        <div class="media-left">
                            <a href="{{ route('show',["id"=>$article->id]) }}"><img class="media-object" src="assets/img/sponge.gif" alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="{{ route('show',["id"=>$article->id]) }}" target="_self">{{$article->title}}</a>
                            </h3> <span class="media-date">{{$article->updated_at}},  id: <a href="#">{{$article->id}}</a></span>

                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Row -->
        </div>
        <!-- container -->
    </section>
    <!-- Feature News Section -->

    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


    <div class="container" style="padding-top:30px">
        <a href="/admin">
            <button type="submit" class="btn btn-submit red">Go To Admin Page B)</
            
        </a>

    </div>


@endsection()