<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title('name'); ?> - <?php bloginfo('description'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"media="all" type="text/css"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0"href="<?php bloginfo('rss2_url');?>"/>
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php global $mydata; ?>
<header class="main-header">
  <div class="triangle">
    <div class="centered-container">
      <nav class="main-menu">
        <?php
          $args = array(
          'theme_location' => 'Menu Princicpal',
          'menu' => 'Menu Principal',
          'container_class' => 'menu-nav-container',
          'container_id' => '',
          'menu_class' => 'menu'
        );
          wp_nav_menu( $args );
        ?>
        </nav>
        <div class="main-content">
          <div class="logo">
            <a href="<?= esc_url(home_url()) ?>">
              <img src="<?= $mydata->header_logo ?>" alt="">	
            </a>
          </div>
          <div class="title">
            <sapn><strong>yoga</strong> classes</sapn>
            <div class=borde></div>
            <h2>body harmony</h2>
          </div>
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum 
                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan 
                lacus vel facilisis. 
              </p>
            </div>
          <buttom class="buttom">
            <a href="#">More</a>
          </buttom>
      </div>
	</div>
  </div>
  </div>
</header> 