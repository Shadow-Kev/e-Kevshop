<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
           
            <div class="header-left">
                
            </div>
        </div>
        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{url('storage')}}/default.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profile</a>
                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Paramètres</a>
                    <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Se Deconnecter</a>
                </div>
            </div>
        </div>
    </div>

</header>