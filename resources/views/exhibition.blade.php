@extends('layouts.app')
@section('title')Wystawa online @endsection
@section('header_title')Wystawa online @endsection
@section('header_subtitle')@endsection


@section('content')
<section id="event">
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">Wystawa Gołębi</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row --> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="event-tab mt-60">
                    <ul class="nav justify-content-between align-items-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="day-1-tab" data-toggle="tab" href="#day-1" role="tab" aria-controls="day-1" aria-selected="true">
                                <h4 class="nav-title">Grupa "A"</h4>
                                {{-- <span>28 July, 2022</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="day-2-tab" data-toggle="tab" href="#day-2" role="tab" aria-controls="day-2" aria-selected="false">
                                <h4 class="nav-title">Grupa "B"</h4>
                                {{-- <span>28 July, 2022</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="day-3-tab" data-toggle="tab" href="#day-3" role="tab" aria-controls="day-3" aria-selected="false">
                                <h4 class="nav-title">Grupa C</h4>
                                {{-- <span>28 July, 2022</span> --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="day-4-tab" data-toggle="tab" href="#day-4" role="tab" aria-controls="day-4" aria-selected="false">
                                <h4 class="nav-title">Grupa D</h4>
                                <span>Szybki dystans</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="day-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">PL-0292-19-2050</h4>
                                        <p class="text">Konkursy:<ul >
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>                                             
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>                                                
                                        </ul>
                                    </div>
                                    <a href="#" class="link color-success">Zobacz</a>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">PL-0292-19-2050</h4>
                                        <p class="text">Konkursy:<ul >
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>                                             
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>                                                
                                        </ul>
                                    </div>
                                    <a href="/wystawa/golab" class="link color-success">Zobacz</a>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-2" role="tabpanel" aria-labelledby="day-2-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-3" role="tabpanel" aria-labelledby="day-3-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-4" role="tabpanel" aria-labelledby="day-4-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                    </div>

                    <div class="navbar-btn d-none d-sm-inline-block">
                        <a class="main-btn main-btn-2" href="#">Zobacz więcej</a>
                    </div>

                </div> <!-- event tab -->
            </div>               
        </div> <!-- row -->
    </div> <!-- container -->
    
</section>

@endsection
