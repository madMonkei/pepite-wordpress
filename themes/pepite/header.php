<!doctype html>
<html>
  <head>
    <title><?php echo wp_title() ?></title>
    <link rel="stylesheet" href="wp-content/themes/pepite/style.css" type="text/css"/>
  </head>
<body>
<header class="header">
  <div id='logo_head'>
    <figure id='head_pepite_logo'>
      <img alt='logo pepite' src='http://localhost/wordpress/wp-content/uploads/2016/03/creajidfPEPITE2_GRAND.jpg'>
    </figure>
     <figure id='head_paris13_logo'>
      <img alt='logo paris 13' src='http://localhost/wordpress/wp-content/uploads/2016/03/logoparis13-3.png'>
    </figure>
  </div>
  <?php 
  wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'menu_class' => 'main_menu',
    'container'=>'div',
    'container_class'=>'main_menu_content'
  ));
  ?>
</header>

