@extends('app')
@section('title')
    <title>Petitions</title>
    <meta name="description" content="Petitions listings">
@stop

@section('content')

    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Trending</a>

            <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
            <li role="presentation"><a href="#latest" aria-controls="latest" role="tab" data-toggle="tab">Latest</a>

            </li>
        </ul>
    </div>
    <br>

    <!-- Tab panes -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="trending">
            @foreach($trending_all as $petition)
                <div class="panel panel-default">
                    <div class="panel-body no-padding no-margin">
                        <div class="row  no-padding no-margin">
                            <div class="col-xs-12 col-sm-5  no-padding no-margin">
                                <img src="{{$petition->image_thumb}}" width="100%">
                            </div>
                            <div class="col-xs-12 col-sm-7 no-padding no-margin">
                                <div class="thumb petition-to">Petitioning: <strong>{{$petition->petition_to}}</strong>
                                </div>
                                <h2 class="thumb petition-heading"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>65)
                                            {{substr($petition->heading,0,65)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a></h2>
                                <!--
                                <div class="thumb petition-from"><img class="profileimagexs rounded-x"
                                                                     src="{{$petition->user->avatar}}">{{$petition->user->name}}</div>
                                -->
                                <div class="thumb petition-from"><span class="verylight">By</span> {{$petition->user->name}}</div>
                                <div class="petpanel">
                                    @if(Auth::guest())
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}}
                                                supporters
                                            </li>
                                            <li class="pull-right"><a href="{{url('/auth/login')}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                    @elseif($petition->supportedby->contains(Auth::user()))
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                            </li>

                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-facebook-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-twitter-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-google-plus-square fa-lg"></i></a></li>
                                            <li class="pull-right verylight">Share</li>

                                        </ul>
                                    @else
                                        <ul class="share-request list-inline">
                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-right"><a href="petition/{{$petition->slug}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div role="tabpanel" class="tab-pane" id="popular">
            @foreach($petitions_all as $petition)
                <div class="panel panel-default">
                    <div class="panel-body no-padding no-margin">
                        <div class="row  no-padding no-margin">
                            <div class="col-xs-12 col-sm-5  no-padding no-margin">
                                <img src="{{$petition->image_thumb}}" width="100%">
                            </div>
                            <div class="col-xs-12 col-sm-7 no-padding no-margin">
                                <div class="thumb petition-to">Petitioning: <strong>{{$petition->petition_to}}</strong>
                                </div>
                                <h2 class="thumb petition-heading"><a href="petition/{{$petition->slug}}">
                                @if (strlen($petition->heading)>65)
                                            {{substr($petition->heading,0,65)}}...
                                @else
                                        {{$petition->heading}}
                                @endif
                                </a></h2>
                                <!--
                                <div class="thumb petition-from"><img class="profileimagexs rounded-x"
                                                                     src="{{$petition->user->avatar}}">{{$petition->user->name}}</div>
                                -->
                                <div class="thumb petition-from"><span class="verylight">By</span> {{$petition->user->name}}</div>
                                <div class="petpanel">
                                @if(Auth::guest())
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}}
                                                supporters
                                            </li>
                                            <li class="pull-right"><a href="{{url('/auth/login')}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                    @elseif($petition->supportedby->contains(Auth::user()))
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                            </li>

                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-facebook-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-twitter-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-google-plus-square fa-lg"></i></a></li>
                                            <li class="pull-right verylight">Share</li>

                                        </ul>
                                    @else
                                        <ul class="share-request list-inline">
                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-right"><a href="petition/{{$petition->slug}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div role="tabpanel" class="tab-pane" id="latest">
            @foreach($latest_all as $petition)
                <div class="panel panel-default">
                    <div class="panel-body no-padding no-margin">
                        <div class="row  no-padding no-margin">
                            <div class="col-xs-12 col-sm-5  no-padding no-margin">
                                <img src="{{$petition->image_thumb}}" width="100%">
                            </div>
                            <div class="col-xs-12 col-sm-7 no-padding no-margin">
                                <div class="thumb petition-to">Petitioning: <strong>{{$petition->petition_to}}</strong>
                                </div>
                                <h2 class="thumb petition-heading"><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>65)
                                            {{substr($petition->heading,0,65)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a></h2>
                                <!--
                                <div class="thumb petition-from"><img class="profileimagexs rounded-x"
                                                                     src="{{$petition->user->avatar}}">{{$petition->user->name}}</div>
                                -->
                                <div class="thumb petition-from"><span class="verylight">By</span> {{$petition->user->name}}</div>
                                <div class="petpanel">
                                    @if(Auth::guest())
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}}
                                                supporters
                                            </li>
                                            <li class="pull-right"><a href="{{url('/auth/login')}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                    @elseif($petition->supportedby->contains(Auth::user()))
                                        <ul class="share-request list-inline">

                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                            </li>

                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-facebook-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-twitter-square fa-lg"></i></a>
                                            </li>
                                            <li class="pull-right"><a href="#"><i
                                                            class="fa fa-google-plus-square fa-lg"></i></a></li>
                                            <li class="pull-right verylight">Share</li>

                                        </ul>
                                    @else
                                        <ul class="share-request list-inline">
                                            <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                            </li>
                                            <li class="pull-right"><a href="petition/{{$petition->slug}}">Sign this
                                                    Petition</a></li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {!! $latest_all->fragment('latest')->render() !!}
        </div>

    </div>
@stop