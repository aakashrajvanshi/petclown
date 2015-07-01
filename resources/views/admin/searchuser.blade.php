@extends('app')
@section('content')



    @stop




            <!-- My Changesss  -->
    <html>
    <body>
    <head>
        <title>SearchUser</title>
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
                            <li class="list-group-item">
                                <a href="admin"><i class="fa fa-bar-chart-o"></i>Petitions</a>
                            </li>
                            <li class="list-group-item ">
                                <a href="admin/admincomments"><i class="fa fa-group">Comments</i><span class="badge">10</span></a>
                            </li>
                            <li class="list-group-item  active">
                                <a href="admin/searchuser"><i class="fa fa-user"></i>User</a>
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
                                <li class="active"><a  href="admin/searchuser" aria-expanded="true">SearchUser</a></li>
                                <li class=""><a  href="admin/blockuser" aria-expanded="false">BlockedUser</a></li>
                                <li class=" "><a href="admin/useradmin" aria-expanded="false">Messages</a></li>

                            </ul>
                        </div>
                        <div class="search-block">
                            <div class="container">
                                <div class="col-md-6 col-md-offset-1">
                                    <h2 align="middle">Search User</h2>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button"><i class="fa fa-search"></i></button>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div><hr>
                        <p style="margin-bottom: 20px;">
                        <div class="table-search-v2 panel panel-dark margin-bottom-50">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-globe"></i>Search Results</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th class="hidden-sm">About</th>
                                        <th>Contacts</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h3><a href="#">Raju</a></h3>
                                        </td>
                                        <td class="td-width">

                                            <p>Raju Bairi   9030738306  Karimnagar  ComputerScience</p>
                                            <small class="hex">Joined February 28, 2014</small>
                                        </td>
                                        <td>Others
                                          <!--  <ul class="list-inline s-icons">
                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <span><a href="#">info@example.com</a></span>-->
                                        </td>
                                        <td>
                                            <ul class="list-inline table-buttons">
                                                <li><button type="button" class="btn-u btn-u-sm btn-u-dark"><i class="fa fa-trash-o"></i></button></li>

                                                <li><button type="button" class="btn-u btn-u-sm btn-u-dark"><i class="fa fa-envelope"></i></button></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3><a href="#">Ramu</a></h3>
                                        </td>
                                        <td>

                                            <p>Details</p>
                                            <small class="hex">Joined March 2, 2014</small>
                                        </td>
                                        <td>Others
                                            </td>
                                        <!--<td>
                                            <ul class="list-inline s-icons">
                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <span><a href="#">info@example.com</a></span>

                                        </td>-->
                                        <td>
                                            <ul class="list-inline table-buttons">
                                                <li><button type="button" class="btn-u btn-u-sm btn-u-dark"><i class="fa fa-trash-o"></i></button></li>

                                                <li><button type="button" class="btn-u btn-u-sm btn-u-dark"><i class="fa fa-envelope"></i></button></li>
                                            </ul>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>
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
