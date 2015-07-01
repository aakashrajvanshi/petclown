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
                                <a href="admin/settings"><i class="fa fa-cog"></i>s Settings</a>
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
                                <li class="#"><a  href="admin/profilepage" aria-expanded="true">Profiles</a></li>
                                <li class="active"><a  href="admin/addadmin" aria-expanded="false">Add admin</a></li>
                                <li class=""><a href="admin/adminmessages" aria-expanded="false">Messages</a></li>

                            </ul>
                        </div>
                        <div class="security-settings">
                            <h3>Create New Admin</h3><br>
                            <form class="form-horizontal email-form" role="form">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="email">
                                        Email:
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" id="email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="pwd">
                                        Mobile Number:
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" id="pwd" placeholder="Enter your Password">
                                    </div>
                                </div>

                                <div align="middle">
                                    <button type="button" class="btn-u btn-u-default">Cancel</button>
                                    <button class="btn-u" type="submit">Send Mail</button></br>
                                    <h4>UserId and Password will send to New admin Mail</h4>
                                </div>
                            </form>
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
