<footer>
      <div class="row">
        <div class="col-12 col-lg-4 pd-1">
          <h1>Contact us</h1>
          <p>
            99/859 Moo 2, Na Mai Sub-districy,
            <br />
            Lad Lhum Kaeo District,
            <br />
            Pathum Thani Provine,
            <br />
            Thailand 12140
          </p>
          <p>Tel:(66)2-023-7989</p>
          <p>Mobile: (66)65-191-4654</p>
          <p>Email: weerachoke_timmy@knotccherglobalfood.com</p>
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
          <div>
            <div class="social-media">
              <p>Follow us</p>
              <div class="line"></div>
              <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-line"></i></a>
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <small>&copy; By Khotcher Global Food Co.Ltd.</small>
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