@extends('layouts.app-compte')
@section('content')
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3">
                            <div class="card-body d-flex align-items-center p-0">
                                <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Prières divers</h2>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight theme-dark-bg border-0" placeholder="Search here.">
                                </div>
                                <a href="#" class="btn-round-md ms-2 bg-greylight theme-dark-bg rounded-3"><i class="feather-filter font-xss text-grey-500"></i></a>
                            </div>
                        </div>

                        <div class="row ps-2 pe-2">
                            @for($i = 0; $i < 10; $i++)
                                <div class="col-md-6">
                                    <div class="card d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3">
                                        <div class="card-body d-block w-100 ps-3 pe-3 pb-4 ">
                                            <div class="row">
                                                <div class="col-12 mt-3">
                                                    <div class="card">
                                                        <div class="card-horizontal">
                                                            <div class="img-square-wrapper">
                                                                <img class="" src="http://via.placeholder.com/150x200" alt="Card image cap">
                                                            </div>
                                                            <div class="card-body">
                                                                <h4 class="card-title">Prière à Marie qui défait les noeuds</h4>
                                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer" >
                                                            <div class="row align-items-center">
                                                                <div class="col text-right " style="text-align: right">
                                                                    <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                                                        <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> 2.8K Like
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
