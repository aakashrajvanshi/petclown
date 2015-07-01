@extends('app')
@section('content')

    This is a admin page

    @stop




            <!-- My Changesss  -->
    <html>
    <body>
    <head>

        <style type="text/css">
            .titleContainer {
                width: 100%;
                border-bottom: 1px solid #EDEDED;
                display: block;
                background-color: #FFF;
            }
            .userImgDiv {
                display: table-cell;
                padding: 0px 10px 10px 10px;
                width: 70px;
                height: 70px;
            }
            .greetingMsgL, .greetingMsgR {
                display: table-cell;
                color: #00B6C3;
                font-size: 27px;
                vertical-align: left;
            }
            .widget {
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
                box-shadow: 0 1px 1px rgba(0,0,0,0.05);
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                position: relative;
            }
        </style>
    </head>

    <!-- <div class="titleContainer">
        <div class="userImgDiv col-sm-3">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 75px; height: 75px; vertical-align: top;">
                <image xlink:href="http://cdn.tutorialspoint.com/images/free-training.jpg" preserveAspectRatio="xMidYMid" clip-path="url(#avatar-clip)" width="100%" height="px"></image>
            </svg>
        </div>
        <div class="greetingMsgL col-sm-4">Hello, <span id="username">Raju</span>!</div>
        <div class="greetingMsgR col-sm-2"><span id="TotalPetitions">0</span><span style="display: block;font-size: 17px;">Total Petitions</span></div>
        <div class="greetingMsgR col-sm-2"><span id="newpetition"></span><span style="display: block;font-size: 17px;">New Petition</span></div>


        <!-- 			<div class="fb-send" data-href="https://www.testbook.com" data-colorscheme="dark"></div> -->
    <!-- 			<div class="tabFooter"  id="inviteFriends"> -->

    <!-- 			</div> -->
    <!-- 			<div class="tabFooter"  id="inviteFriends">
                    <div class="button" onclick="sendFbMessage()" style=" text-align: center;width: calc(5%);">Send Message</div>
                 </div> -->
    </div>

    <div class="container">
        <div class="row">
            <!--Left Sidebar-->
            <div class="row">
                <!--Left Sidebar-->
                <div class="row">
                    <!--Left Sidebar-->
                    <div class="col-md-3 md-margin-bottom-40">
                        <img class="img-responsive profile-img margin-bottom-0" src="http://cdn.tutorialspoint.com/images/free-training.jpg" alt="" width="220px" height="100px">

                        <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                            <li class="list-group-item active">
                                <a href="admin"><i class="fa fa-bar-chart-o"></i>News</a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin/editpetitions"><i class="fa fa-user"></i> Edit Petition</a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin/admincomments"><i class="fa fa-group"></i>Comments</a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin/adminprofilepage"><i class="fa fa-group"></i>Profiles</a>
                            </li>

                            <li class="list-group-item">
                                <a href="admin/settings"><i class="fa fa-cog"></i>Settings</a>
                            </li>
                        </ul>











                        <!--Notification-->



                        <!--End Notification-->



                        <!--Datepicker-->

                        <!--End Datepicker-->
                    </div>
                    <div class="col-md-9 md-margin-bottom-40">
                        <div class="tab-v1">
                            <ul class="nav nav-justified nav-tabs">
                                <li class="active"><a  href="admin/adminprofilepage" aria-expanded="true">Profiles</a></li>
                                <li class=""><a  href="admin/addadmin" aria-expanded="false">Add admin</a></li>
                                <li class=""><a href="admin/adminmessages" aria-expanded="false">Client Petitions</a></li>

                            </ul>
                        </div>
                        @extends('app')
                        @section('content')

                            This is a admin page

                        @stop
                        <div class="container content">
                            <!-- Top Categories -->
                            <div class="headline"><h2>Top Categories</h2></div>
                            <p class="row category margin-bottom-20">
                                <!-- Info Blocks -->
                            <div class="col-md-3">
                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-sea icon-line icon-badge"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Sports</a></h3>
                                        <p>Education..</p>
                                    </div>
                                </div>
                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-hdd-o"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Politics</a> <small>(10837)</small></h3>
                                        <p>Politics</p>
                                    </div>
                                </div>
                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-brown fa fa-desktop"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Movies</a> <small>(462)</small></h3>
                                        <p>Movies</p>
                                    </div>
                                </div> </div>
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-green icon-line icon-graduation"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Education</a> <small>(396)</small></h3>
                                        <p>Education</p>
                                    </div>
                                </div>


                                <!-- End Info Blocks -->

                                <!-- Info Blocks -->

                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-blue fa fa-bell-o"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Music</a> <small>(324)</small></h3>
                                        <p>Music</p>
                                    </div>
                                </div>

                                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                                    <i class="icon-custom icon-sm rounded-x icon-bg-orange fa fa-area-chart"></i>
                                    <div class="content-boxes-in-v3">
                                        <h3><a href="#"> Others</a> <small>(1296)</small></h3>
                                        <p>Others</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Info Blocks -->

                            <!-- Begin Section-Block -->
                            <div class="col-md-3">
                                <div class="section-block">
                                    <div class="text-center">

                                        <h3>Popular Search</h3>
                                    </div>

                                    <br>

                                    <!-- Progress Bar -->
                                    <h3 class="heading-xs no-top-space">Politics<span class="pull-right">88%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>

                                    <h3 class="heading-xs no-top-space">Movies<span class="pull-right">76%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>

                                    <h3 class="heading-xs no-top-space">Education<span class="pull-right">97%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 97%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="97" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                    <!-- End Progress Bar -->

                                    <div class="clearfix"></div>


                                </div>
                            </div>
                            <!-- End Section-Block -->
                        </div>
                        <!-- End Top Categories -->
                    </div>



                    <br> <br>



                </div>
                <!--End Left Sidebar-->

                <!-- Profile Content -->

                <!-- End Profile Content -->
            </div>




        </div>





        <!--Notification-->



        <!--End Notification-->



        <!--Datepicker-->

        <!--End Datepicker-->
    </div>
    <!--End Left Sidebar-->

    <!-- Profile Content -->

    <!-- End Profile Content -->
    </div>











    <!--Notification-->



    <!--End Notification-->



    <!--Datepicker-->

    <!--End Datepicker-->
    </div>
    <!--End Left Sidebar-->

    <!-- Profile Content -->

    <!-- End Profile Content -->
    </div>
    </body>
    </html>
