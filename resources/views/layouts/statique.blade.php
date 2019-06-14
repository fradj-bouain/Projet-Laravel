<!DOCTYPE html>
<html lang="en">
<head>


 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <meta name="_token" content="{{{ csrf_token() }}}"/>




  <meta charset="utf-8">
  <title>EVENT-SPORT</title>
 <meta name="_token" content="{{{ csrf_token() }}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<style >
  
  .unread{
    background-color: #e5e5e5;
  }
</style>

<body>

  <!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container-fluid">

       

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">SportEvent</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/Acceuil">Acceuil</a></li>
          <li><a href="/info">info</a></li>
          <li><a href="/Liste des evenments">Liste des evenments</a></li>
          <li><a href="/Liste de salle">Liste de salle</a></li>
          <li><a href="/Creation Evenment">Creation Evenment</a></li>
          <li><a href="/Contact">Contact</a></li>
@guest


   @if (Route::has('register'))

 @endif

   @else
   <li> <a class="nav-link" href="javscript:void(0)"  id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <p><i class="fa fa-bell" style="font-size:24px ;margin-left:5px ; "></i>
</p> 
                  <span class="notification"  >{{count(auth()->user()->unreadNotifications)}}</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                @foreach(auth()->user()->Notifications as $notification)
                <a href="#" style="color: black" class="{{$notification->read_at == null ? 'unread' : ''}}"> 
                  {{$notification->data['user']}}
                  {{$notification->markAsRead()}}
                  </a> <br>
                  @endforeach
                </div>  </li>
  <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


  @endguest
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>
  </header><!-- #header -->


 



 

  <!--==========================
    Contenant
  ============================-->

 @yield('Acceuil')
  @yield('Contact')
   @yield('Creation Evenment')
    @yield('Info')
     @yield('register')
      @yield('List salle')
       @yield('List event')
         @yield('editviw')


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SportEvent</h3>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Acceuil">Acceuil</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/info">Info</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Liste des Evenment">Liste des événments </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Liste de salle">Liste des salles</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/espace salle">Espace salle</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            
              Sousse, NY 535022<br>
              Tunisia <br>
              <strong>Phone:</strong> +216 73 425 145<br>
              <strong>Email:</strong> sportevent.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Les événements professionnels sont considérés comme une partie importante de la stratégie de communication d’une organisation. Il s’agit d’une action dont le premier but est de promouvoir l’entreprise et d’améliorer son image.</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SportEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>







  