<header class="site-header">
    <div class="container-fluid">

        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="../../public/img/logo-2.png" alt="">
            <img class="hidden-lg-up" src="../../public/img/logo-2-mob.png" alt="">
        </a>
        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/img/avatar-2-64.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
                        </div>
                    </div>
                    <button type="button" class="burger-right">
                        <i class="font-icon-menu-addl"></i>
                    </button>
                </div>

                <div class="mobile-menu-right-overlay"></div>

                <!-- ID del Usuario-->
                <input type="hidden" id="id_usuario" value="<?= $_SESSION['id'] ?>">
                <!-- Rol del Usuario-->
                <input type="hidden" id="id_rol_usuario" value="">

                <div class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toggle no-arr">
                        <span class="font-icon font-icon-user"></span>
                        <span class="lblusuario"><?= $_SESSION['usuario'] ?></span>
                    </a>
                </div>

                <!--.site-header-collapsed-->
            </div>
            <!--site-header-content-in-->
        </div>
        <!--.site-header-content-->
    </div>
    <!--.container-fluid-->
</header>
<!--.site-header-->