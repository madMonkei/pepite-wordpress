<!doctype html>
<html>
  <head>
    <title><?php echo wp_title() ?></title>
    <link rel="stylesheet" href="wp-content/themes/pepite/style.css" type="text/css"/>
  </head>
<body>
<header class="header">
	<div>
		<figure id='head_logo'>
			<img src=>
		</figure>
	</div>
   <?php wp_nav_menu(array('theme_location' => 'main_menu','menu_class' => 'main_menu_content','container'=>'<div></div>','container_class'=>'main_menu_content')) ?>
</header>

