@extends('app')

@section('content')

    <!---====== HomePage Jumbotron =====---->

    <div class="container">
        <div class="row">
            <div class="col-md-12 home-image home-jumbotron"></div>
        </div>
    </div>

    <!---===== HomePage Content =====----->

    <div class="container">
        <div class="row home-petitions">
            <div class="col-md-8 petitions-container">

     <!----===== HomePage Left Content ====----->

            <!----==== Popular Petition Container ====--->

                <div class="col-md-12 popular-petitions">
                    <div class="row">
                        <h2><span class="popular-header">Popular Petitions</span></h2>
                        <hr/>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://petclown.com/images/Aakash%20Rajvanshi/11:44:20-rahul-gandhi.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                   <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                       <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                       <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                   </ul>
                                </div>
                           </div>
                       </div>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://htmlstream.com/preview/unify-v1.8/assets/img/main/img22.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                   <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                       <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                       <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                   </ul>
                                </div>
                           </div>
                       </div>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://htmlstream.com/preview/unify-v1.8/assets/img/main/img26.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                   <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                       <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                       <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                   </ul>
                                </div>
                           </div>
                       </div>
                        <a href="#" class="pull-right petition-browse">Browse All</a>
                    </div>
                </div>


                <!-----====== Featured Petition Container =====------>

                <div class="col-md-12 featured-petitions">
                    <div class="row">
                        <h2><span class="featured-header">Featured Petitions</span></h2>
                        <hr/>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://htmlstream.com/preview/unify-v1.8/assets/img/main/img1.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                    <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                        <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                        <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://htmlstream.com/preview/unify-v1.8/assets/img/main/img4.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                    <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                        <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                        <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnails thumbnail-style">
                                <a href="#">
                                    <img class="img-responsive" src="http://htmlstream.com/preview/unify-v1.8/assets/img/main/img3.jpg" alt="">
                                </a>
                                <div class="thumbnail-body">
                                    <a class="petition-link" href="#">Rahulji, please have another interview with Arnab Goswami Lorem ipsum dolor</a>
                                    <ul class="list-inline comment-list">
                                        <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                        <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="pull-right petition-browse">Browse All</a>
                    </div>
                </div>

            </div>


      <!---====== HomePage Right Container =====------>

            <div class="col-md-4">
                <div class="col-md-12 new-petitions">
                    <h2><span class="latest-header">Latest Petitions</span></h2>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <div class="new-petitionList">
                        <div class="overflow-h">
                            <a class="petition-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            <ul class="list-inline comment-list">
                                <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                                <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>

        </div>
    </div>

@stop
