@extends('app')
@section('title')
    <title>Profile of {{$user->name}}</title>
    <meta name="description" content="Profile of {{$user->name}}">
@stop

@section('content')

    <!--Profile Pic and Sidebar-->

        <div class="row">
            <div class="col-md-3 profile-pic">
                <div class="row">
                    <div class="col-md-12 col-xs-6">
                        <img class="img-responsive img-margin-bottom img-thumbnail" alt="{{$user->name}}"
                        src="{{$user->avatar}}" width="100%">
                    </div>
                <!--side navigation bar-->

                    <div class="col-md-12 col-xs-6">
                        <ul class="list-group sidebar-nav">
                            <li class="list-group-item active">
                                <a href="profile"><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <!--
                            <li class="list-group-item">
                                <a href="profile/activities"><i class="fa fa-pencil"></i> Activities</a>
                            </li>
                            -->
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
                    <li class="active"><a href="profile">Profile</a></li>
                </ul>

                <div class="profile-info">
                    <dl class="dl-horizontal">
                        <dt><strong>Name </strong></dt>
                        <dd>
                            {{$user->name}}
                        </dd>
                        <hr>
                        <dt><strong>Gender</strong></dt>
                        <dd>
                            {{is_null($user->ismale)?'Not Set':($user->ismale?'Male':'Female')}}
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
                        <dt><strong>Profile Privacy</strong></dt>
                        <dd>
                            {{($user->private)?'Private':'Public'}}
                        </dd>
                        <hr>
                    </dl>
                    <a class="pull-right" href="profile/edit">
                        <button class="btn-u" type="button">Edit</button>
                    </a>
                </div>


            </div>
        </div>

@stop
