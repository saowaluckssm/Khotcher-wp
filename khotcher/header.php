

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
  <?php wp_head(); ?>
  <title>Khotcher Global Food</title>
</head>
<body <?php body_class(); ?>>
<header class="main-nav">
      <nav class="row">
      

        <div class="col-sm-5">
          <?php wp_nav_menu( array( 
          'theme_location' => 'left_menu',
          "menu_class" => "nav nav-fill",
          'add_li_class'  => 'nav-item',

          )); ?> 

        </div>
        <div class="col-sm-2">
          <div class="logo">
                <?php the_custom_logo(); ?>
          </div> 

        </div>

        <div class="col-sm-5">
          <?php wp_nav_menu( array( 
          'theme_location' => 'right_menu',
          "menu_class" => "nav nav-fill",
          'add_li_class'  => 'nav-item',
          )); ?> 

        </div>
      
      </nav>
</header>
<header class="nav-responsive">
   
     

      <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h2 class="text-white"><?php _e( "Khotcher Global food", "khotcher") ?></h2>
            <?php wp_nav_menu( array( 
          'theme_location' => 'main_menu',
          
          
          ) ); ?>
            <div class="social-media">
              <p><?php _e("Follow us", "khotcher" )?></p>
              <div class="line"></div>
              <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
              <a href="https://lin.ee/ARwbigd"><i class="fab fa-line"></i></a>
              <a href="https://www.facebook.com/Khotcherglobalfood"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com/khotcher.store/"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
      </div>

      <nav class="navbar navbar-dark bg-dark">
      
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="logo-small">
                <?php the_custom_logo(); ?>
          </div> 
          


        </div>
      </nav>
</header>