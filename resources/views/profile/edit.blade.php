@extends('app')
@section('title')
    <title>Edit Profile for {{$user->name}}</title>
    <meta name="description" content="Profile of a funny guy or gal">
    @stop

    @section('content')
            <!--Profile Pic and Sidebar-->

    <div class="container">
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
                            <li class="list-group-item">
                                <a href="profile"><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <!--
                            <li class="list-group-item">
                                <a href="profile/activities"><i class="fa fa-pencil"></i> Activities</a>
                            </li>
                            -->
                            <li class="list-group-item active">
                                <a href="profile/edit"><i class="fa fa-cog"></i> Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">

                <!--Navigation in profile -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="profile/edit">Edit Profile</a></li>
                    <li><a href="profile/privacy">Privacy</a></li>
                </ul>

                <!--Edit Profile Page-->

                <div class="profile-about">

                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <h1>About me</h1>
                    <form class="form-horizontal profile-form" role="form" action="/profile" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                Change Profile Pic:
                            </label>
                            <div class="col-md-9 input-group">
                                <input type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">
                                Name:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="gender">
                                Gender:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-transgender fa-fw"></i></span>
                                <select class="form-control" name="gender" id="gender">
                                    @if(is_null($user->ismale))
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    @else
                                        @if($user->ismale)
                                            <option value="1" selected>Male</option>
                                            <option value="0">Female</option>
                                        @else
                                            <option value="1">Male</option>
                                            <option value="0" selected>Female</option>
                                        @endif
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="city">
                                City:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                                <input class="form-control" type="text" name="city" value="{{$user->city}}">
                                {!! csrf_field() !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="country">
                                Country:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-globe fa-fw"></i></span>
                                <input class="form-control" type="text" name="country" value="{{$user->country}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="email">
                                Alternate email:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input class="form-control" type="text" name="email" value="{{$user->alternate_email}}">
                            </div>
                        </div>
                        <button class="pull-right btn-u" type="submit">Save Changes</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
