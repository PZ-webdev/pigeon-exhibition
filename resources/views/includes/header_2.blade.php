
<header class="header-video">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3 text-white">@yield('header_title')</h1>
          <p class="lead mb-0 ">@yield('header_subtitle')</p>
        </div>
      </div>
    </div>
</header>
