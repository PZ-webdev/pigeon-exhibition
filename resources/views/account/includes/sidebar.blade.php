 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('account')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WGPO<sup> 2021 </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
{{-- {{dd($user )}} --}}
    <!-- Heading -->
    <div class="sidebar-heading">
        Panel Użytkownika
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-dove"></i>
            <span>Moje Gołębie</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('allpigeons')}}">Wszystkie</a>
                <a class="collapse-item" href="{{route('addPigeon')}}">Dodaj</a>
                <a class="collapse-item" href="#">TOP 10</a>
            </div>
        </div>

    </li>
    <li>
             <!-- Divider -->
             <hr class="sidebar-divider">
        @if($user->role)
       
             <!-- Heading -->
             <div class="sidebar-heading">
                 Panel Administratora
             </div>
             <li class="nav-item">
                <a class="nav-link" href="{{route('adminHome')}}">
                    <i class="fas fa-user-cog"></i>
                    <span>Administrator - START</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-edit"></i>
                    <span>Wpisy</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('allPosts')}}">Wszystkie</a>
                        <a class="collapse-item" href="{{route('addPost')}}">Dodaj</a>
                    </div>
                </div>
            </li>
           
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-users"></i>
                    <span>Użytkownicy</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('allUsers')}}">Wszyscy</a>
                        <a class="collapse-item" href="#">Dodaj</a>
                    </div>
                </div>
            </li>  
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-dove"></i>
                    <span>Gołebie</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('allPigeons')}}">Wszystkie</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-images"></i>
                    <span>Galeria</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Galeria</a>
                        <a class="collapse-item" href="#">Dodaj</a>
                    </div>
                </div>
            </li>  
            <hr class="sidebar-divider">
        @endif
            <!-- Heading -->
            <div class="sidebar-heading">
                Moje konto
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{route('profile')}}">
                    <i class="fas fa-user-alt"></i>
                    <span>Profil</span></a>
            </li>
    </li>
        
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->