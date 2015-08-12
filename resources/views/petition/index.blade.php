@extends('app')
@section('title')
    <title>Petitions</title>
    <!--
    <meta property="og:title"   content="Petition title" />
    <meta property="og:site_name" content="petclown.com"/>
    <meta property="og:url"     content="http://petclown.com" />
    <meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dolor lorem, sodales ut tellus ac, eleifend semper nunc. Donec pulvinar sapien eget libero varius, quis feugiat mauris faucibus. Duis aliquet nibh erat, sit amet lobortis dolor gravida nec. Nam vel sagittis lacus, sed gravida odio. In volutpat congue auctor. Morbi convallis et eros at semper. Aliquam feugiat consectetur ex nec consectetur. Etiam efficitur, diam non ultrices posuere, tellus felis rhoncus purus, ac fermentum lorem turpis sit amet ante. Nulla facilisi." />
    <meta property="og:image"              content="http://petclown.com/images/Aakash%20Rajvanshi/thumb_12:04:38-The_Lost_World_Jurassic_Park.jpg" />
    -->

@stop


@section('content')

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : 391650077697225,
                status     : true,
                cookie     : true,
                xfbml      : true,
                version    : 'v2.4'
            });
            FB.ui({
                method: 'share',
                href: 'http://petclown.com'
            }, function(response){});
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


    <div class="row">

        <div class="col-md-8">
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
                                                            Petition</a></li>
                                                </ul>
                                            @elseif($petition->supportedby->contains(Auth::user()))
                                                <ul class="share-request list-inline">

                                                    <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                                    </li>
                                                    <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                                    </li>

                                                    <li class="pull-right"><a href="https://www.facebook.com/dialog/share?
                                                    app_id=391650077697225&href=http://petclown.com/petition/{{$petition->slug}}
                                                                &redirect_uri=http://petclown.com/petition/{{$petition->slug}}">
                                                            <i class="fa fa-facebook-square fa-lg"></i></a>
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
                                                            Petition</a></li>
                                                </ul>
                                            @elseif($petition->supportedby->contains(Auth::user()))
                                                <ul class="share-request list-inline">

                                                    <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                                    </li>
                                                    <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                                    </li>

                                                    <li class="pull-right"><a href="https://www.facebook.com/dialog/share?
                                                    app_id=391650077697225&href=http://petclown.com/petition/{{$petition->slug}}
                                                                &redirect_uri=http://petclown.com/petition/{{$petition->slug}}"><i
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
                                                            Petition</a></li>
                                                </ul>
                                            @elseif($petition->supportedby->contains(Auth::user()))
                                                <ul class="share-request list-inline">

                                                    <li class="pull-left verylight">{{count($petition->supportedby)}} supporters
                                                    </li>
                                                    <li class="pull-left"><i class="fa fa-check-circle fa-lg"></i>
                                                    </li>

                                                    <li class="pull-right">
                                                        <a href="https://www.facebook.com/dialog/share?
                                                    app_id=391650077697225&href=http://petclown.com/petition/{{$petition->slug}}
                                                                &redirect_uri=http://petclown.com/petition/{{$petition->slug}}">
                                                            <i class="fa fa-facebook-square fa-lg"></i>
                                                        </a>
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
                                                    <li class="pull-right"><a href="support/{{$petition->slug}}">Sign this
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


        </div>






        <div class="col-md-4">
            <h2 class="dotted-header"><span class="dotted-header">Latest Activity</span></h2>
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