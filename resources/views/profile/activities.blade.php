@extends('app')
@section('title')
    <title>Create a Profile</title>
    <meta name="description" content="Create a funny profile.">
@stop

@section('content')



    <!--profile Pic-->


    <div class="container">
        <div class="row">
            <div class="col-md-3 profile-pic">
                <img class="hidden-xs hidden-sm img-responsive img-margin-bottom img-thumbnail" alt="" src="https://yt3.ggpht.com/-M1lV1KfpjVs/AAAAAAAAAAI/AAAAAAAAAAA/8Prmck3pnfA/s100-c-k-no/photo.jpg" width="100%">

                <!--side navigation bar-->

                <ul class="list-group sidebar-nav">
                    <li class="list-group-item">
                        <a href="profile"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="list-group-item active">
                        <a href="profile/activities"><i class="fa fa-pencil fa-fw"></i> Activities</a>
                    </li>
                    <li class="list-group-item">
                        <a href="profile/about"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">

                <!--Navigation in profile -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="profile/activities">My Activities</a></li>
                </ul>

                <!--My Activities-->



                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="list-inline activity-list">
                                <li class="col-md-2 pull-left"><i class="fa fa-thumbs-up fa-2x"></i><span class="activity-support">Supported</span></li>
                                <li class="col-md-10 petition-headerLink"><i class="fa fa-external-link-square fa-2x"></i><a class="header-link" href="#">Rahulji, please have another interview with Arnab Goswami</a></li>
                                <ul class="list-inline activity-list">
                                    <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                                    <li class="pull-right share-on">Please Share!</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@stop