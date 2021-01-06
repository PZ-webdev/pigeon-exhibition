<div id="home" class="header-content-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/header-bg.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div data-countdown="{{date('Y/m/d', strtotime($date->start))}}"></div>
                
                <div class="header-content text-center">
                    <h2 class="header-title">{{$date->id}} <sup>th</sup> {{$date->description}}</h2>
                    <h3 class="sub-title">{{date('d F Y', strtotime($date->start))}}, {{$date->city}}</h3>

                    <ul class="header-btn">
                        @if (Route::has('login'))
                            @auth
                                <li></li>
                            @else
                                <li><a class="main-btn main-btn-2" href="{{route('register')}}">Zarejestruj</a></li> 
                            @endauth
                        @endif              
                        <li><a class="main-btn page-scroll" href="#about">Zobacz Więcej</a></li>
                    </ul>
                </div>  <!-- header content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header content -->