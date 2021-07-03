@extends('layouts.app-compte')
@section('content')
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left">
            <!-- loader wrapper -->
            <div class="preloader-wrap p-3">
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer mb-3">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
            </div>
            <!-- loader wrapper -->
            <div class="row feed-body">
                <div class="col-xl-8 col-xxl-9 col-lg-8">
                    <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                        <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-none rounded-xxxl bg-dark overflow-hidden mb-3 mt-3">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <span class="btn-round-lg bg-white"><i class="feather-plus font-lg"></i></span>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Add Story </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Victor Exrixon </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Surfiya Zakir </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">David Goria </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">David Goria </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">David Goria </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3" style="background-image: url(https://via.placeholder.com/200x300.png);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#" data-target="#Modalstries" data-toggle="modal">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="https://via.placeholder.com/50x50.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Seary Victor </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <question-post-component></question-post-component>

                    <question-component></question-component>


                </div>
                <div class="col-xl-4 col-xxl-3 col-lg-4 ps-md-0">
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-flex align-items-center p-4">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Message des Papes</h4>
                            <a href="#" class="fw-600 ms-auto font-xssss text-primary">Lire plus</a>
                        </div>
                        <div class="card w-100 shadow-xss rounded-xxl border-0 pt-1 mb-0 ">
                            <div class="p-4">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h4>
                                </div>
                                <div class="card-body p-0 me-lg-10">
                                    <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-0 mb-3">
                        <div class="card-body d-flex align-items-center p-4 mb-0">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Annonces et publicités</h4>
                            <a href="#" class="fw-600 ms-auto font-xssss text-primary">Voir plus</a>
                        </div>
                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 0 !important;">
                            <figure class=" me-2 mb-0"><img src="{{asset('comptes/images/speciment-pub.png')}}" width="100px" height="100px" alt="image" class="shadow-sm float-left"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> KDA Technologies  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores cumque dolores, ea eveniet fuga fugit harum iste libero mollitia non nostrum numquam optio placeat praesentium qui quia quis voluptatem.</span></h4>
                            <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                        </div>

                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 0 !important;">
                            <figure class=" me-2 mb-0"><img src="{{asset('comptes/images/speciment-pub.png')}}" width="100px" height="100px" alt="image" class="shadow-sm float-left"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> KDA Technologies  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores cumque dolores, ea eveniet fuga fugit harum iste libero mollitia non nostrum numquam optio placeat praesentium qui quia quis voluptatem.</span></h4>
                            <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                        </div>
                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 0 !important;">
                            <figure class=" me-2 mb-0"><img src="{{asset('comptes/images/speciment-pub.png')}}" width="100px" height="100px" alt="image" class="shadow-sm float-left"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> KDA Technologies  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores cumque dolores, ea eveniet fuga fugit harum iste libero mollitia non nostrum numquam optio placeat praesentium qui quia quis voluptatem.</span></h4>
                            <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                        </div>

                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 0 !important;">
                            <figure class=" me-2 mb-0"><img src="{{asset('comptes/images/speciment-pub.png')}}" width="100px" height="100px" alt="image" class="shadow-sm float-left"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> KDA Technologies  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores cumque dolores, ea eveniet fuga fugit harum iste libero mollitia non nostrum numquam optio placeat praesentium qui quia quis voluptatem.</span></h4>
                            <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                        </div>

                        <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 15px !important;">
                            <figure class=" me-2 mb-0"><img src="{{asset('comptes/images/speciment-pub.png')}}" width="100px" height="100px" alt="image" class="shadow-sm float-left"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2"> KDA Technologies  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores cumque dolores, ea eveniet fuga fugit harum iste libero mollitia non nostrum numquam optio placeat praesentium qui quia quis voluptatem.</span></h4>
                            <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                        </div>



                    </div>

                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-flex align-items-center  p-4">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Evénéments</h4>
                            <a href="#" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                        </div>
                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-success me-2 p-3 rounded-xxl"><h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span class="ls-1 d-block font-xsss text-white fw-600">FEB</span>22</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Meeting with clients <span class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span> </h4>
                        </div>

                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-warning me-2 p-3 rounded-xxl"><h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span class="ls-1 d-block font-xsss text-white fw-600">APR</span>30</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Developer Programe <span class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span> </h4>
                        </div>

                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-primary me-2 p-3 rounded-xxl"><h4 class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span class="ls-1 d-block font-xsss text-white fw-600">APR</span>23</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Aniversary Event <span class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span> </h4>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
