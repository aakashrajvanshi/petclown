@extends('app')
@section('title')
    <title>Create a Profile</title>
    <meta name="description" content="Create a funny profile.">
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
                    <li><a href="profile/settings">Change Password</a></li>
                    <li class="active"><a href="profile/privacy">Privacy Settings</a></li>
                </ul>

                <!--Privacy Settings-->

                <div class="privacy-settings">
                    <h1>Change your Privacy Settings</h1>
                    <hr/>
                    <dl class="dl-horizontal">
                        <dt>Who can see my stuff </dt>
                        <dd>Who can see my posts?<span class="pull-right"><input type="checkbox" name="public" checked/> Public</span> </dd>
                        <hr/>
                        <dd>Who can comment on my posts?<span class="pull-right"><input type="checkbox" name="public" checked/> Public</span> </dd>
                        <hr/>
                        <dd>Who can see my profile?<span class="pull-right"><input type="checkbox" name="public" checked/> Public</span></dd>
                        <hr/>
                    </dl>
                    <button class="btn-u" type="submit">Save Changes</button>
                </div>


            </div>
        </div>
    </div>





@stop