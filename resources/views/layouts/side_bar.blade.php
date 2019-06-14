@if (Auth::guard('admine')->check())

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/backend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/backend/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <meta name="_token" content="{{{ csrf_token() }}}"/>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/backend/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/backend/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="/backend/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          


          Creative Tim By {{ Auth()->guard('admine')->getUser()['name'] }}
        
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
       
          <li class="nav-item ">
            <a class="nav-link" href="/tables">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="/tables_info">
              <i class="material-icons">content_paste</i>
              <p>Table info</p>
            </a>
          </li> <li class="nav-item ">
            <a class="nav-link" href="/tables_salle">
              <i class="material-icons">content_paste</i>
              <p>Table salle</p>
            </a>
          </li><li class="nav-item ">
            <a class="nav-link" href="/tables_contact">
              <i class="material-icons">content_paste</i>
              <p>Table contact</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/category">
              <i class="material-icons">library_books</i>
              <p>Category</p>
            </a>
          </li>
              <li class="nav-item ">
            <a class="nav-link" href="/salle_event">
              <i class="material-icons">library_books</i>
              <p>salle_event</p>
            </a>
          </li>
              <li class="nav-item ">
            <a class="nav-link" href="/info_event">
              <i class="material-icons">library_books</i>
              <p>info_event</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/map">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/notifications">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- End side_bar --> 





       @yield('dashboard')  

       @yield('map')

       @yield('notifications')

       @yield('tables')

        @yield('tables_info')

         @yield('tables_salle')

        @yield('table_contact')
       
       @yield('category')

       @yield('salle_event')

       @yield('info_event')

       @yield('upgrade')

      
       


@endif


