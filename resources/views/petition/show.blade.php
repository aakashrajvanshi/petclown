@extends('app')
@section('title')
    <title>Petitions</title>
    <meta name="description" content="Petitions listings">
@stop


@section('content')


    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="petition-to">Petitioning: <strong>{{$petition->petition_to}}</strong></div>
            <h1 class="petition-heading">{{$petition->heading}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="petition-from"><a href="/profile/{{$petition->user->id}}"><img class="profileimagexs rounded-x"
                                                                                       src="{{$petition->user->avatar}}">{{$petition->user->name}}</a></div>
        </div>
    </div>





    <div class="row">

       <div class="col-md-8">
           <img src="{{$petition->image}}" width="100%"/>
           <div class="petition-tags">
               <ul class="list-unstyled list-inline">
                   <li><i class="fa fa-calendar"></i> {{ date("d F Y",strtotime($petition->created_at)) }}</li>
                   <li><i class="fa fa-comments"></i> <a href="#">
                           {{$num = count($comments)}}
                           @if($num==1)
                               Comment
                           @else
                               Comments
                           @endif
                       </a></li>
                   <li><i class="fa fa-tags"></i>
                       <?php $last = count($tags); ?>
                       @foreach($tags as $tag)
                           @if($last-- > 1)
                               <a href="#">{{$tag->tag}}</a>,
                           @else
                               <a href="#">{{$tag->tag}}</a>
                           @endif
                       @endforeach
                   </li>
                   <li><i class="fa fa-folder-open"></i>
                       <?php $last = count($categories); ?>
                       @foreach($categories as $category)
                           @if($last-- > 1)
                               <a href="#">{{ $category->category }}</a>,
                           @else
                               <a href="#">{{ $category->category }}</a>
                           @endif
                       @endforeach
                   </li>
               </ul>
           </div>
           <div class="contentmargin">
               {!!$petition->content!!}
           </div>

       </div>

       <div class="col-md-4">
           <div class="sidebar" data-spy="affix" data-offset-top="100" data-offset-bottom="350">
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
               <!--
               <ul class="my-social-icons icon-rounded icon-zoom list-unstyled list-inline">
                   <li><h3 class="shareit">Be Social!</h3></li>
                   <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                   <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
               </ul>
               -->
               <div class="panel panel-u">
                   <div class="panel-body">
                       @if (Auth::guest())
                           <p align="center"><strong>Login to Support</strong></p>
                           <a class="btn btn-block btn-googleplus-inversed rounded" href="{{ url('/oauth/google') }}">
                               <i class="fa fa-google-plus"></i> Google
                           </a>
                           <a class="btn btn-block btn-facebook-inversed rounded" href="{{ url('/oauth/facebook') }}">
                               <i class="fa fa-facebook"></i> Facebook
                           </a>
                           <hr class="mymargin"/>

                           @if (count($errors) > 0)
                               <div class="alert alert-danger">
                                   <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif
                           <div class="divmargin">
                               <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                   <div class="form-group">
                                       <div>
                                           <input type="email" class="form-control" name="email" placeholder="Your Email"
                                                  value="{{ old('email') }}">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div>
                                           <input type="password" class="form-control" placeholder="Your Password"
                                                  name="password">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <div>
                                           <button type="submit" class="btn btn-u rounded">Login</button>
                                           <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your
                                               Password?</a>
                                       </div>
                                   </div>
                               </form>
                               <div align="right">
                                   <strong><a href="{{ url('/auth/register') }}">Register Here</a></strong>
                               </div>
                           </div>
                       @else
                           @if($petition->supportedby->contains(Auth::user()))
                               <div align="center">
                                   <h3><i class="icon-custom icon-sm rounded-x icon-bg-u fa fa-check"></i> Thanks, please share!</h3>
                                   <ul class="my-social-icons icon-rounded icon-zoom list-unstyled list-inline">
                                       <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                                       <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                   </ul>
                               </div>
                               <hr class="mymargin"/>
                               <div class="panel panel-default petition-from">
                                   <img class="profileimagexs rounded-x" src="{{Auth::user()->avatar}}">{{Auth::user()->name}}
                               </div>
                               {!! Form::Open(['url' => '/comment']) !!}
                                       <!-- Content Form Input -->
                               <div class="form-group">
                                   {!! Form::textarea('comment',null,['class' => 'form-control', 'placeholder'=>'Add a comment...', 'rows'=>'5']) !!}
                                   {!! Form::hidden('post_id', $petition->id) !!}
                               </div>
                               <!--Petition Submit Button-->
                               <div class="form-group">
                                   {!! Form::submit('Submit',['class' => 'btn btn-u form-control']) !!}
                               </div>
                               {!! Form::Close() !!}
                           @else
                               <p align="center"><strong>Support this Petition</strong></p>
                               <div class="panel panel-default petition-from">
                                   <img class="profileimagexs rounded-x" src="{{Auth::user()->avatar}}">{{Auth::user()->name}}
                               </div>
                               {!! Form::Open(['url' => '/comment']) !!}
                                       <!-- Content Form Input -->
                               <div class="form-group">
                                   {!! Form::textarea('comment',null,['class' => 'form-control', 'placeholder'=>'I support this petition because ...', 'rows'=>'5']) !!}
                                   {!! Form::hidden('post_id', $petition->id) !!}
                               </div>
                               <!-- Content Form Input -->
                               <!--
                        <div class="form-group">
                            {{---
                            {!! Form::checkbox('anon',1, false) !!} Do not show my name (show Anonymous)
                            --}}
                        </div>
                        -->
                               <!--Petition Submit Button-->
                               <div class="form-group">
                                   {!! Form::submit('Submit',['class' => 'btn btn-u form-control']) !!}
                               </div>
                               {!! Form::Close() !!}
                           @endif
                       @endif
                   </div>
               </div>
           </div>



       </div>



   </div>

    <div class="row">
        <div class="col-md-8">
            <div id="pagedcomments">
                @include('comments.list')
            </div>
            <div class="col-md-4"></div>

        </div>

    </div>


@stop