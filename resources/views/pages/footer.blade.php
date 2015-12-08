<!--=== Footer ===-->
<div id="footer-default" class="footer-default">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>About</h2></div>
                    <p class="margin-bottom-25 md-margin-bottom-40">Mr. Petition is a comic website for raising silly, funny, or completely stupid petitions.</p>
                    <!-- End About -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div>
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                        <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                        <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->

                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Popular Petitions -->
                    <div class="posts">
                        <div class="headline"><h2>Trending Petitions</h2></div>
                        @foreach($trending->slice(0, 3) as $petition)
                        <dl class="dl-horizontal">
                            <dt><a href="petition/{{$petition->slug}}"><img src="{{cdn($petition->image_thumb)}}" alt="{{$petition->petition_to}}"/></a></dt>
                            <dd>
                                <p><h5 class="footer-to">To: {{$petition->petition_to}}</h5><a href="petition/{{$petition->slug}}">
                                    @if (strlen($petition->heading)>58)
                                        {{substr($petition->heading,0,58)}}...
                                    @else
                                        {{$petition->heading}}
                                    @endif
                                    </a></p>
                            </dd>
                        </dl>
                        @endforeach
                    </div>
                    <!-- End Popular Petitions -->
                </div><!--/col-md-4-->


                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Latest Petitions -->
                    <div class="posts">
                        <div class="headline"><h2>Latest Petitions</h2></div>
                        @foreach($latest->slice(0, 3) as $petition)
                            <dl class="dl-horizontal">
                                <dt><a href="petition/{{$petition->slug}}"><img src="{{cdn($petition->image_thumb)}}" alt="{{$petition->petition_to}}"/></a></dt>
                                <dd>
                                    <p><h5 class="footer-to">To: {{$petition->petition_to}}</h5><a href="petition/{{$petition->slug}}">
                                        @if (strlen($petition->heading)>58)
                                            {{substr($petition->heading,0,58)}}...
                                        @else
                                            {{$petition->heading}}
                                        @endif
                                    </a></p>
                                </dd>
                            </dl>
                        @endforeach
                    </div>
                    <!-- End Recent Blogs -->
                </div><!--/col-md-4-->


            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 &copy; Mr.Petition. ALL Rights Reserved.
                        <a href="privacy">Privacy Policy</a> | <a href="terms-of-use">Terms of Use</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <!--
					<a href="index.html">
                        <img class="pull-right" id="logo-footer" src="images/petclown1.png" alt="">
                    </a>
					-->
                </div>
            </div>
        </div>
    </div><!--/copyright-->
</div>