

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Fonts/MyFontsWebfontsKit.css">
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
  <title>Khother</title>
</head>
<body>
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
            <h5 class="text-white h4">Khotcher Global food</h5>
            <?php wp_nav_menu( array( 
          'theme_location' => 'main_menu',
          
          
          ) ); ?>
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