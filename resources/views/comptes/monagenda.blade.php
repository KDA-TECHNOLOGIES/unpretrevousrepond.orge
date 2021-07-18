@extends('layouts.app-compte')
@section('content')
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3">
                            <div class="card-body d-flex align-items-center p-0">
                                <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Mon agenda</h2>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight theme-dark-bg border-0" placeholder="Search here.">
                                </div>
                                <a href="#" class="btn-round-md ms-2 bg-greylight theme-dark-bg rounded-3"><i class="feather-filter font-xss text-grey-500"></i></a>
                            </div>
                        </div>

                        <div class="row ps-2 pe-2">
                            <div class="col-xl-12">
                                <div class="idance">
                                    <div class="schedule content-block">
                                        <div class="container">
                                            <div class="timetable">
                                                <!-- Schedule Top Navigation -->
                                                <nav class="nav nav-tabs">
                                                    <a class="nav-link ">LUNDI</a>
                                                    <a class="nav-link active">MARDI</a>
                                                    <a class="nav-link">MERCREDI</a>
                                                    <a class="nav-link">JEUDI</a>
                                                    <a class="nav-link">VENDREDI</a>
                                                    <a class="nav-link">SAMEDI</a>
                                                    <a class="nav-link">DIMANCHE</a>
                                                </nav>

                                                <div class="tab-content">
                                                    <div class="tab-pane show active">
                                                        <div class="row">
                                                            <!-- Schedule Item 1 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/FFB6C1/000000" alt="Contemporary Dance">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                                                        <div class="timetable-item-name">Contemporary Dance</div>
                                                                        <a href="#" class="btn btn-primary ">Lire plus</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Schedule Item 2 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/00FFFF/000000" alt="Break Dance">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">5:00pm - 6:00pm</div>
                                                                        <div class="timetable-item-name">Break Dance</div>
                                                                        <a href="#" class="btn btn-primary btn-book">Lire plus</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Schedule Item 3 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/8A2BE2/000000" alt="Street Dance">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">5:00pm - 6:00pm</div>
                                                                        <div class="timetable-item-name">Street Dance</div>
                                                                        <a href="#" class="btn btn-primary btn-book">Book</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Schedule Item 4 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/6495ED/000000" alt="Yoga">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">7:00pm - 8:00pm</div>
                                                                        <div class="timetable-item-name">Yoga</div>
                                                                        <a href="#" class="btn btn-primary btn-book">Book</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Schedule Item 5 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/00FFFF/000000" alt="Stretching">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">6:00pm - 7:00pm</div>
                                                                        <div class="timetable-item-name">Stretching</div>
                                                                        <a href="#" class="btn btn-primary btn-book">Book</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Schedule Item 6 -->
                                                            <div class="col-md-6">
                                                                <div class="timetable-item">
                                                                    <div class="timetable-item-img">
                                                                        <img src="https://via.placeholder.com/100x80/008B8B/000000" alt="Street Dance">
                                                                    </div>
                                                                    <div class="timetable-item-main">
                                                                        <div class="timetable-item-time">8:00pm - 9:00pm</div>
                                                                        <div class="timetable-item-name">Street Dance</div>
                                                                        <a href="#" class="btn btn-primary btn-book">Book</a>
                                                                        <div class="timetable-item-like">
                                                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
