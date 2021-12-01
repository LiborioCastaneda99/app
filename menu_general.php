<header class="page-header header-sec context-dark" >
<!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-float" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="60px">
        <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></div>
        <div class="rd-navbar-top-panel">
            <div class="rd-navbar-top-panel-left">
            <div class="rd-navbar-top-panel-200"><span class="text-middle icon icon-sm mdi mdi-map-marker"></span><a class="text-middle" href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
            <div><span class="text-middle icon icon-sm mdi mdi-phone"></span><a class="text-middle" href="callto:#">1-800-1234-567</a></div>
            <div><span class="text-middle icon icon-sm mdi mdi-email-open"></span><a class="text-middle" href="mailto:#">info@demolink.org</a></div>
            </div>
            <div class="rd-navbar-top-panel-right">
            <div>
                <ul class="list-inline">
                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon mdi mdi-vimeo" href="#"></a></li>
                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                <li><a class="icon mdi mdi-rss" href="#"></a></li>
                </ul>
            </div>
            </div>
        </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="reveal-inline-block brand-name" href="index.php"><img class="img-responsive center-block" src="https://livedemo00.template-help.com/wt_53104_v1/images/logo-dark-233x55.png" width="233" height="55" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <?php if(count($user) > 0 ): ?>
                    <li class="active"><a><?= $user[1]. " ". $user[2];?></a></li>
                  <?php endif; ?>
                  <li><a href="agregar_empleado.php">AGREGAR EMPLEADO</a></li>
                  <li><a href="gestionar_empleado.php">GESTIONAR EMPLEADO</a></li>
                  <?php if(count($user) > 0 ): ?>
                    <li><a href="logout.php">CERRAR SESIÓN</a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
        </nav>
    </div>
</header>