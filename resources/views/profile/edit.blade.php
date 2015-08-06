@extends('app')
@section('title')
    <title>Edit Profile for {{$user->name}}</title>
    <meta name="description" content="Edit Profile">
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

                        <!-- profile pic and avatar selector -->
                        <div class="form-group">
                            <div class="col-md-12" id="collapseAvatar">
                                <button id="custombtn" class="btn btn-u pull-right" type="button" aria-expanded="false" aria-controls="collapseAvatar">
                                    or Upload Image</button>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Funny Clown 1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul class="list-inline">
                                                    <li>
                                                        <input type="radio" name="image" value="funnyclown1" id="funnyclown1" />
                                                        <label for="funnyclown1">
                                                            <img class="img-responsive" src="http://pickaface.net/includes/themes/clean/img/slide4.png" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="image" value="funnyclown2" id="funnyclown2" />
                                                        <label for="funnyclown2">
                                                            <img class="img-responsive" src="assets/img/clients2/inspiring.png" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="image" value="funnyclown3" id="funnyclown3" />
                                                        <label for="funnyclown3">
                                                            <img class="img-responsive" src="assets/img/clients2/marianos.png" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="image" value="funnyclown4" id="funnyclown4" />
                                                        <label for="funnyclown4">
                                                            <img class="img-responsive" src="assets/img/clients2/bellfield.png" alt="">
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Funny Clowns #2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Funny Clowns #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="profilePic" class="form-group">
                            <label class="control-label col-md-3">
                                Change Profile Pic:
                            </label>
                            <div class="col-md-9 input-group">
                                <ul class="list-inline">
                                    <li>
                                        <button id="avatarbtn" class="btn btn-u" type="button" aria-expanded="false" aria-controls="collapseAvatar">
                                            Choose Avatar
                                        </button>
                                    </li>
                                    <li>OR</li>
                                    <li>
                                        <input type="file" name="image" id="image">
                                    </li>
                                </ul>
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
@stop
