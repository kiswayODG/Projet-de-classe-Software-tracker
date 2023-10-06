<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-contents">
            <div id="sidebar-menu" class="sidebar-menu">
                <div class="mobile-show">
                    <div class="offcanvas-menu">
                        <div class="user-info align-center bg-theme text-center">
                            <span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
                            <a href="javascript:void(0)" class="d-block menu-style text-white">
                                <!-- <div class="user-avatar d-inline-block mr-3">
                                    <img src="assets/img/profiles/avatar.jpg" alt="user image" class="rounded-circle" width="50">
                                </div> -->
                            </a>
                        </div>
                    </div>
                </div>
                <ul>
                    <li  class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href={{route('accueil')}}><img src="assets/img/home.svg" alt="sidebar_img"> <span>Accueil</span></a>
                    </li>
                   
                    <li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                        <a href={{route('dashboard')}}><img src="assets/img/dshb.jpg" alt="sidebar_img"> <span>Tableau de bord</span></a>
                    </li>

                    <li class="{{ Request::is('logiciel*') ? 'active' : '' }}">
                        <a href={{route('logiciel.index')}}><img src="assets/img/dash2.png" alt="sidebar_img"> <span> Logiciels</span></a>
                    </li>

                    @canany(['admin'], Auth::user())
                    <li class="{{ Request::is('users') ? 'active' : '' }}">
                        <a href={{route('users.index')}}><img src="assets/img/dash1.png" alt="sidebar_img"><span> Utilisateurs</span></a>
                    </li>
                   
                    @endcanany
                    

                    <li class="{{ Request::is('userDetail*') ? 'active' : '' }}">
                        <a href={{route('userDetail')}}><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Mon compte</span></a>
                    </li>
                </ul>
                <ul class="logout">
                    <li>
                        <a href={{ route('logout') }}><img src="assets/img/logout.svg" alt="sidebar_img"><span>Se deconnecter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
