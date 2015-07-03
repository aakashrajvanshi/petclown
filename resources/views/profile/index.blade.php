@extends('app')
@section('title')
    <title>Profile of {{$user->name}}</title>
    <meta name="description" content="Profile of {{$user->name}}">
@stop

@section('content')

    <!--Profile Pic and Sidebar-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 profile-pic">
                <img class="hidden-sm hidden-xs img-responsive img-margin-bottom img-thumbnail" alt="{{$user->name}}"
                     src="{{$user->avatar}}"
                     width="100%">

                <!--side navigation bar-->

                <ul class="list-group sidebar-nav">
                    <li class="list-group-item active">
                        <a href="profile"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="list-group-item">
                        <a href="profile/activities"><i class="fa fa-pencil fa-fw"></i> Activities</a>
                    </li>
                    <li class="list-group-item">
                        <a href="profile/about"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <!--Profile Information-->
            <div class="col-md-9 col-sm-12">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="profile/about">About</a></li>
                </ul>

                <div class="profile-info">
                    <h2>Profile</h2>
                    <dl class="dl-horizontal">
                        <dt><strong>Name </strong></dt>
                        <dd>
                            {{$user->name}}
                        </dd>
                        <hr>
                        <dt><strong>Gender</strong></dt>
                        <dd>
                            {{is_null($user->ismale)?'Not Set':($user->ismale?'male':'female')}}
                        </dd>
                        <hr>
                        <dt><strong>City</strong></dt>
                        <dd>
                            {{is_null($user->city)?'Not Set':$user->city}}
                        </dd>
                        <hr>
                        <dt><strong>Country</strong></dt>
                        <dd>
                            {{is_null($user->country)?'Not Set':$user->country}}
                        </dd>
                        <hr>
                        <dt><strong>Email address</strong></dt>
                        <dd>
                            {{$user->email}}
                        </dd>
                        <hr>
                        <dt><strong>Alternate Email</strong></dt>
                        <dd>
                            {{is_null($user->alternate_email)?'Not Set':$user->alternate_email}}
                        </dd>
                        <hr>
                    </dl>
                    <a class="pull-right" href="profile/edit">
                        <button class="btn-u" type="button">Edit</button>
                    </a>
                </div>


            </div>
        </div>
    </div>

@stop
