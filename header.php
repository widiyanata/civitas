<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package civitas
 */


 # Logo position
 $logo_position = get_theme_mod('logo_position', 'left');
 # Left or Center, default = left
 $logo_position == 'left' ? $logo_position = '' : $logo_position = 'brand-center';

 # Navbar link position
 $navbar_position = get_theme_mod('navbar_link_position', 'right');
 # Left or Right, default = Right
 $navbar_position == 'right' ? $navbar_position = 'navbar-right' : $navbar_position = 'navbar-left';

 # If navbar logo in center then set navbar position to none;
 $logo_position == 'brand-center' ? $navbar_position = '' : '';

 # Display Top menu or not
 $top_menu = get_theme_mod('top_menu', true);

 # Breaking News Section
 # Display Breaking News?
 $bn = get_theme_mod('breaking_news_show');
 # title
 $bn_title = get_theme_mod('breaking_news_title');
 # Show post by { latest | category }
 $bn_option = get_theme_mod('breaking_news_option');
 $bn_option == 'latest' ? $bn_posts = '' : $bn_posts = get_theme_mod('breaking_news_posts');

?>
  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

    <!--  THEME PRELOADER AREA -->
    <div id="preloader-wrapper">
      <div class="preloader-wave-effect"></div>
    </div>
    <!-- THEME PRELOADER AREA END -->

    <div class="wrapper">
      <!-- Start of header area -->
      <header class="header-area header-wrapper bg-white clearfix">
        <?php
        # Display Top menu?
        if ( $top_menu ) : ?>
          <div class="header-top-bar bg-dark ptb-10">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7  hidden-xs">
                  <div class="header-top-left">
                    <nav class="header-top-menu secondary-menu">
                      <?php
                      // Header Top Menu
                        wp_nav_menu(
                          array(
                            'menu' => 'top-menu',
                            'theme_location' => 'top-menu',
                          )
                        );
                       ?>
                    </nav>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                  <div class="header-top-right clierfix text-right">
                    <!-- Social Icon: Currently Hidden -->
                    <div class="header-social-bookmark topbar-sblock sr-only">
                      <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      </ul>
                    </div>
                    <!-- /.social icon -->
                    <div class="zmaga-calendar topbar-sblock">
                      <span class="calendar uppercase"><?php echo current_time( get_option('date_format') ); ?></span>
                    </div>
                    <!-- Currently Hidden -->
                    <div class="user-accoint topbar-sblock sr-only">
                      <span class="login-btn uppercase">Login</span>
                      <div class="login-form-wrap bg-white">
                        <form class="signin-form text-left">
                          <input type="text" class="form-control username" placeholder="Username or Email">
                          <input type="password" class="form-control password" placeholder="Password">
                          <input type="checkbox" value=" Remember Me" class="remember"> &nbsp;Remember Me<br>
                          <div class="submit-box clearfix  mt-20">
                            <input type="submit" value="Login">
                            <input type="submit" value="Register">
                          </div>
                          <a href="#" class="forget">Forget username/password?</a>
                          <div class="login-social-box">
                            <a href="#" class="social-btn bg-facebook block"><span class="btn_text"><i class="fa fa-facebook"></i>Login with Facebook</span></a>
                            <a href="#" class="social-btn bg-twitter block"><span class="btn_text"><i class="fa fa-twitter"></i>Login with Twitter</span></a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <nav class="nav navbar navbar-default navbar-sticky <?php echo $logo_position; ?> navbar-mobile bootsnav">

            <!-- Start Top Search -->
            <div class="top-search ">
                <div class="container">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav sr-only">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <!-- <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li> -->
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand " href="<?php echo esc_url( home_url() ); ?>">
                    <?php
                      $logo = get_theme_mod('logo', '');
                      if ( !empty($logo) ) : ?>
                        <img src="<?php echo $logo; ?>" class="logo" alt="">
                    <?php else:  ?>
                      <span class="sr-only">
                        <?php  bloginfo( 'name' );  ?>
                      </span>
                    <?php endif; ?>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php

                   wp_nav_menu( array(
                       'menu'              => 'menu-1',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'container'         => 'div',
                       'container_class'   => 'collapse navbar-collapse ',
                        'container_id'      => 'navbar-menu',
                       'menu_class'        => "nav navbar-nav $navbar_position",
                       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                       'walker'            => new wp_bootstrap_navwalker()
                       )
                   );
                       ?>

            </div>

        </nav>
        <div class="header-middle-area">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 header-mdh">
                <div class="global-table">
                  <div class="global-row">
                    <div class="global-cell">
                      <div class="logo">
                        <div class="site-branding">
                          <?php
                            // the_custom_logo();
                            if ( is_front_page() && is_home() ) : ?>
                              <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                  <?php bloginfo( 'name' ); ?>
                                </a>
                              </h1>
                              <?php else : ?>
                              <p class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                  <?php bloginfo( 'name' ); ?>
                                </a>
                              </p>
                              <?php
                            endif;

                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                              <p class="site-description">
                                <?php echo $description; /* WPCS: xss ok. */ ?>
                              </p>
                              <?php
                            endif; ?>
                        </div>
                        <!-- .site-branding -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-lg-7 col-sm-7 col-xs-12 col-lg-offset-1 header-mdh hidden-xs">
                <div class="global-table">
                  <div class="global-row">
                    <div class="global-cell">
                      <div class="advertisement text-right">
                        <a href="#" class="block"><img src="http://placehold.it/600x100" alt="ad img"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if ( $bn ) : ?>
        <div class="breakingnews-wrapper hidden-xs">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <div class="breakingnews clearfix fix">
                  <div class="bn-title">
                    <h6 class="uppercase"><?php echo $bn_title; ?></h6>
                  </div>
                  <div class="news-wrap">
                    <?php
                      $args = array(
                        'post_per_page' => 3,
                        'cat'           => $bn_posts,
                      );
                      // The Query
                      $the_query = new WP_Query( $args );

                      // The Loop
                      if ( $the_query->have_posts() ) {
                      	echo '<ul  class="bkn clearfix" id="bkn">';
                      	while ( $the_query->have_posts() ) {
                      		$the_query->the_post();
                      		echo '<li><a href="'.get_the_permalink().'" >' . get_the_title() . '</a></li>';
                      	}
                      	echo '</ul>';
                      	/* Restore original Post Data */
                      	wp_reset_postdata();
                      } else {
                      	// no posts found
                      }
                     ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </header>
      <!-- End of header area -->


        <a class="skip-link screen-reader-text" href="#content">
          <?php esc_html_e( 'Skip to content', 'civitas' ); ?>
        </a>
        <!-- Original Header -->
        <header id="masthead" class="site-header sr-only">
          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'civitas' ); ?></button>
            <?php
      				// wp_nav_menu( array(
      				// 	'theme_location' => 'menu-1',
      				// 	'menu_id'        => 'primary-menu',
      				// ) );
      			?>
          </nav>
          <!-- #site-navigation -->
        </header>
        <!-- #masthead -->

        <!-- Get Trending Post Slider, after breaking news.  -->
        <?php get_template_part('section/trending') ?>
