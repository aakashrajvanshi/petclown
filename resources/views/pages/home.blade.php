@extends('app')

@section('title')
    <title>Funny Petitions, Stupid Requests | Mr. Petition</title>
    <meta name="description" content="Mr. Petition raise petitions which are funny, crazy and sometimes totally insane.">
@stop

@section('jumbotron')

    <!---====== HomePage Jumbotron =====---->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide carousel-v1" id="myCarousel">
                    <div class="carousel-inner">
                        <?php $i=0; ?>
                        @foreach($popular as $petition)
                        @if($i++==0)
                            <div class="item active">
                        @else
                            <div class="item">
                        @endif
                            <a href="petition/{{$petition->slug}}">
                            <div class="panel panel-default">
                                <div class="panel-body no-padding no-margin col-xs-12 col-sm-6">
                                    <img src="{{$petition->image}}" width="100%" alt="{{$petition->heading}}">
                                    <div class="carousel-caption visible-xs visible-sm hidden-md hidden-lg">
                                        <p>To: {{$petition->petition_to}}</p>
                                        <p>{{$petition->heading}}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 noleftpadding visible-md visible-lg hidden-xs hidden-sm">
                                    <div class="thumb petition-to">To: <strong>{{$petition->petition_to}}</strong>
                                    </div>
                                    <h2 class="thumb petition-heading">
                                        {{$petition->heading}}
                                    </h2>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
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

    <div class="row">
        <div class="col-md-8 home-petitions">
            <!-----====== Trending Petitions Container =====------>
                <h2 class="myinline"><span class="dotted-header">Trending Petitions</span></h2>
                <a href="petitions#trending" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                <?php $i=0; ?>
                @foreach($trending as $petition)
                @if($i++%2==0)
                <div class="row popular-petitions">
                @endif
                    <div class="col-md-6 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->heading}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>100)
                                            {{substr($petition->heading,0,100)}}...
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
                @if($i%2==0)
                </div>
                @endif
                @endforeach


            <!-----====== Popular Petitions Container =====------>

                <h2 class="myinline"><span class="dotted-header">Popular Petitions</span></h2>
                <a href="petitions#popular" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                <?php $i=0; ?>
                @foreach($popular as $petition)
                @if($i++%2==0)
                    <div class="row popular-petitions">
                @endif
                    <div class="col-md-6 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->heading}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>100)
                                            {{substr($petition->heading,0,100)}}...
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
                @if($i%2==0)
                </div>
                @endif
                @endforeach


            <!-----====== Latest Petitions Container =====------>

                <h2 class="myinline"><span class="dotted-header">Latest Petitions</span></h2>
                <a href="petitions#latest" class="pull-right petition-browse">Browse All</a>
                <hr class="notopmargin"/>
                <?php $i=0; ?>
                @foreach($latest as $petition)
                @if($i++%2==0)
                <div class="row popular-petitions">
                @endif
                    <div class="col-md-6 col">
                        <div class="thumbnails thumbnail-style">
                            <a href="petition/{{$petition->slug}}">
                                <img class="img-responsive"
                                     src="{{$petition->image_thumb}}"
                                     alt="{{$petition->heading}}" width="100%">
                            </a>
                            <div class="thumbnail-body">
                                <div class="petition-to"><span class="verylight">To:</span> {{$petition->petition_to}}</div>
                                <div class="petition-link"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>100)
                                            {{substr($petition->heading,0,100)}}...
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
                @if($i%2==0)
                </div>
                @endif
                @endforeach
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
