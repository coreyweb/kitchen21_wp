<?php
/**
 * Template Name: Home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

<!-- BEGIN STATIC -->

<div id="page">
  <div id="header-wrap">
    <header id="header">
      <div id="logo-simple">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-simple.svg" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
      </div><!-- #logo -->
      <nav id="menu">
        <ul>
          <li class="menu-item-has-children ">
            <a href="work.html">About Us</a>
          </li>
          <li class="menu-item-has-children ">
            <a href="about.html">Menus</a>
          </li>
          <li class="menu-item-has-children ">
            <a href="services.html">Blog</a>
          </li>
          <li class="menu-item-has-children ">
            <a href="clients.html">Gallery</a>
          </li>
          <li class="menu-item-has-children ">
            <a href="contact.html">Reservations</a>
          </li>
          <li class="menu-item-has-children ">
            <a href="contact.html">Ford Amphitheater</a>
          </li>
        </ul>
      </nav><!-- #menu -->
      <a href="#" class="menu-toggle" data-toggle="menu">
        <svg class="icon-menu"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use></svg>
        <svg class="icon-close"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use></svg>
      </a>
    </header><!-- #header -->
  </div><!-- #header-wrap -->

  <main>
    <div class="content">
      <div class="container-fluid">
        <div class="block">
          <div class="row">
            <div class="col-md-3">
              <div id="logo">
                <h1>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
                </h1>
              </div><!-- #logo -->
              <div class="intro">
                <h2 class="highlight">Welcome</h2>
                <p>to Kitchen 21, a full-service restaurant with 5 distinctly different concepts all under one roof. Located in the historic Childs Building on the Coney Island boardwalk, we offer seasonal dishes in a modern setting with live music (often inspired by whatever is on stage at the adjacent Ford Amphitheater).</p>
              </div><!-- .intro -->
            </div><!-- .col-sm-3 -->
            <div class="col-md-9">
              <div class="grid">
                <div class="item item-heading">
                  <a href="#">
                    <img src="assets/imgs/grid/boardwalk-vine.jpg" alt="Boardwalk <span>&amp; Vine</span> image" class="img-responsive hidden-xs">
                    <img src="assets/imgs/grid/boardwalk-vine-sq.jpg" alt="Boardwalk <span>&amp; Vine</span> image" class="img-responsive visible-xs">
                    <div class="item-copy">
                      <h3>Boardwalk <span>&amp; Vine</span></h3>
                    </div><!-- .item-copy -->
                  </a>
                </div><!-- .item -->          
                <div class="row row-tight">
                  <div class="col-sm-6">
                    <div class="item ">
                      <a href="#">
                        <img src="assets/imgs/grid/clams.jpg" alt="Community <span>Clam Bar</span> image" class="img-responsive hidden-xs">
                        <img src="assets/imgs/grid/clams-sq.jpg" alt="Community <span>Clam Bar</span> image" class="img-responsive visible-xs">
                        <div class="item-copy">
                          <h3>Community <span>Clam Bar</span></h3>    
                          <p>Meet new people over our raw-bar-in-a-box</p>    
                        </div><!-- .item-copy -->
                      </a>
                    </div><!-- .item -->          
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="item ">
                      <a href="#">
                        <img src="assets/imgs/grid/clams.jpg" alt="The Test <span>Kitchen</span> image" class="img-responsive hidden-xs">
                        <img src="assets/imgs/grid/clams-sq.jpg" alt="The Test <span>Kitchen</span> image" class="img-responsive visible-xs">
                        <div class="item-copy">
                          <h3>The Test <span>Kitchen</span></h3>
                          <p>Sit down with friends to experience the latest in food and wine trends</p>    
                        </div><!-- .item-copy -->
                      </a>
                    </div><!-- .item -->
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="item ">
                      <a href="#">
                        <img src="assets/imgs/grid/clams.jpg" alt="The Cafe image" class="img-responsive hidden-xs">
                        <img src="assets/imgs/grid/clams-sq.jpg" alt="The Cafe image" class="img-responsive visible-xs">
                        <div class="item-copy">
                          <h3>The Cafe</h3>
                          <p>Grab a bite and return to the action on the beach</p>    
                        </div><!-- .item-copy -->
                      </a>
                    </div><!-- .item -->          
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="item ">
                      <a href="#">
                        <img src="assets/imgs/grid/clams.jpg" alt="Parachute Bar image" class="img-responsive hidden-xs">
                        <img src="assets/imgs/grid/clams-sq.jpg" alt="Parachute Bar image" class="img-responsive visible-xs">
                        <div class="item-copy">
                          <h3>Parachute Bar</h3>
                          <p>Try one of 64 different beers on tap</p>    
                        </div><!-- .item-copy -->
                      </a>
                    </div><!-- .item -->
                  </div><!-- .col-sm-6 -->
                </div><!-- .row -->
              </div><!-- .grid -->
            </div><!-- .col-sm-8 -->
          </div><!-- .row -->
        </div><!-- .block -->
        <div class="block">
          <div class="row vertical-align">
            <div class="col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.550352110494!2d-73.98963468488753!3d40.573605879347205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c245cbeab87bd7%3A0x2eb9a72b4b093331!2s3051+W+21st+St%2C+Brooklyn%2C+NY+11224!5e0!3m2!1sen!2sus!4v1493843831832" width="500" height="400"></iframe>
              </div>
            </div><!-- .col-sm-6 -->
            <div class="col-sm-6">
              <div class="has-arrow-left">
                <h3 class="highlight">Stop by and grab a bite!</h3>
                <p>
                  3051 W. 21st Street Brooklyn, NY 11224<br>
                  Hours: Monday – Sunday: 11 AM – 11 PM<br>
                  <a href="tel:718-954-9801">718-954-9801</a>
                </p>
              </div><!-- .has-arrow-left -->
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div><!-- .block -->
      </div><!-- .container-fluid -->
    </div><!-- .content -->
  </main>

  <footer id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9">
          <div class="location-details">
            3051 W. 21st Street Brooklyn, NY 11224 
            <span><a href="tel:718-954-9801">718-954-9801</a></span>
            <span>Monday – Sunday: 11 AM – 11 PM</span>
            <span class="cafe">* Café is open for breakfast everyday starting at 9 AM</span>
          </div>
          <div class="row">
            <div class="col-md-7 col-md-offset-0 col-sm-8 col-sm-offset-2">
              <form action="#">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="enter email address">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Join Our Mailing List</button>
                  </span>
                </div><!-- .input-group -->
              </form>
            </div><!-- .col-sm-4 -->
          </div><!-- .row -->
        </div><!-- .col-md-7 -->
        <div class="col-md-3">
          <div class="social-share">
            <a href="#">Email Us</a>
            <a href="#" class="icon-facebook">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg>
            </a>
            <a href="#" class="icon-twitter">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use></svg>
            </a>
            <a href="#" class="icon-instagram">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use></svg>
            </a>
          </div><!-- .social-share -->
        </div><!-- .col-md-5 -->
      </div><!-- .row -->
    </div><!-- .container-fluid -->
  </footer><!-- #footer -->
</div><!-- #page -->

<div class="menu-backdrop"></div>

<!-- END STATIC -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/dist/scripts.min.js"></script>
	</body>
</html>

<?php
// get_sidebar();
// get_footer();