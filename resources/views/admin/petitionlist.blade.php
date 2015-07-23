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
                <li class="list-group-item active">
                    <a href="admin/petitionlist">Petitions</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/idealist">Ideas</a>
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
                <li><a href="admin/deletedpetitions">Deleted</a></li>
            </ul>
            <div class="panel panel-default">
                @foreach($petitions as $petition)
                    <div class="panel-body">
                        <p>
                            <strong><a href="/profile/{{$petition->id}}">{{$petition->user->name}}</a></strong>
                            petitioning: {{$petition->petition_to}}
                            <small class="pull-right">{{$petition->created_at}}</small>
                        </p>
                        <div>
                            @if($petition->published)
                                <span class="label label-info">Published</span>
                                <a href="/petition/{{$petition->slug}}">{{$petition->heading}}</a>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <a href="admin/editpetition/{{$petition->slug}}" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="/admin/delpetition/{{$petition->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                    </li>
                                </ul>
                            @else
                                <span class="label label-warning">Draft</span>
                                <a href="/petition/{{$petition->slug}}">{{$petition->heading}}</a>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <a href="admin/editpetition/{{$petition->id}}" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="/admin/delpetition/{{$petition->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                    </li>
                                </ul>
                            @endif
                        </div>

                    </div>
                    <hr class="nomargin"/>
                @endforeach
            </div>
            {!! $petitions->render() !!}
        </div>
    </div>

@stop