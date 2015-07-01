@extends('app')
@section('title')
    <title>Profile Homepage</title>
    <meta name="description" content="Profile of a funny guy or gal">
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

    <!--Profile pic-->

    <div class="container">
        <div class="row">
            <div class="col-md-3 profile-pic">
                <img class="img-responsive img-margin-bottom img-thumbnail" alt="" src="https://yt3.ggpht.com/-M1lV1KfpjVs/AAAAAAAAAAI/AAAAAAAAAAA/8Prmck3pnfA/s100-c-k-no/photo.jpg" width="100%">

                <!--side navigation bar-->

                <ul class="list-group sidebar-nav">
                    <li class="list-group-item">
                        <a href="profile"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="list-group-item">
                        <a href="profile/activities"><i class="fa fa-pencil fa-fw"></i> Activities</a>
                    </li>
                    <li class="list-group-item active">
                        <a href="profile/about"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">

                <!--Navigation in profile -->
                <ul class="nav nav-tabs">
                    <li><a href="profile/about">Edit Profile</a></li>
                    <li class="active"><a href="profile/settings">Change Password</a></li>
                    <li><a href="profile/privacy">Privacy Settings</a></li>
                </ul>

                <!--Security Settings-->

                <div class="security-settings">
                    <h1>Change Your Settings</h1>
                    <form class="form-horizontal email-form" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="email">
                                Email:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input class="form-control" type="email" id="email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="pwd">
                                Password:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input class="form-control" type="password" id="pwd" placeholder="Enter your present password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="new-pwd">
                                New Password:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input class="form-control" type="password" id="new-pwd" placeholder="Enter your new password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="cnf-pwd">
                                Confirm Password:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                                <input class="form-control" type="password" id="cnf-pwd" placeholder="Confirm Password">
                            </div>
                        </div>
                        <button type="button" class="btn-u btn-u-default">Cancel</button>
                        <button class="btn-u" type="submit">Save Changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


@stop