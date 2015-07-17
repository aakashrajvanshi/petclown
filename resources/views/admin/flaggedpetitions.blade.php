@extends ('app')

@section('title')
    <title>Flagged Petitionss</title>
    <meta name="description" content="Flagged Petitions">

@stop

@section('content')

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav">
                <li class="list-group-item">
                    <a href="admin/comments">Comments</a>
                </li>
                <li class="list-group-item active">
                    <a href="admin/petitionlist">Petitions</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/blockedusers">Blocked Users</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li><a href="admin/petitionlist">Latest Petitions</a></li>
                <li><a href="admin/spampetitions">Spam</a></li>
                <li class="active"><a href="admin/flaggedpetitions">Flagged Petitions</a></li>
                <li><a href="admin/deletedpetitions">Deleted Petitions</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Petitioning: Admin <a href="#">Petition by the user</a><a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editpetitions"><i class="fa fa-pencil"></i></a></p>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Admin <a href="#">Petition by the user</a><a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editpetitions"><i class="fa fa-pencil"></i></a></p>
                </div>
                <div class="panel-body">
                    <p>Petitioning: Admin <a href="#">Petition by the user</a><a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editpetitions"><i class="fa fa-pencil"></i></a></p>
                </div>
            </div>
            <ul class="pagination">
                <li class="disabled"><span><i class="fa fa-angle-double-left"></i></span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#" rel="next"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>

@stop