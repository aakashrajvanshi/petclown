@extends ('app')

@section('title')
    <title>Flagged Comments</title>
    <meta name="description" content="Flagged Comments">
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
                <li class="list-group-item">
                    <a href="admin/ideas">Ideas</a>
                </li>
                <li class="list-group-item active">
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
                <li><a href="admin/comments">Latest</a></li>
                <li><a href="admin/approvedcomments">Approved</a></li>
                <li><a href="admin/deletedcomments">Deleted</a></li>
                <li><a href="admin/spamcomments">Spam</a></li>
                <li class="active"><a href="admin/flaggedcomments">Flagged</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><a href="#" class="padding10">petition link</a>Comment on petition<a class="padding10" href="#">By user</a><small class="pull-right">2 min ago</small></p>
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="#"><i class="fa fa-check-circle fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="admin/editcomments"><i class="fa fa-pencil fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trash-o fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-ban fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
                <hr class="nomargin"/>
                <div class="panel-body">
                    <p><a href="#" class="padding10">petition link</a>Comment on petition<a class="padding10" href="#">By user</a><small class="pull-right">2 hours ago</small></p>
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="#"><i class="fa fa-check-circle fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="admin/editcomments"><i class="fa fa-pencil fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trash-o fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-ban fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
                <hr class="nomargin"/>
                <div class="panel-body">
                    <p><a href="#" class="padding10">petition link</a>Comment on petition<a class="padding10" href="#">By user</a><small class="pull-right">5 hours ago</small></p>
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="#"><i class="fa fa-check-circle fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="admin/editcomments"><i class="fa fa-pencil fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trash-o fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-ban fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
                <hr class="nomargin"/>
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