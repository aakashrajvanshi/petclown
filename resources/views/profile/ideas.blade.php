@extends('app')
@section('title')
    <title>My Ideas</title>
    <meta name="description" content="My Ideas">
    @stop

    @section('content')

            <!--Profile Pic and Sidebar-->

    <div class="row">
        <div class="col-md-3 profile-pic">
            <div class="row">
                <div class="col-md-12 col-xs-6">
                    <img class="img-responsive img-margin-bottom img-thumbnail" alt="{{$user->name}}"
                         src="{{$user->avatar}}" width="100%">
                </div>
                <!--side navigation bar-->

                <div class="col-md-12 col-xs-6">
                    <ul class="list-group sidebar-nav">
                        <li class="list-group-item">
                            <a href="profile"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="list-group-item active">
                            <a href="profile/ideas"><i class="fa fa-pencil"></i> My Ideas</a>
                        </li>
                        <li class="list-group-item">
                            <a href="profile/edit"><i class="fa fa-cog"></i> Edit Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Profile Information-->
        <div class="col-md-9 col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="profile/ideas">My Ideas</a></li>
            </ul>
            <br/>


            @if(count($ideas))
                <div class="panel panel-default">
                    @foreach($ideas as $idea)
                        <div class="panel-body">
                            <p>
                                <strong>{{$idea->heading}}</strong>
                                <span class="verylight">(To: {{$idea->petition_to}})</span>
                                <small class="pull-right">{{$idea->created_at->diffForHumans()}}</small>
                            </p>
                            <ul class="list-inline">
                                @if($idea->review_comment)
                                    <li>
                                        Status: Reviewed
                                    </li>
                                @elseif($idea->publish_comment)
                                    <li>
                                        Status: Published
                                    </li>
                                @else
                                    <li>
                                        Status: Under Review
                                    </li>
                                @endif
                                @if($idea->allow_editing)
                                        <li class="pull-right">
                                            <a href="/ideas/delete/{{$idea->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="/ideas/edit/{{$idea->id}}" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                        </li>
                                    @else
                                        <li class="pull-right">
                                            <a href="/ideas/delete/{{$idea->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                        </li>
                                    @endif
                            </ul>
                            <p class="margintop10">
                                @if($idea->review_comment)
                                    Message from Admin: {{$idea->review_comment}}
                                @elseif($idea->publish_comment)
                                    Message from Admin:{{$idea->publish_comment}}
                                @else
                                    Message from Admin: Thanks for Submitting your Idea
                                @endif
                            </p>

                        </div>
                        <hr class="nomargin"/>

                    @endforeach
                </div>
            @else
                <div class="empty">
                    <h2>
                        Your Idea list is empty
                    </h2>
                    <button type="button" class="btn btn-u">
                        <a href="{{ url('/ideas/create') }}">Create A New Idea</a>
                    </button>
                </div>

            @endif



            {!! $ideas->render() !!}

        </div>
    </div>

@stop
