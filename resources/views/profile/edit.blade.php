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
                    <form id="form1" class="form-horizontal profile-form" role="form" action="/profile" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12" id="collapseAvatar">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#clownGroup1">Funny Clown 1</a></li>
                                        <li><a data-toggle="tab" href="#clownGroup2">Funny Clown 2</a></li>
                                        <li><a data-toggle="tab" href="#clownGroup3">Funny Clown 3</a></li>
                                        <li><a data-toggle="tab" href="#clownGroup4">Funny Clown 4</a></li>
                                        <li class="pull-right">
                                            <button id="custombtn" class="btn btn-u" type="button" aria-expanded="false" aria-controls="collapseAvatar">
                                                Back</button>
                                        </li>
                                    </ul>
                                <br/>
                                <div class="tab-content">
                                    <div id="clownGroup1" class="tab-pane fade in active">
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
                        </div>
                        <div id="profilePic" class="form-group">
                            <label class="control-label col-md-3">
                                Change Profile Pic:
                            </label>
                            <div class="col-md-9 input-group">
                                <ul class="list-inline">
                                    <li>
                                        <button id="avatarbtn" class="btn btn-u" type="button" aria-expanded="false" aria-controls="collapseAvatar">
                                            Choose an Avatar
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


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">


                                <form role="form" action="/profile" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                                            <h4 id="myModalLabel1" class="modal-title">Pick an Avatar</h4>
                                        </div>
                                            <div class="modal-body">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#clownGroup1">Funny Clown 1</a></li>
                                                    <li><a data-toggle="tab" href="#clownGroup2">Funny Clown 2</a></li>
                                                    <li><a data-toggle="tab" href="#clownGroup3">Funny Clown 3</a></li>
                                                    <li><a data-toggle="tab" href="#clownGroup4">Funny Clown 4</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="clownGroup1" class="tab-pane fade in active">
                                                        <ul class="list-inline">
                                                            <li>
                                                                <input type="radio" name="avatar" value="funnyclown1" id="funnyclown1" />
                                                                <label for="funnyclown1">
                                                                    <img class="img img-responsive img-thumbnail" width="25%" src="http://www.myfreephotoshop.com/wp-content/uploads/2013/12/296.jpg" alt="Funny Clown 1">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="avatar" value="funnyclown2" id="funnyclown2" />
                                                                <label for="funnyclown2">
                                                                    <img class="img img-responsive img-thumbnail" width="25%" src="http://previews.123rf.com/images/yuliaglam/yuliaglam1305/yuliaglam130500064/20008444-illustration-of-smiling-clown-with-red-bow-Stock-Vector-clown-cartoon-face.jpg" alt="Funny Clown 2">
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div id="clownGroup2" class="tab-pane fade">

                                                    </div>

                                                    <div id="clownGroup3" class="tab-pane fade">
                                                        <img src="" alt="Funny Clown 3">
                                                    </div>
                                                    <div id="clownGroup4" class="tab-pane fade">
                                                        <img src="" alt="Funny clown 4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn-u btn-u-default" type="button">Close</button>
                                                <button class="btn-u" type="submit" form="form1">Save changes</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>






                </div>
            </div>
        </div>
@stop
