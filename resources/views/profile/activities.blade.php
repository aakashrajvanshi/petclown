@extends('app')
@section('title')
    <title>Create a Profile</title>
    <meta name="description" content="Create a funny profile.">
@stop

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <h1>Welcome Surya</h1>
                </div>
            </div>
        </div>
    </div>

    <!--profile Pic-->


    <div class="container">
        <div class="row">
            <div class="col-md-3 profile-pic">
                <img class="img-responsive img-margin-bottom img-thumbnail" alt="" src="https://yt3.ggpht.com/-M1lV1KfpjVs/AAAAAAAAAAI/AAAAAAAAAAA/8Prmck3pnfA/s100-c-k-no/photo.jpg" width="100%">

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
                        <div class="panel-heading"><a href="http://surya.com/petition/rahulji-please-have-another-interview-with-arnab-goswami">Rahulji, please have another interview with Arnab Goswami</a></div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                There had been a significant hoopla about Rahul Gandhi's famous talk with Mr. Arnab Goswami which some people called political suicide by then contender of the PM post.
                            </div>
                            <ul class="list-inline comment-list col-md-3">
                                <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel Header</div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum.
                            </div>
                            <ul class="list-inline comment-list col-md-3">
                                <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel Header</div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum.
                            </div>
                            <ul class="list-inline comment-list col-md-3">
                                <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel Header</div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum.
                            </div>
                            <ul class="list-inline comment-list col-md-3">
                                <li class="pull-right"><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@stop