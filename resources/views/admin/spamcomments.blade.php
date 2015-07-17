@extends ('app')

@section('title')
    <title>Spam Comments</title>
    <meta name="description" content="Spam Comments">

@stop

@section('content')

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav">
                <li class="list-group-item active">
                    <a href="admin/comments">Comments</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/petitionlist">Petitions</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/blockedusers">Blocked Users</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li><a href="admin/comments">Latest Comments</a></li>
                <li class="active"><a href="admin/spamcomments">Spam</a></li>
                <li><a href="admin/flaggedcomments">Flagged Comments</a></li>
                <li><a href="admin/deletedcomments">Deleted Comments</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Comment on petition<a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editcomments"><i class="fa fa-pencil"></i></a></p>
                </div>
                <div class="panel-body">
                    <p>Comment on petition<a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editcomments"><i class="fa fa-pencil"></i></a></p>
                </div>
                <div class="panel-body">
                    <p>Comment on petition<a class="padding10" href="#">By user</a><a class="pull-right" href="admin/editcomments"><i class="fa fa-pencil"></i></a></p>
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