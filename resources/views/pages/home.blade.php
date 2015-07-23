@extends('app')

@section('title')
    <title>Home Page</title>
    <meta name="description" content="Home Page">
    @stop


    @section('content')

            <!---====== HomePage Jumbotron =====---->
        <div class="row">
            <div class="col-md-12">
                <div class="home-image home-jumbotron"></div>
            </div>
        </div>










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
                                     alt="{{$petition->petition_to}}">
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
                                     alt="{{$petition->petition_to}}">
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
                                     alt="{{$petition->petition_to}}">
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
