@extends('layouts.statique')

@section('Acceuil')
 <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">

      <div id="introCarousel"  data-ride="carousel">
          <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.jpg');">


      <div id="introCarousel"  data-ride="carousel">

      <div id="introCarousel"  data-ride="carousel">

          <div class="carousel-item active" style="background-image: url('img/intro-carousel/banner11.jpg');">
 <form method="POST" action="{{ route('login') }}">
   @csrf
         <div class="carousel-container">
              <div class="carousel-content">
               

<div class="login">


    
       



@guest

<div class="login-wrap">

  <div class="login-html">



    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">  <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a></label> 
   @if (Route::has('register'))
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></label>
 @endif
 
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="email" class="label">{{ __('E-Mail Address') }}</label>
          <input id="email" type="text"  class="input{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          
        </div>
        <div class="group">
          <label for="password" class="label">{{ __('Password') }}</label>
          <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" data-type="password" name="password" required>

        

          @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


         

        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check"   name="remember" {{ old('remember') ? 'checked' : '' }}>
          <label for="check"><span class="icon"></span> {{ __('Remember Me') }}</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                         
        </div>
        <div class="hr"></div>
        
      </div>
      <div class="sign-up-htm">
      
      </div>
    </div>
   
  </div>
</div>

 @endguest

</div>

</div>
</div>
</form>
          </div>
        </div>
    </div>
  </section><!-- #intro -->

  




 <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      
        <div class="row">

          <div class="vedio col-md-12 box">
          
                         <video muted autoplay loop>
                   <source  src="vid/vidio3.mp4" type="video/mp4" >
  
          </video>
          </div>

        </div>
      
    </section>

    <!-- #featured-services -->

         <!--==========================
    


         <!--==========================
      About Us Section
    ============================-->

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Notre équipe accompagne les entreprises dans l’organisation de leurs évènements. SportEvent met à votre disposition ce site pour ajouter votre actualité, événement ou reportage. Nous serons ravis de la publier gratuitement sur notre site. 

  </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Conceptualiser, accompagner, coordonner, organiser, promouvoir, impliquer les partenaires, le public et les médias… Nous prenons en charge l’ensemble des étapes de conception d’un événement sportif, et en assurons le développement
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
               L’agence adapte son intervention à chaque projet, intervenant sur un événement sportif au niveau de la conception, de la coordination,  ou de la production, incluant ou non la direction sportive et technique.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                 l’agence intervient avec la plus grande mobilité,  mettant en place pour chaque projet une équipe dédiée pilotée par un chef de projet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- #about -->


<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title"></h3>
        </header>

        <div class="row">
           <button type="button" class="btn btn-primary btn-lg btn-block">SALLE</button>
        </div>

        <div class="row portfolio-container">

         
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1 " title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">salle de musculation</a></h4>
                <p>fortmuscl</p>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">salle de football</a></h4>
                <p>olmpyadfoot</p>
              </div>
            </div>
          </div>

          
          

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">salle de football</a></h4>
                <p>chompionfoot</p>
              </div>
            </div>
          </div>


             <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card4.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card4.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 4" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">salle de musculation</a></h4>
                <p>speed gym</p>
              </div>
            </div>
          </div>

             <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card5.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 5" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">terain de cours</a></h4>
                <p>cours 100klm</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card6.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card6.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 6" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">salle de football</a></h4>
                <p>skills football</p>
              </div>
            </div>
          </div>

          

        </div> 

        <div class="botton">
         <a href="/Liste de salle"><button type="button" class="btn btn-primary btn-lg btn-block">Plus</button></a>
        </div>
      </div>

    </section><!-- #portfolio -->

  
     
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
     
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">creation des evenments</a></h4>
            <p class="description">nous donne a notres clients la meilleur equipe pour faire leurs events</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Liste de salle</a></h4>
            <p class="description">nous donne a notres clients la meilleur espace pour faire leurs events</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Liste evenments</a></h4>
            <p class="description">nous permet a notre clients pour publier leurs events </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">info</a></h4>
            <p class="description">nous donnee a notre clients a suivi tous les actuelites</p>
          </div>
         

        </div>

      </div>
    </section><!-- #services -->


 
<!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->


                @endsection
