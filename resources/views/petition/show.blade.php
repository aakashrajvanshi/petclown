@extends('app')
@section('title')
    {{-- Regular HTML Meta Tags --}}
    <title>{{$petition->heading}}</title>
    <meta name="description" content="{{$petition->excerpt}}">

    {{-- Facebook Open Graph Meta --}}
    <meta property="og:title" content="{{$petition->excerpt}}" />
    <meta property="og:site_name" content="Mr. Petition"/>
    <meta property="og:url" content="http://mrpetition.com/petition/{{$petition->slug}}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{$petition->excerpt}}" />
    <meta property="article:author" content="https://www.facebook.com/mrpetition" />
    <meta property="fb:app_id" content="1640792816171265"/>

    {{-- Twitter Card Meta --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@mr_petition">
    <meta name="twitter:title" content="{{$petition->heading}}">
    <meta name="twitter:description" content="{{$petition->excerpt}}">
    <meta name="twitter:image" content="http://mrpetition.com{{$petition->image}}">
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
                                                                                       src="{{cdn($petition->user->avatar)}}">{{$petition->user->name}}</a></div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <img src="{{cdn($petition->image)}}" width="100%"/>
            <div class="petition-tags">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-calendar"></i> {{ date("d F Y",strtotime($petition->created_at)) }}</li>
                    <li><i class="fa fa-comments"></i>
                            {{$num = count($comments)}}
                            @if($num==1)
                                Comment
                            @else
                                Comments
                            @endif
                        </li>
                    <li><i class="fa fa-tags"></i>
                        <?php $last = count($tags); ?>
                        @foreach($tags as $tag)
                            @if($last-- > 1)
                                {{$tag->tag}},
                            @else
                                {{$tag->tag}}
                            @endif
                        @endforeach
                    </li>
                    <li><i class="fa fa-folder-open"></i>
                        <?php $last = count($categories); ?>
                        @foreach($categories as $category)
                            @if($last-- > 1)
                                {{ $category->category }},
                            @else
                                {{ $category->category }}
                            @endif
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="contentmargin">
                {!! $petition->content !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="sidebar hidden-sm hidden-xs visible-lg visible-md" data-spy="affix" data-offset-top="100" data-offset-bottom="350">
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
                            @if(Session::put('url.intended', URL::current()))

                            @endif
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
                                        <li>
                                            <a onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://petclown.com/petition/{{$petition->slug}}'), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="javascript:window.open('https://plus.google.com/share?url=' + encodeURIComponent('https://petclown.com/petition/{{$petition->slug}}'), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter-share-button"
                                                href="https://twitter.com/intent/tweet?text={{$petition->heading}}&hashtags=forFun,Petclown&url=http://petclown.com/petition/{{$petition->slug}}&via=petclown">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mymargin"/>
                                <div class="panel panel-default petition-from">
                                    <img class="profileimagexs rounded-x" src="{{cdn(Auth::user()->avatar)}}">{{Auth::user()->name}}
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
                                    <img class="profileimagexs rounded-x" src="{{cdn(Auth::user()->avatar)}}">{{Auth::user()->name}}
                                </div>
                                {!! Form::Open(['url' => '/comment']) !!}
                                        <!-- Content Form Input -->
                                <div class="form-group">
                                    {!! Form::textarea('comment',null,['class' => 'form-control', 'placeholder'=>'I support this petition because ...', 'rows'=>'5']) !!}
                                    {!! Form::hidden('post_id', $petition->id) !!}
                                </div>

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


        <!--- Mobile footer --->

        <footer class="navbar-default navbar-fixed-bottom hidden-lg hidden-md visible-xs visible-sm">
            <div class="mobile-footer">
                @if(Auth::guest())
                    <ul class="share-request list-inline">

                        <li class="pull-left">
                            <span class="badge">{{count($petition->supportedby)}}</span> supporters
                        </li>
                        <li class="pull-right">
                            <a href="addcomment/{{$petition->slug}}">
                                <button class="btn btn-u">Login to Support</button>
                            </a>
                        </li>
                    </ul>
                @elseif($petition->supportedby->contains(Auth::user()))
                    <ul class="share-request list-inline">

                        <li class="pull-left col-xs-2 col-sm-1">
                            <i class="fa fa-check-circle fa-2x"></i>
                        </li>
                        <li class="col-xs-7 col-sm-9">
                            <p>Please share</p>
                            <ul class="my-social-icons icon-rounded icon-zoom list-unstyled list-inline">
                                <li>
                                    <a onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(location.href), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="javascript:window.open('https://plus.google.com/share?url=' + encodeURIComponent(location.href), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter-share-button"
                                       href="https://twitter.com/intent/tweet?text={{$petition->heading}}&hashtags=forFun,Petclown&url=http://petclown.com/petition/{{$petition->slug}}&via=petclown">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="pull-right col-xs-3 col-sm-2"><a href="addcomment/{{$petition->slug}}">Add Comment</a></li>

                    </ul>
                @else
                    <ul class="share-request list-inline">
                        <li class="pull-left">
                            <span class="badge">{{count($petition->supportedby)}}</span> supporters
                        </li>
                        <li class="pull-right">
                            <a href="addcomment/{{$petition->slug}}">
                                <button class="btn btn-u">Support this Petition</button>
                            </a></li>
                    </ul>
                @endif

            </div>
        </footer>









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

