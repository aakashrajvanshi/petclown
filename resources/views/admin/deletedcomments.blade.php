@extends ('app')

@section('title')
    <title>Deleted Comments</title>
    <meta name="description" content="Deleted Comments">
@stop


@section('content')

    <!-- Side Nav Bar -->

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
                <li class="active"><a href="admin/deletedcomments">Deleted</a></li>
                <li><a href="admin/spamcomments">Spam</a></li>
                <li><a href="admin/flaggedcomments">Flagged</a></li>
            </ul>
            <div class="panel panel-default">

                @foreach($comments as $comment)
                    <div class="panel-body">
                        <p>
                            <strong><a href="/profile/{{$comment->uid}}">{{$comment->name}}</a></strong>
                            <a href="/petition/{{$comment->slug}}" class="padding5">{{$comment->heading}}</a>
                            <small class="pull-right">{{$comment->created_at}}</small>
                        </p>
                        <div>
                            {{$comment->comment}}
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="/admin/approve/{{$comment->id}}" title="Approve"><i class="fa fa-check-circle fa-lg"></i></a>
                                </li>
                                <li>
                                    <a href="admin/editcomments" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Block" id="block"><i class="fa fa-ban fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <hr class="nomargin"/>
                @endforeach
            </div>
            {!! $comments->render() !!}
        </div>
    </div>

@stop