
<!DOCTYPE html>
<html class="#{html_class}" lang="en">
  <head>
    <!-- Site Title-->
    <title>Tables</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="https://livedemo00.template-help.com/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="https://livedemo00.template-help.com/wt_53104_v1/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="https://livedemo00.template-help.com/wt_53104_v1/https://livedemo00.template-help.com/wt_53104_v1/js/html5shiv.min.js"></script>
		<![endif]-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-header header-sec context-dark">
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
                    <li><a class="icon mdi mdi-pinterest-p" href="#"></a></li>
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
                <div class="rd-navbar-brand"><a class="reveal-inline-block brand-name" href="index.html"><img class="img-responsive center-block" src="https://livedemo00.template-help.com/wt_53104_v1/images/logo-dark-233x55.png" width="233" height="55" alt=""></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class=""><a href="./">AGREGAR EMPLEADO</a></li>
                  <li class="active"><a href="gestionar_empleado.php">GESTIONAR EMPLEADO</a></li>
                  <li><a href="contacts.html">CERRAR SESIÓN</a></li>
                </ul>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span class="mdi mdi-search"></span></a>
                  <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                    </div>
                    <button class="btn mdi mdi-search"></button>
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Page Content-->
      <main class="page-content">
              <section class="bg-image-03">
                <div class="breadcrumb-wrapper">
                  <div class="shell context-dark section-30 section-md-top-280">
                    <h1 class="offset-top-20 text-ubold">Gestionar Empleados</h1>
                    <ol class="breadcrumb">
                    </ol>
                  </div>
                </div>
              </section>
        <section class="section-80 section-md-50">
          <div class="shell">
            <div class="range range-xs-center offset-top-50">
              <div class="cell-md-12">
                <div class="">
                  <div class="table-responsive">
        						<div id="tablaDatatable"></div>

                    <!-- <table class="table table-striped text-left">
                      <thead>
                        <tr>
                          <th class="text-left success">Column 1</th>
                          <th class="text-left success">Column 2</th>
                          <th class="text-left success">Column 3</th>
                          <th class="text-left success">Column 4</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item #1</td>
                          <td>Description</td>
                          <td>Subtotal</td>
                          <td>$1.00</td>
                        </tr>
                        <tr>
                          <td>Item #2</td>
                          <td>Description</td>
                          <td>Discount</td>
                          <td>$2.00</td>
                        </tr>
                        <tr>
                          <td>Item #3</td>
                          <td>Description</td>
                          <td>Shipping</td>
                          <td>$3.00</td>
                        </tr>
                        <tr>
                          <td>Item #4</td>
                          <td>Description</td>
                          <td>Tax</td>
                          <td>$4.00</td>
                        </tr>
                        <tr class="text-base">
                          <td>All Items</td>
                          <td>Description</td>
                          <td>Your Total</td>
                          <td>$10.00</td>
                        </tr>
                      </tbody>
                    </table> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  bg-gray-lighter">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="text-center text-ubold" id="">QR del Empleado</h5>
              <hr class="divider divider-50 divider-primary divider-sm-center offset-top-12">
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <img class="img-responsive center-block" src="" id="img_flayers" name="img_flayers" width="45%" alt="">
              <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <!-- Page Footer-->
      <footer class="page-footer-widget">
        <div class="shell shell-wide page-footer-min text-md-left">
          <p>&#169; <span id="copyright-year"></span> Todos los derechos reservados. Condiciones de uso y 
            <a href="privacy.html">política de privacidad</a>
          </p>
        </div>
      </footer>
    </div>
    <!-- Java script-->
    <script src="https://livedemo00.template-help.com/wt_53104_v1/js/core.min.js"></script>
    <script src="https://livedemo00.template-help.com/wt_53104_v1/js/script.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  </body>
</html>



<script type="text/javascript">
    $(document).on('click', '.datos', function () {

     var descr = "http://accountstoretv.000webhostapp.com/pdfs/examples/example01_basic.php?id=1";
    // var descr = $(this).attr('data-descr');
    var text = $(this).attr('data-text');
    $('#staticBackdrop #img_flayers').attr("src", text+descr);
    $('#staticBackdrop input[name=nombreProducto]').val(text);

    });

	$(document).ready(function(){
		$('#tablaDatatable').load('tabla_gestionar_empleados.php');
	});
</script>