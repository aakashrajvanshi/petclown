@extends('app')
@section('title')
    <title>Privacy Settings</title>
    <meta name="description" content="Privacy Settings">
    @stop

    @section('content')

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
                            <li class="list-group-item">
                                <a href="profile/ideas"><i class="fa fa-pencil"></i> My Ideas</a>
                            </li>
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
                    <li><a href="profile/edit">Edit Profile</a></li>
                    <li class="active"><a href="profile/privacy">Privacy</a></li>
                </ul>

                <!--Privacy Settings-->

                <div class="privacy-settings">
                    <h1>Privacy Settings</h1>
                    <form class="form-horizontal profile-form" role="form" action="/profile/privacy" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                Profile Privacy
                            </label>
                            <div class="col-md-9 input-group">
                                @if($user->private)
                                    <input type="checkbox" name="public" unchecked/> Keep my profile public (email ids will remain hidden)
                                @else
                                    <input type="checkbox" name="public" checked/> Keep my profile public (email ids will remain hidden)
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                Newsletter Subscription
                            </label>
                            <div class="col-md-9 input-group">
                                @if($user->newsletter)
                                    <input type="checkbox" name="newsletter" checked/> Newsletter Subscription (about 1 email per week)
                                @else
                                    <input type="checkbox" name="newsletter" unchecked/> Newsletter Subscription (about 1 email per week)
                                @endif
                            </div>
                        </div>
                        {!! csrf_field() !!}
                        <button class="pull-right btn-u" type="submit">Save Changes</button>
                    </form>

                </div>


            </div>
        </div>

@stop