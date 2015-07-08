<div class="profile profile-body">
    <div class="panel panel-profile">
        <div class="panel-heading overflow-h">
            <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments"></i>Reasons for Signing</h2>
        </div>
        <div class="panel-body margin-bottom-50">
            @foreach ($comments as $comment)
                <div class="media media-v2">
                    <a class="pull-left" href="/profile/{{$comment->user->id}}">
                        <img class="media-object rounded-x" src="{{$comment->user->avatar}}"
                             alt="{{$comment->user->name}}">
                    </a>

                    <div class="media-body">
                        <h4 class="media-heading">
                            <strong>
                                @if($comment->anon)
                                    Anonymous
                                @else
                                    <a href="/profile/{{$comment->user->id}}">{{$comment->user->name}}</a>
                                @endif
                            </strong>
                            <small>{{$comment->created_at->diffForHumans()}}</small>
                        </h4>
                        <p>{{$comment->comment}}</p>
                        <ul class="list-inline pull-left">
                            <li id="likecount-{{$comment->id}}">{{count($comment->likedby)}} Likes</li>
                        </ul>
                        <ul class="list-inline pull-right bmargin-10">
                            @if($comment->likedby->contains(Auth::user()))
                                <li class="like" id="comment-{{$comment->id}}"><a href="/unlike/{{$comment->id}}"><i
                                                class="expand-list rounded-x fa fa-heart icon-color-red"></i></a>
                                </li>
                            @else
                                <li class ="like" id="comment-{{$comment->id}}"><a href="/like/{{$comment->id}}"><i
                                                class="expand-list rounded-x fa fa-heart"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div><!--/end media media v2-->

            @endforeach

{!! $comments->render() !!}
</div>
</div>
</div>