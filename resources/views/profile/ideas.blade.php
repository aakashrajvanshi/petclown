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
                <li class="active"><a href="profile/ideas">Latest</a></li>
            </ul>
            <br/>


            @if(count($ideas))
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="width50">Ideas</th>
                        <th class="width10">Status</th>
                        <th class="width40">Comments</th>
                    </tr>
                    </thead>
                    @foreach($ideas as $idea)
                        <tbody>
                        <tr>
                            <td>
                                <div>
                                    <p>
                                        Petitioning: {{$idea->petition_to}}
                                        <small class="pull-right">{{$idea->created_at->diffForHumans()}}</small>
                                    </p>
                                    <div>
                                        {{$idea->heading}}
                                        @if($idea->allow_editing)
                                        <ul class="list-inline pull-right">
                                            <li>
                                                <a href="/ideas/edit/{{$idea->id}}" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                            </li>
                                            <li>
                                                <a href="/ideas/delete/{{$idea->id}}" title="Delete" id="delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($idea->review_comment)
                                    Reviewed
                                @elseif($idea->publish_comment)
                                    Published
                                @else
                                    Under Review
                                @endif
                            </td>
                            <td>
                                @if($idea->review_comment)
                                    {{$idea->review_comment}}
                                @elseif($idea->publish_comment)
                                    {{$idea->publish_comment}}
                                @else
                                    No Comments
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
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
