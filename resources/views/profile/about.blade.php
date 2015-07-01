@extends('app')
@section('title')
    <title>Profile Homepage</title>
    <meta name="description" content="Profile of a funny guy or gal">
@stop

@section('content')


    <!--my changes-->



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <h1>Welcome Surya</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Profile Pic and Sidebar-->


    <div class="container">
        <div class="row">
            <div class="col-md-3 profile-pic">
                <img class="img-responsive img-margin-bottom img-thumbnail" alt="" src="https://yt3.ggpht.com/-M1lV1KfpjVs/AAAAAAAAAAI/AAAAAAAAAAA/8Prmck3pnfA/s100-c-k-no/photo.jpg" width="100%">

                <!--Side navigation bar-->


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
                    <li class="active"><a href="profile/about">Edit Profile</a></li>
                    <li><a href="profile/settings">Change Password</a></li>
                    <li><a href="profile/privacy">Privacy Settings</a></li>
                </ul>

                <!--Edit Profile Page-->

                <div class="profile-about">
                    <h1>About me</h1>
                    <form class="form-horizontal email-form" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">
                                Name:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input class="form-control" type="text" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="gender">
                                Gender:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-transgender fa-fw"></i></span>
                                <select class="form-control" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="DOB">
                                Date of Birth:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input class="form-control" type="date" id="DOB">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="city">
                                City:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                                <input class="form-control" type="text" id="city">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="email">
                                Add additional emails:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input class="form-control" type="text" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="ph-num">
                                Phone number:
                            </label>
                            <div class="col-md-9 input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                <input class="form-control" type="tel" id="ph-num">
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
