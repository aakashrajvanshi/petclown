@extends('app')
@section('content')
    a

@stop
<style type="text/css">
    .tabHeadersWrapper {
        border-bottom: 1px solid #00ACB9;
    }
    .currentTabItem, .tabItem:active {
        background-color: #00ACB9;
        border-radius: 5px 5px 0 0;
        color: #FFF;
        font-weight: 700;
    }
    .tabItem {
        display: table-cell;
        vertical-align: middle;
        padding: 5px 30px;
        text-transform: uppercase;
        height: 30px;
        margin: auto;
        text-align: center;
        cursor: pointer;
        transition: all .2s linear 0s;
        -webkit-transition: all .2s linear 0s;
        -moz-transition: all .2s linear 0s;
        -o-transition: all .2s linear 0s;
        width: 25%;
    }
</style>
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
                            <a href="admin"><i class="fa fa-bar-chart-o"></i>Newsss</a>
                        </li>
                        <li class="list-group-item active">
                            <a href="admin/editpetitions"><i class="fa fa-user"></i> Edit Petiition</a>
                        </li>
                        <li class="list-group-item">
                            <a href="admin/admincomments"><i class="fa fa-group"></i>Comments</a>
                        </li>
                        <li class="list-group-item">

                            <a href="admin/adminprofilepage"><i class="fa fa-group"></i>Profile</a>

                        </li>

                        <li class="list-group-item">
                            <a href="admin/settings"><i class="fa fa-cog"></i> sSettings</a>
                        </li>
                    </ul>
                    <!--Notification-->

                    <!--End Notification-->

                    <!--Datepicker-->

                    <!--End Datepicker-->


                    <!--Notifications-->

                    <div class="panel-heading-v2 overflow-h">
                        <h2 class="heading-xs pull-left"><i class="fa fa-bell-o"></i> Notification</h2>
                        <a href="#"><i class="fa fa-cog pull-right"></i></a>
                    </div>
                    <ul class="list-unstyled mCustomScrollbar margin-bottom-20 _mCS_1 mCS-autoHide" data-mcs-theme="minimal-dark" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                <li class="notification">

                                    <div class="overflow-h">
                                        <span><strong>Raju</strong> Supported <strong>Petition 1.</strong></span><br>
                                        <small>Two minutes ago</small>
                                    </div>
                                </li>
                                <li class="notification">

                                    <div class="overflow-h">
                                        <span><strong>Taylor </strong> Supported <strong> Petition.</strong></span><br>
                                        <small>Today 18:25 pm</small>
                                    </div>
                                </li>
                                <li class="notification">

                                    <div class="overflow-h">
                                        <span><strong>Ramu</strong> Comments on <strong> Petition.</strong></span><br>
                                        <small>Yesterday 1:07 pm</small>
                                    </div>
                                </li>

                            </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 199px; max-height: 286px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>



                </div>
                <div class="col-md-9 row margin-bottom-80">
                    <div class="tab-v1">
                        <ul class="nav nav-justified nav-tabs">
                            <li class="active"><a  href="admin/editpetitions" aria-expanded="true">RecentViewed</a></li>
                            <li class=""><a href="admin/mostviewed" aria-expanded="false">Most Viewed</a></li>
                            <li class=""><a   href="admin/mostsupport" aria-expanded="false">Most Support</a></li>

                        </ul>
                    </div><hr>
                    <div class="table-search-v2 panel panel-dark margin-bottom-50">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-globe"></i>Block List</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th class="hidden-sm">Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h3>Raju</h3>
                                    </td>
                                    <td>rajuiiit565@gmail.com</td>
                                    <td><a href="#">Undo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Ramu</h3>
                                    </td>
                                    <td>ramu@gmail.com
                                    </td>

                                    <td>
                                        <a href="#">Undo</a>
                                    </td>
                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>




            </div>
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











<!--Notification-->



<!--End Notification-->



<!--Datepicker-->

<!--End Datepicker-->
</div>
<!--End Left Sidebar-->

<!-- Profile Content -->

<!-- End Profile Content -->
</div>