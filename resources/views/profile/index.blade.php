@extends('app')
@section('title')
    <title>Profile Homepage</title>
    <meta name="description" content="Profile of a funny guy or gal">
@stop

@section('content')


                     <!--my changes-->


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="well well-sm">
                                        <h1>Welcome Surya</h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Profile Pic and Sidebar-->

                       <div class="container">
                           <div class="row">
                               <div class="col-md-3 col-sm-3 col-xs-4 profile-pic">
                                   <img class="img-responsive img-margin-bottom img-thumbnail" alt="" src="https://yt3.ggpht.com/-M1lV1KfpjVs/AAAAAAAAAAI/AAAAAAAAAAA/8Prmck3pnfA/s100-c-k-no/photo.jpg" width="100%">

                                   <!--side navigation bar-->

                                   <ul class="list-group sidebar-nav">
                                       <li class="list-group-item active">
                                           <a href="profile"><i class="fa fa-user"></i> Profile</a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="profile/activities"><i class="fa fa-pencil fa-fw"></i> Activities</a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="profile/about"><i class="fa fa-cog"></i> Settings</a>
                                       </li>
                                   </ul>
                               </div>

                               <!--Main content-->

                               <!--Profile Information-->

                               <div class="col-md-9 col-sm-9 col-xs-8">
                                   <div class="profile-info">
                                       <h2>About Surya Teja <a href="profile/about"><button class="btn-u pull-right" type="button">Edit</button></a></h2>
                                       <dl class="dl-horizontal">
                                           <dt><strong>Name </strong></dt>
                                           <dd>
                                               Surya Teja
                                           </dd>
                                           <hr>
                                           <dt><strong>Gender </strong></dt>
                                           <dd>
                                               Male
                                           </dd>
                                           <hr>
                                           <dt><strong>Date of Birth </strong></dt>
                                           <dd>
                                               10-06-1992
                                           </dd>
                                           <hr>
                                           <dt><strong>City</strong></dt>
                                           <dd>
                                               Kakinada
                                           </dd>
                                           <hr>
                                           <dt><strong>Email address</strong></dt>
                                           <dd>
                                               suryasteja59@gmail.com, suryateja0959@gmail.com
                                           </dd>
                                           <hr>
                                           <dt><strong>Phone Number</strong></dt>
                                           <dd>
                                               7032949190
                                           </dd>
                                           <hr>
                                       </dl>
                                   </div>


                               </div>
                           </div>
                       </div>

@stop
