@extends('layouts.app')
@section('title') START - WGP 2020 @endsection
@section('content')

    <section id="about" class="about-area pb-130 pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mt-50 wow fadeInLeft" data-wow-duration="1s">
                        <img src="assets/images/exhibition_people.png" alt="About">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45 wow fadeInRight" data-wow-duration="1s">
                        <div class="section-title">
                            <h2 class="title">Nasza Wystawa</h2>
                        </div> <!-- section title -->

                        <p class="text mt-30"><u>Wystawa Gołębi Online 2020</u> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. <br> <br> Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <p class="date"><span>{{date('d', strtotime($date->start))}}<sup>th</sup></span> {{date('F Y', strtotime($date->start))}}</p>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== EVENT SCHEDULE PART START ======-->

    <section id="event" class="event-schedule pt-115 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">PREZENTACJA GOŁĘBII</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
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
                                    @foreach ($pigeons as $pigeon)
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="assets/images/event-1.jpg" alt="Event">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">{{$pigeon->ring_number}}</h4>
                                            <p class="text">Konkursy:<ul >
                                                <li><strong>Kolor: </strong>{{$pigeon->color}}</li>
                                                <li>Płeć: {{$pigeon->sex}}</li>                                             
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>                                                
                                            </ul>
                                        </div>
                                        <a href="{{route('singleExhibition', $pigeon->id)}}" class="link color-success">Zobacz</a>
                                    </div>
                                    @endforeach
                                     <!-- single event -->
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

    <!--====== EVENT SCHEDULE PART ENDS ======-->

    <!--====== FEATURES PART START ======-->

    <section id="features" class="features-area pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-20">
                        <h2 class="title">Why You Should Join?</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="features-icon">
                            <i class="lni-microphone"></i>
                            <span>01</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Great Speakers</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                            <i class="lni-users"></i>
                            <span>02</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">New People</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                            <i class="lni-bullhorn"></i>
                            <span>03</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Global Event</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="features-icon">
                            <i class="lni-heart"></i>
                            <span>04</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Get Inspired</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="features-icon">
                            <i class="lni-cup"></i>
                            <span>05</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Networking Session</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-features text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="features-icon">
                            <i class="lni-gallery"></i>
                            <span>06</span>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Meet New Faces</a></h4>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== GALLERY PART START ======-->

    <section id="gallery" class="event-gallery pt-115 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-50">
                        <h2 class="title">Event Gallery</h2>
                        <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="single-gallery">
                    <div class="gallery-image">
                        <img src="assets/images/gallery-1.jpg" alt="Gallery">
                    </div>
                    <div class="gallery-content">
                        <a class="image-popup" href="assets/images/gallery-1.jpg"><i class="lni-plus"></i></a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-6">
                <div class="row no-gutters">
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="assets/images/gallery-2.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="assets/images/gallery-2.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="assets/images/gallery-3.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="assets/images/gallery-3.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="assets/images/gallery-4.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="assets/images/gallery-4.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                    <div class="col-sm-6">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="assets/images/gallery-5.jpg" alt="Gallery">
                            </div>
                            <div class="gallery-content">
                                <a class="image-popup" href="assets/images/gallery-5.jpg"><i class="lni-plus"></i></a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-btn pt-60 text-center">
                        <a class="main-btn main-btn-2" href="#">Browse all</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== GALLERY PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info pt-40">
                        <div class="section-title pb-10">
                            <h2 class="title">Skontaktuj</h2>
                        </div> <!-- section title -->
                        <ul>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">E-mail</h6>
                                        <p class="text">pzaprzala@wp.pl</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">Numer kontaktowy</h6>
                                        <p class="text">+831 546 547</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex mt-25">
                                    <div class="info-icon">
                                        <i class="lni-money-location"></i>
                                    </div>
                                    <div class="info-content media-body">
                                        <h6 class="info-title">Lokalizacja</h6>
                                        <p class="text">Jarosław / Rzeszów <p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form pt-20">
                        <form id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Imię">
                                        <i class="lni-user"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="E-mail">
                                        <i class="lni-envelope"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Temat">
                                        <i class="lni-pencil-alt"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="phone" name="number" placeholder="+48 000 000 000">
                                        <i class="lni-phone-handset"></i>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Wiadomość"></textarea>
                                        <i class="lni-comment-alt"></i>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="main-btn main-btn-2">Wyślij</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->

@endsection
