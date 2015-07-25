@extends('app')

@section('title')
    <title>Review Idea</title>
    <meta name="description" content="Review Idea">

    @stop

@section('content')

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


        <div class="col-md-9">
            <p><strong>Idea Title: </strong>{{$idea->heading}}</p>
            <br/>
            <p><strong>Petitioning: </strong>{{$idea->petition_to}}</p>
            <br/>
            <p><strong>Content: </strong>{{$idea->content}}</p>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif


            {!! Form::Open(['method' => 'POST','files'=>'true']) !!}



            <div class="form-group">
                {!! Form::label('review_comment','Reviewed Comment') !!}
                {!! Form::textarea('review_comment',$idea->review_comment,['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('publish_comment','Published Comment') !!}
                {!! Form::textarea('publish_comment',$idea->publish_comment,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::checkbox('allow_editing',1, $idea->allow_editing ) !!} Allow User to Edit the Idea Later
            </div>

            <div class="form-group">
                {!! Form::submit('Submit Review',['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::Close() !!}

        </div>
    </div>

    @stop