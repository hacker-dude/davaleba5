@extends("layouts.main")

@section('content')
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
        </div>
        <!-- .container -->
    </section>
    <!-- header_section_wrapper -->

    <section id="entity_section" class="entity_section">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1><a href="#">{{$article->title}}</a></h1>
        </div>
        <!-- entity_title -->

        <div class="entity_meta"><a href="#" target="_self">{{$article->updated_at}}</a>, id: <a href="#" target="_self">  {{$article->id}}</a>
        </div>
        <!-- entity_meta -->

        <div class="entity_rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-full"></i>
        </div>
        <!-- entity_rating -->
        <!-- entity_social -->
        <!-- entity_thumb -->

        <div class="entity_content">
            <p>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                pain was born and I will give you a complete account of the system, and expound the
                actual teachings of the great explorer of the truth, the master-builder of human
                happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                but because those who do not know how to pursue pleasure rationally encounter
                consequences that are extremely painful.
            </p>
        </div>
    </div>
    <div class="entity_inner__title header_purple">
         <h2>Readers Comment</h2>
    </div>
    <!-- entity_wrapper -->
    @foreach ($comments as $comment)
    <div class="readers_comment ">
            <div class="media">
                <div class="media-left container">
                </div>
                <div class="media-body form-control" style="border-style:dotted; border-width: 2px; ">
                    <h2 class="media-heading">User: {{++$loop->index}}</h2>
                    {{$comment->comment}} --  
                    <small>{{$comment->updated_at}}</small>

                </div>
        </div>
    @endforeach



    <div class="entity_comments" style="padding-bottom: 50px">
        <div class="entity_inner__title header_black">
            <h2>Add a Comment</h2>
        </div>
        <!--Entity Title -->

        <div class="entity_comment_from">
            <form method="POST" action="{{ route('storeComment') }}">
                @csrf
                <input type="hidden" name="id" value="{{$article->id}}">
                <div class="form-group comment">
                    <textarea class="form-control" id="inputComment" placeholder="Comment" name="comment"></textarea>
                </div>

                <button type="submit" class="btn btn-submit red">Submit</button>
            </form>
        </div>
        <!--Entity Comments From -->

    </div>
    <!--Entity Comments -->

    </div>

    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

@endsection()
