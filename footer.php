<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kitchen21
 */

?>
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

<?php wp_footer(); ?>

</body>
</html>