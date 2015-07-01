@extends('app')
@section('content')



    @stop




            <!-- My Changesss  -->
    <html>
    <body>
    <head>
        <title>Comments</title>

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
            h2.heading-xs {
                font-size: 16px;
                line-height: 22px;
            }
            .mCustomScrollbar {
                height: 320px;
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
                            <li class="list-group-item">
                                <a href="admin"><i class="fa fa-bar-chart-o"></i>Petitions</a>
                            </li>
                            <li class="list-group-item active">
                                <a href="admin/admincomments"><i class="fa fa-group">Comments</i><span class="badge">10</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin/searchuser"><i class="fa fa-user"></i>User</a>
                            </li>
                        </ul>











                        <!--Notification-->



                        <!--End Notification-->



                        <!--Datepicker-->

                        <!--End Datepicker-->


                        <!---Notification...........




                        <div class="panel-heading-v2 overflow-h">
                            <h2 class="heading-xs pull-left"><i class="fa fa-bell-o"></i> Notification</h2>
                            <a href="#"><i class="fa fa-cog pull-right"></i></a>
                        </div>
                        <ul class="list-unstyled mCustomScrollbar margin-bottom-20 _mCS_1 mCS-autoHide" data-mcs-theme="minimal-dark" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                    <li class="notification">

                                        <div class="overflow-h" style="margin-bottom: 15px">
                                            <span><strong>Raju</strong> Supported <strong>Petition 1.</strong></span><br>
                                            <small>Two minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="notification">

                                        <div class="overflow-h" style="margin-bottom: 15px">
                                            <span><strong>Taylor </strong> Supported <strong> Petition.</strong></span><br>
                                            <small>Today 18:25 pm</small>
                                        </div>
                                    </li>
                                    <li class="notification">

                                        <div class="overflow-h" style="margin-bottom: 15px">
                                            <span><strong>Ramuu</strong> Comments on <strong> Petition.</strong></span><br>
                                            <small>Yesterday 1:07 pm</small>
                                        </div>
                                    </li>

                                </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 199px; max-height: 286px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
                            -->


                    </div>
                    <div class="col-md-9 md-margin-bottom-40">
                        <div class="tab-v1">
                            <ul class="nav nav-justified nav-tabs">

                                <li class="active"><a  href="admin/admincomments" aria-expanded="false">ApprovedComments</a></li>
                                <li class=""><a  href="admin/adminflaggedcomments" aria-expanded="false">FlaggedComments</a></li>
                                <li class=""><a  href="admin/adminspam" aria-expanded="false">Spam</a></li>
                                <li class=""><a  href="admin/admindeletecomments" aria-expanded="false">Delete</a></li>

                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-md-12">


                                <!-- Clients Block-->
                                <div class="row clients-page">

                                    <div class="col-md-9"><hr>
                                        <h3><strong>Raj</strong></h3>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o color-black"></i>&nbsp;Date: 17/09/2015</li>

                                            <li><i class="fa fa-briefcase color-black"></i>&nbsp;rajuiiit565@gmail.com </li>
                                        </ul>

                                        <p>Sed viverra cursus nibh,sed consectetur aipsu m asoallicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur</p>
                                        <div class="icons">
                                            <p style="font-size:15px;font-color:red">

                                                <a href="#"><span><i class="fa fa-exclamation-circle">&nbsp;Unapprove</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-arrow-down">&nbsp;Spam</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-edit">&nbsp;Edit</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-trash">&nbsp;Delete</i></span></a>&nbsp;&nbsp;&nbsp;
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-mid-3" style="margin-top: 20px;">


                                        <p><br><a href="#"><strong> Petition 1 </strong></a></p>

                                    </div>
                                </div><hr>
                                <!-- End Clients Block-->
                                <!-- Clients Block-->
                                <div class="row clients-page">

                                    <div class="col-md-9">
                                        <h3><strong>Rajesh</strong></h3>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o color-black"></i>&nbsp;Date: 21/08/2014</li>

                                            <li><i class="fa fa-briefcase color-black"></i>&nbsp;ramuiiit565@gmail.com</li>
                                        </ul>
                                        <p>Nullam elementum aatincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, </p>
                                        <div class="icons">
                                            <p style="font-size:15px;font-color:red">

                                                <a href="#"><span><i class="fa fa-exclamation-circle">&nbsp;Unapprove</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-arrow-down">&nbsp;Spam</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-edit">&nbsp;Edit</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-trash">&nbsp;Delete</i></span></a>&nbsp;&nbsp;&nbsp;
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-mid-3" style="margin-top: 20px;">
                                        <p><br><a href="#"><strong>Petition 2 </strong></a></p>

                                        </div>
                                </div><hr>



                                <div class="row clients-page">

                                    <div class="col-md-9">
                                        <h3><strong>Raj</strong></h3>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o color-black"></i>&nbsp;Date: 17/09/2015</li>

                                            <li><i class="fa fa-briefcase color-black"></i>&nbsp;rajuiiit565@gmail.com </li>
                                        </ul>

                                        <p>Sed viverra cursus nibh, sed consectetur ipsum asollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur</p>
                                        <div class="icons">
                                            <p style="font-size:15px;font-color:red">

                                                <a href="#"><span><i class="fa fa-exclamation-circle">&nbsp;Unapprove</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-arrow-down">&nbsp;Spam</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-edit">&nbsp;Edit</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-trash">&nbsp;Delete</i></span></a>&nbsp;&nbsp;&nbsp;
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-mid-3" style="margin-top: 20px;">
                                        <p><br><a href="#"><strong>Petition 1 </strong></a></p>


                                    </div>
                                </div><hr>
                                <div class="row clients-page">

                                    <div class="col-md-9">
                                        <h3><strong>Raj</strong></h3>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o color-black"></i>&nbsp;Date: 17/09/2015</li>

                                            <li><i class="fa fa-briefcase color-black"></i>&nbsp;rajuiiit565@gmail.com </li>
                                        </ul>

                                        <p>Sed viverra cursus nibh, sed consectetur ipsum asollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur</p>
                                        <div class="icons">
                                            <p style="font-size:15px;font-color:red">

                                                <a href="#"><span><i class="fa fa-exclamation-circle">&nbsp;Unapprove</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-arrow-down">&nbsp;Spam</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-edit">&nbsp;Edit</i></span></a>&nbsp;&nbsp;&nbsp;
                                                <a href="#"><span><i class="fa fa-trash">&nbsp;Delete</i></span></a>&nbsp;&nbsp;&nbsp;
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-mid-3">


                                        <p><br><a href="#"><strong>Petition 1 </strong></a></p>
                                    </div>
                                </div><hr>









                                <!-- Pagination -->
                                <div class="text-center md-margin-bottom-30">
                                    <ul class="pagination">
                                        <li><a href="#">Pre</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">12</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                                <!-- End Pagination -->
                            </div><!--/col-md-9-->


                        </div>
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
