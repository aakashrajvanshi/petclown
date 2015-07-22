@extends ('app')

@section('title')
    <title>Petition List</title>
    <meta name="description" content="Petition List">

    @stop

    @section('content')

            <!-- Side Nav Bar --->

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav">
                <li class="list-group-item">
                    <a href="admin/createpetition">Create Petition</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/petitionlist">Petitions</a>
                </li>
                <li class="list-group-item active">
                    <a href="admin/petitionlist">Ideas</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/comments">Comments</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/blockedusers">Blocked Users</a>
                </li>
            </ul>
        </div>

        <!-- Content -->


        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="admin/petitionlist">Latest</a></li>
                <!--
                <li><a href="admin/deletedpetitions">Deleted</a></li>
                -->
            </ul>
            <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <strong><a href="#">User</a></strong>
                            petitioning: A celeb
                            <small class="pull-right">2 min ago</small>
                        </p>
                        <div>
                            <span class="label label-warning">Draft</span>
                            <a href="#">Petition idea</a>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="#" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <hr class="nomargin"/>
            </div>
        </div>
    </div>

@stop