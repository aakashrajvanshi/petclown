@extends ('app')

@section('title')
    <title>Deleted Petitions</title>
    <meta name="description" content="Deleted Petitions">
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
                    <a href="admin/comments">Comments</a>
                </li>
                <li class="list-group-item">
                    <a href="admin/blockedusers">Blocked Users</a>
                </li>
            </ul>
        </div>

        <!-- content -->


        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li><a href="admin/petitionlist">Published</a></li>
                <li class="active"><a href="admin/deletedpetitions">Deleted</a></li>
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
                            <a href="/petition/{{$petition->slug}}">{{$petition->heading}}</a>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="/admin/undelpetition/{{$petition->id}}" title="Approve"><i class="fa fa-check-circle fa-lg"></i></a>
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
            {!! $petitions->render() !!}

        </div>
    </div>

@stop