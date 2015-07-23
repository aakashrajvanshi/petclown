@extends ('app')

@section('title')
    <title>Idea List</title>
    <meta name="description" content="Idea List">

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
                <li class="active"><a href="admin/idealist">Latest</a></li>
                <li><a href="admin/deletedideas">Deleted</a></li>
            </ul>
            <div class="panel panel-default">
                @foreach($ideas as $idea)
                    <div class="panel-body">
                        <p>
                            <strong><a href="/profile/{{$idea->id}}">{{$idea->user->name}}</a></strong>
                            petitioning: {{$idea->petition_to}}
                            <small class="pull-right">{{$idea->created_at}}</small>
                        </p>
                        <div>
                            <a href="/idea/{{$idea->slug}}">{{$idea->heading}}</a>
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="/admin/delidea/{{$idea->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <hr class="nomargin"/>
                @endforeach
            </div>
            {!! $ideas->render() !!}
        </div>
    </div>

@stop