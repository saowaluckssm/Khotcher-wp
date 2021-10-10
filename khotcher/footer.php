<footer>
      <div class="row">
        <div class="col-12 col-xl-4 pd-1">
          <h1><?php _e( "Contact us", "khotcher") ?></h1>
          <p>
            <?php _e( "99/859 Moo 2, Na Mai Sub-district,", "khotcher") ?>
            <br />
            <?php _e( "Lad Lhum Kaew District,", "khotcher") ?>
            <br />
            <?php _e( "Pathum Thani Province,", "khotcher") ?>
            <br />
            <?php _e( "Thailand 12140", "khotcher") ?>
          </p>
          <p>
          <?php _e( "Tel:(+66)2-023-7989", "khotcher") ?>
          <br />
          <?php _e( "Mobile: (+66)65-191-4654", "khotcher") ?>
          <br />
          <?php _e( "Email: weerachoke_timmy@knotcherglobalfood.com", "khotcher") ?>
         </p>
        </div>
        <div class="col-12 col-lg-4 pd-1 footer-menu">
            <?php wp_nav_menu( array( 
              'theme_location' => 'footer_menu',
              

              )); ?> 
        </div>
        <div class="col-12 col-lg-4 pd-1 footer-social">
          <div class="footer-logo">
            <?php the_custom_logo(); ?>
          </div>
          <div class="group">
            <div class="social-media">
              <p><?php _e( "Follow us", "khotcher") ?></p>
              <div class="line"></div>
              <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
              <a href="https://lin.ee/ARwbigd"><i class="fab fa-line"></i></a>
              <a href="https://www.facebook.com/Khotcherglobalfood"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com/khotcher.store/"><i class="fab fa-instagram"></i></a>
            </div>
            <small><?php _e( "&copy; By Khotcher Global Food Co.Ltd.", "khotcher") ?></small>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    
  <?php wp_footer(); ?>
</body>
</html>