<div class="header">

    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
        <a href="javascript:void(0);" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
        </a>
    </div>







    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>


    <ul class="nav user-menu">


        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profile.jpg" alt="">
<span class="status online"></span>
</span>
                <span>{{\Illuminate\Support\Facades\Auth::getUser()->name }}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href={{route('userDetail')}}><i data-feather="user" class="mr-1"></i>Mon Profil</a>
                <a class="dropdown-item" href={{route('logout')}}><i data-feather="log-out" class="mr-1"></i> Déconnexion</a>
            </div>
        </li>

    </ul>
    <div class="dropdown mobile-user-menu show">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right ">
            <a class="dropdown-item" href="profile.html">Mon Profil</a>
            <a class="dropdown-item" href="login.html">Deconnexion</a>
        </div>
    </div>

</div>
