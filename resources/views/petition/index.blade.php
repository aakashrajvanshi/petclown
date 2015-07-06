@extends('app')
@section('title')
    <title>Petitions</title>
    <meta name="description" content="Petitions listings">
@stop

@section('content')
    <h1>Petition List</h1>
    <hr/>

    @foreach($petitions as $petition)
        <div class="panel panel-default">
            <div class="panel-body no-padding no-margin">
                <div class="row  no-padding no-margin">
                    <div class="col-xs-12 col-sm-5  no-padding no-margin">
                        <img src="{{$petition->image_thumb}}" width="100%">
                    </div>
                    <div class="col-xs-12 col-sm-7 no-padding no-margin">
                        <div class="thumb petition-to">Petitioning: <strong>{{$petition->petition_to}}</strong></div>
                        <h2 class="thumb petition-heading"><a href="petition/{{$petition->slug}}">{{$petition->heading}}</a></h2>

                        <div class="thumb petition-from"><img class="profileimagexs rounded-x"
                                                              src="{{$petition->user->avatar}}">{{$petition->user->name}}
                            @if(Auth::guest())
                                    <div class="login-request">
                                        <a class="pull-right" href="{{url('/auth/login')}}">Sign this Petition</a>
                                    </div>
                            @elseif($petition->supportedby->contains(Auth::user()))
                            <ul class="share-request list-inline">
                                <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-lg"></i></a></li>
                                <li class="pull-right"><i class="fa fa-check-circle fa-fw"></i>Please Share!</li>
                            </ul>
                                @else
                                <div class="support-request">
                                    <a class="pull-right" href="#">Support this Petition</a>
                                </div>
                                @endif
                        </div>



                        <!--
                        <ul class="my-small-icon my-social-icons icon-rounded icon-zoom list-unstyled list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>

                        <div class="row">
                            <div class="my col-xs-4">
                                <div class="my service-block service-block-u">
                                    A:
                                </div>
                            </div>
                            <div class="my col-xs-4">
                                <div class="my service-block service-block-blue">
                                    B:
                                </div>
                            </div>
                            <div class="my col-xs-4">
                                <div class="my service-block service-block-red">
                                    C:
                                </div>
                            </div>

                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop