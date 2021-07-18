@extends('layouts.app-compte')
@section('content')
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3">
                            <div class="card-body d-flex align-items-center p-0">
                                <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Mon agenda spirituel</h2>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight theme-dark-bg border-0" placeholder="Search here.">
                                </div>
                                <a href="#" class="btn-round-md ms-2 bg-greylight theme-dark-bg rounded-3"><i class="feather-filter font-xss text-grey-500"></i></a>
                            </div>
                        </div>

                        <div class="row ps-2 pe-2">
                            <div class="col-xl-12">
                                <div class="container mt-1">
                                    <div class="row">
                                        <div class="col-lg-4 mb-3" id="Friday, Nov 13th">
                                            <h4 class="mt-0 mb-3 text-dark op-8 font-weight-bold">
                                                Friday, Nov 13th
                                            </h4>
                                            <ul class="list-timeline list-timeline-primary">
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">09:00 - 10:00</span> - Registration</p>
                                                </li>
                                                <li class="list-timeline-item show p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-2">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-primary font-weight-bold op-8 infinite animated flash" data-animate="flash" data-animate-infinite="1" data-animate-duration="3.5" style="animation-duration: 3.5s;">Now</span> - Vitaly Friedmann</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8 show" id="day-1-item-2"> Talk: Wireframing / <span class="text-primary">Room 19</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">12:00 - 13:00</span> - Lunch Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-4">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">13:00 - 15:00</span> - Anthony Jonas</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-1-item-4"> Talk: OpenData / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">15:00 - 16:00</span> - Coffee Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-1-item-6">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">16:00 - 18:00</span> - Jesscia Lawrence</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-1-item-6"> Talk: Ninja coding / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">18:00 - 23:00</span> - After conference</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 mb-3" id="Saturday, Nov 14th">
                                            <h4 class="mt-0 mb-3 text-dark op-8 font-weight-bold">
                                                Saturday, Nov 14th
                                            </h4>
                                            <ul class="list-timeline list-timeline-primary">
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">09:00 - 10:00</span> - Registration</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-2-item-2">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">10:00 - 12:00</span> - Vitaly Friedmann</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-2-item-2"> Talk: Wireframing / <span class="text-primary">Room 19</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">12:00 - 13:00</span> - Lunch Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-2-item-4">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">13:00 - 15:00</span> - Bruce Lawson</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-2-item-4"> Talk: Big Data / <span class="text-primary">Room 19</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">15:00 - 16:00</span> - Coffee Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-2-item-6">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">16:00 - 18:00</span> - Anthony Jonas</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-2-item-6"> Talk: OpenData / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">18:00 - 23:00</span> - After conference</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 mb-3" id="Sunday, Nov 15th">
                                            <h4 class="mt-0 mb-3 text-dark op-8 font-weight-bold">
                                                Sunday, Nov 15th
                                            </h4>
                                            <ul class="list-timeline list-timeline-primary">
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">09:00 - 10:00</span> - Registration</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-3-item-2">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">10:00 - 12:00</span> - Jesscia Lawrence</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-3-item-2"> Talk: Ninja coding / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">12:00 - 13:00</span> - Lunch Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-3-item-4">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">13:00 - 15:00</span> - Anthony Jonas</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-3-item-4"> Talk: OpenData / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">15:00 - 16:00</span> - Coffee Break</p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-toggle="collapse" data-target="#day-3-item-6">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">16:00 - 18:00</span> - Anthony Jonas</p>
                                                    <p class="my-0 collapse flex-fw text-uppercase text-xs text-dark op-8" id="day-3-item-6"> Talk: OpenData / <span class="text-primary">Room 31</span> </p>
                                                </li>
                                                <li class="list-timeline-item p-0 pb-3 d-flex flex-wrap flex-column">
                                                    <p class="my-0 text-dark flex-fw text-sm text-uppercase"><span class="text-inverse op-8">18:00 - 23:00</span> - After conference</p>
                                                </li>
                                            </ul>
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
