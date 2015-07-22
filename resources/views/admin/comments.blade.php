@extends ('app')

@section('title')
    <title>Comments needing action</title>
    <meta name="description" content="Comments needing action">
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
                <li class="active"><a href="admin/comments">Latest</a></li>
                <li><a href="admin/approvedcomments">Approved</a></li>
                <li><a href="admin/deletedcomments">Deleted</a></li>
                <li><a href="admin/spamcomments">Spam</a></li>
                <li><a href="admin/flaggedcomments">Flagged</a></li>
            </ul>
            <div class="panel panel-default">
                @foreach($comments as $comment1)
                    <div class="panel-body">
                        <p>
                            <strong><a href="/profile/{{$comment1->uid}}">{{$comment1->name}}</a></strong>
                            <a href="/petition/{{$comment1->slug}}" class="padding5">{{$comment1->heading}}</a>
                            <small class="pull-right">{{$comment1->created_at}}</small>
                        </p>
                        <div>
                            {{$comment1->comment}}
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="/admin/approve/{{$comment1->id}}" title="Approve"><i class="fa fa-check-circle fa-lg"></i></a>
                                </li>
                                <li>
                                    <a href="admin/editcomments" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                </li>
                                <li>
                                    <a href="/admin/disapprove/{{$comment1->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
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