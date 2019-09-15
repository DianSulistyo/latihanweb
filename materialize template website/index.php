 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


  <!-- MY CSS -->
<link rel="stylesheet" href="style.css">
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <title>company profile</title>

    <body id="home" class="scrollspy">

      <!-- navbar -->

  <div class="navbar-fixed">
    <nav class="blue darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Dian Sulistyo</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
<!-- end navbar -->


   <!-- sidenav  -->
   <!--  responsive for mobile browser-->
  <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Us</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact Us</a></li> 
  </ul>
  <!-- end sidenav -->

  <!-- this is a nslider -->

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/1.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/2.png"> <!-- random image -->
        <div class="caption black-text right-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/3.png"> <!-- random image -->
        <div class="caption black-text center-align">
          <h3>blockquoteThis is our big Tagline!</h3>
          <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <!-- end slider -->

  <!-- About Us -->
<section id="about" class="about scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="center light grey-text text-darken-4">About Us</h3>
      <div class="col m6 light">
        <h5>We Are Profesional</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ipsam soluta optio natus ducimus est in, enim, quam obcaecati quia commodi hic incidunt impedit minus doloremque nulla deserunt, mollitia nisi!</p>
      </div>
      <div class="col m6 light">
        <p>WEB DEVELOPMENT</p>
          <div class="progress">
              <div class="determinate blue" style="width: 70%"></div>
          </div>
          <p>MOBILE APP DEVELOPMENT</p>
          <div class="progress">
              <div class="determinate blue" style="width: 80%"></div>
          </div>
          <p>GAME DEVELOPMENT</p>
          <div class="progress">
              <div class="determinate blue" style="width: 60%"></div>
          </div>
      </div>
    </div>
  </div>  
</section>
  <!-- end about us -->

<!-- clients -->

    <div id="clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/slider/4.png"></div>


      <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png" alt="">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png" alt="">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/traveloka.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- end clients -->



    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-4">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class=" medium material-icons">desktop_windows</i>
              <h5>web development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, esse.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class=" medium material-icons">developer_mode</i>
              <h5>mobile apps </h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, esse.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class=" medium material-icons">games</i>
              <h5>game development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, esse.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services -->


    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">portfolio</h3>
        <div class="row">
          <div class="col m3 sm12">
            <img src="img/portfolio/1.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 sm12">
            <img src="img/portfolio/2.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 sm12">
            <img src="img/portfolio/3.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 sm12">
            <img src="img/portfolio/4.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="row">
            <div class="col m3 sm12">
            <img src="img/portfolio/5.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 sm12">
              <img src="img/portfolio/6.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 sm12">
              <img src="img/portfolio/1.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 sm12">
              <img src="img/portfolio/3.png" class="responsive-img materialboxed">
            </div>
        </div>
        

      </div>
    </section>
  <!-- end portfolio -->

    <!-- contact us -->
    <section id="contact" class="contact scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-4 center">Contact Us</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-4 center white-text">
              <i class="material-icons ">email</i>
              <h5>Contact</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, repellat.</p>
            </div>
            <ul class="collection with-header center">
              <li class="collection-header"><h4>Name</h4></li>
              <li class="collection-item">Home Address</li>
              <li class="collection-item">Telephon Number</li>
              <li class="collection-item">Email</li>
            </ul>
          </div>
          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                  <div class="input-field ">
                    <input type="text" name="name" id="name" required class="validate">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field ">
                    <input type="email" name="email" id="email" required class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field ">
                    <input type="text" name="phone" id="phone" required class="validate">
                    <label for="phone">Phone number</label>
                  </div>
                  <div class="input-field ">
                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                  </div>
                  <button type="submit" class="btn">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact -->


    <!-- footer -->
    <footer class="blue darken-2 white-text center">
      <p class="flow-text">Dian Sulistyo | Copyright 2019</p>
    </footer>
    <!-- end footer -->




<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        var sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        var slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators:false,
          height:500,
          transition:600,
          interval:3000
        });

        var parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        var materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);

        var scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrollOffset:50
        });


      </script>
    </body>
  </html>