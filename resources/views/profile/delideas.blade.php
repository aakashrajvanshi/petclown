@extends('app')
@section('title')
    <title>My Ideas</title>
    <meta name="description" content="My Ideas">
    @stop

    @section('content')

            <!--Profile Pic and Sidebar-->

    <div class="row">
        <div class="col-md-3 profile-pic">
            <div class="row">
                <div class="col-md-12 col-xs-6">
                    <img class="img-responsive img-margin-bottom img-thumbnail" alt="{{$user->name}}"
                         src="{{cdn($user->avatar)}}" width="100%">
                </div>
                <!--side navigation bar-->

                <div class="col-md-12 col-xs-6">
                    <ul class="list-group sidebar-nav">
                        <li class="list-group-item">
                            <a href="profile"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="list-group-item active">
                            <a href="profile/ideas"><i class="fa fa-pencil"></i> My Ideas</a>
                        </li>
                        <li class="list-group-item">
                            <a href="profile/edit"><i class="fa fa-cog"></i> Edit Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Profile Information-->
        <div class="col-md-9 col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="profile/ideas">Latest</a></li>
                <li  class="active"><a href="profile/delideas">Deleted</a></li>
            </ul>
            <div class="panel panel-default">
                @foreach($ideas as $idea)
                    <div class="panel-body">
                        <p>
                            petitioning: {{$idea->petition_to}}
                            <small class="pull-right">{{$idea->created_at}}</small>
                        </p>
                        <div>
                            <a href="/idea/{{$idea->slug}}">{{$idea->heading}}</a>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="/ideas/restore/{{$idea->id}}" title="Approve"><i class="fa fa-check-circle fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <hr class="nomargin"/>
                @endforeach
            </div>
            {!! $ideas->render() !!}


        </div>
    </div>

@stop
