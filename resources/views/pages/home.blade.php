@extends('app')

@section('title')
    <title>Home Page</title>
    <meta name="description" content="Home Page">
@stop


@section('jumbotron')

    <!---====== HomePage Jumbotron =====---->
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-jumbotron">




                <div class="carousel slide carousel-v1" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="panel panel-default">
                                <div class="panel-body no-padding no-margin col-xs-12 col-sm-6">
                                    <img src="http://petclown.com/images/Aakash%20Rajvanshi/thumb_11:44:20-rahul-gandhi.jpg" width="100%" alt="">
                                    <div class="carousel-caption visible-xs visible-sm hidden-md hidden-lg">
                                        <p>To: Rahul Gandhi</p>
                                        <p>Rahulji, please have another interview with Arnab Goswami</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 noleftpadding visible-md visible-lg hidden-xs hidden-sm">
                                    <div class="thumb petition-to">To: <strong>Rahul Gandhi</strong>
                                    </div>
                                    <h2 class="thumb petition-heading">
                                        Rahulji, please have another interview with Arnab Goswami
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default">
                                <div class="panel-body no-padding no-margin col-xs-12 col-sm-6">
                                    <img src="http://petclown.com/images/Aakash%20Rajvanshi/thumb_06:50:09-game-of-thrones.jpg" width="100%" alt="">
                                    <div class="carousel-caption visible-xs visible-sm hidden-md hidden-lg">
                                        <p>To: Rahul Gandhi</p>
                                        <p>Rahulji, please have another interview with Arnab Goswami</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 noleftpadding visible-md visible-lg hidden-xs hidden-sm">
                                    <div class="thumb petition-to">To: <strong>Rahul Gandhi</strong>
                                    </div>
                                    <h2 class="thumb petition-heading">
                                        Rahulji, please have another interview with Arnab Goswami
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default">
                                <div class="panel-body no-padding no-margin col-xs-12 col-sm-6">
                                    <img src="http://petclown.com/images/Aakash%20Rajvanshi/thumb_06:46:40-The_Lost_World_Jurassic_Park.jpg" width="100%" alt="">
                                    <div class="carousel-caption visible-xs visible-sm hidden-md hidden-lg">
                                        <p>To: Rahul Gandhi</p>
                                        <p>Rahulji, please have another interview with Arnab Goswami</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 noleftpadding visible-md visible-lg hidden-xs hidden-sm">
                                    <div class="thumb petition-to">To: <strong>Rahul Gandhi</strong>
                                    </div>
                                    <h2 class="thumb petition-heading">
                                        Rahulji, please have another interview with Arnab Goswami
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>





            </div>
        </div>
    </div>


@stop





@section('content')

    <!---===== HomePage Content =====----->

    <!----===== HomePage Left Content ====----->

    <!----==== Popular Petition Container ====--->

    <div class="row">
        <div class="col-md-8 home-petitions">

            <div class="row popular-petitions">
                <h2 class="myinline"><span class="dotted-header">Popular Petitions</span></h2>
                <a href="petitions#popular" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                @foreach($petitions as $petition)
                    <div class="col-md-4 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->petition_to}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>58)
                                            {{substr($petition->heading,0,58)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a>
                                </div>
                                <ul class="list-inline comment-list">
                                    <li class="pull-right"><i class="fa fa-comments-o"></i> {{count($petition->comment)}}</li>
                                    <li class="pull-right"><i class="fa fa-heart-o"></i> {{count($petition->supportedby)}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <!-----====== Featured Petition Container =====------>

            <div class="row popular-petitions">
                <h2 class="myinline"><span class="dotted-header">Latest Petitions</span></h2>
                <a href="petitions#latest" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                @foreach($latest as $petition)
                    <div class="col-md-4 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->petition_to}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>58)
                                            {{substr($petition->heading,0,58)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a>
                                </div>
                                <ul class="list-inline comment-list">
                                    <li class="pull-right"><i class="fa fa-comments-o"></i> {{count($petition->comment)}}</li>
                                    <li class="pull-right"><i class="fa fa-heart-o"></i> {{count($petition->supportedby)}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-----====== Trending Petition Container =====------>


            <div class="row popular-petitions">
                <h2 class="myinline"><span class="dotted-header">Trending this week</span></h2>
                <a href="petitions#trending" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                @foreach($trending as $petition)
                    <div class="col-md-4 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->petition_to}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>58)
                                            {{substr($petition->heading,0,58)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a>
                                </div>
                                <ul class="list-inline comment-list">
                                    <li class="pull-right"><i class="fa fa-comments-o"></i> {{count($petition->comment)}}</li>
                                    <li class="pull-right"><i class="fa fa-heart-o"></i> {{count($petition->supportedby)}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!---====== HomePage Right Container =====------>


        <div class="col-md-4 home-petitions">
            <h2><span class="dotted-header">Latest Activity</span></h2>
            <hr class="notopmargin"/>
            @foreach($activity as $act)
                <div class="media media-v2">
                    <a class="pull-left" href="/profile/{{$act->id}}">
                        <img class="rounded-x" src="{{$act->avatar}}" alt="{{$act->name}}">
                    </a>

                    <div class="media-body">
                            <span class="media-heading">
                                {{$act->name}}  <span class="verylight">supported</span>
                                <small class="pull-right">{{$act->created_at->diffForHumans()}}</small>
                            </span>
                        <p>
                            <a href="petition/{{$act->slug}}">
                                @if (strlen($act->heading)>58)
                                    {{substr($act->heading,0,58)}}...
                                @else
                                    {{$act->heading}}
                                @endif
                            </a>
                            <span class="verylight">(To: </span>{{$act->petition_to}})
                        </p>
                    </div>
                </div>


                <hr class="marginhr"/>
            @endforeach
        </div>


    </div>




@stop
