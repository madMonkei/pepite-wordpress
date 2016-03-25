
<footer id='main_footer'>
	<div id='main_footer_content'>
	 	<?php
	 	 wp_nav_menu(array(
		    'theme_location' => 'footer_menu',
		    'menu_class' => 'footer_menu',
		    'container'=>'div',
		    'container_class'=>'footer_menu_content'
	  	));  
	 	?>
	 	<div id='rs_links'>
			<figure class='rs_link'>
				<img alt='facebook'>
			</figure>
			<figure class='rs_link'>
				<img alt='twitter'>
			</figure>
			<figure class='rs_link'>
				<img alt='youtube'>
			</figure>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
</body>
</html>
