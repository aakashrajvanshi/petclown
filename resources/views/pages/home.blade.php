@extends('app')

@section('content')

        <!---====== HomePage Jumbotron =====---->

<div class="container">
    <div class="row">
        <div class="col-md-12 home-image home-jumbotron"></div>
    </div>
</div>

<!---===== HomePage Content =====----->

<div class="container">
    <div class="row home-petitions">
        <div class="col-md-8 petitions-container">

            <!----===== HomePage Left Content ====----->

            <!----==== Popular Petition Container ====--->

            <div class="col-md-12 popular-petitions">
                <div class="row">

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
            </div>


            <!-----====== Featured Petition Container =====------>

            <div class="col-md-12 popular-petitions">
                <div class="row">
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
            </div>

            <!-----====== Trending Petition Container =====------>

            <div class="col-md-12 popular-petitions">
                <div class="row">
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

        </div>

        <!---====== HomePage Right Container =====------>
        <div class="col-md-4">
            <div class="col-md-12">
                <h2><span class="dotted-header">Latest Activity</span></h2>
                <hr class="notopmargin"/>
                @foreach($activity as $act)
                <div class="latest-comment">
                    <div class="supporter">
                    <a class="pull-left" href="/profile/{{$act->id}}">
                    <img class="rounded-x" src="{{$act->avatar}}" alt="{{$act->name}}">
                    </a>
                    <strong>{{$act->name}}</strong> has supported petition to <strong>{{$act->petition_to}}</strong></div><br>
                    <a href="petition/{{$act->slug}}" class="activitysize">
                            @if (strlen($act->heading)>65)
                                {{substr($act->heading,0,65)}}...
                            @else
                                {{$act->heading}}
                            @endif
                    </a>
                    <small class="pull-right">{{$act->created_at}}</small><br>
                </div>
                <hr class="marginhr"/>
                @endforeach
            </div>
        </div>

    </div>
</div>

@stop
