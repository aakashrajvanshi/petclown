@extends('app')
@section('title')
    <title>Profile of {{$user->name}}</title>
    <meta name="description" content="Profile of {{$user->name}}">
    @stop

    @section('content')

            <!--Profile Pic and Sidebar-->
    <div class="container">
        <div class="row">
            @if($user->private)
                <br/><br/><br>
                <center><h2>This profile is private.</h2></center>
                <br><br><br><br>
            @else
            <div class="col-md-3 profile-pic">
                <img class="img-responsive img-margin-bottom img-thumbnail" alt="{{$user->name}}"
                             src="{{$user->avatar}}" width="100%">
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

                    </dl>
                </div>
            </div>
            @endif
        </div>
    </div>
@stop
