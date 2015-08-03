@extends ('app')

@section('title')
    <title>Comments</title>
    <meta name="description" content="Comments">
@stop

@section('content')

    <strong>
        {{$support = count($petition->supportedby)}} Supporters
        @if($support<=50)
            <span class="right">Goal: {{$target=100}}</span>
        @elseif($support>75&&$support<=400)
            <span class="right">Goal: {{$target=500}}</span>
        @elseif($support>400&&$support<3000)
            <span class="right">Goal: {{$target=5000}}</span>
        @else
            <span class="right">Goal: {{$target=20000}}</span>
        @endif
    </strong>

    <div class="progress goal">
        <div class="progress-bar progress-bar-success" role="progressbar" style="width:{{$support*100/$target}}%">
            <span class="sr-only"></span>
        </div>
    </div>

    <div class="panel panel-u">
        <div class="panel-body">
            <p align="center"><strong>Petitioning: {{$petition->petition_to}}</strong></p>
            <p align="center">{{$petition->heading}}</p>
            <div class="panel panel-default petition-from">
                <img class="profileimagexs rounded-x" src="{{Auth::user()->avatar}}">{{Auth::user()->name}}
            </div>
            {!! Form::Open(['url' => '/comment']) !!}
                    <!-- Content Form Input -->
            <div class="form-group">
                {!! Form::textarea('comment',null,['class' => 'form-control', 'placeholder'=>'Add a comment...', 'rows'=>'5']) !!}
                {!! Form::hidden('post_id', $petition->id) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit',['class' => 'btn btn-u form-control']) !!}
            </div>
            {!! Form::Close() !!}

        </div>
    </div>


    @stop