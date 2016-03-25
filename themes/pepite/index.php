<?php get_header(); ?>
<div class="container">
<?php

if(is_active_sidebar('widg-center-up'))
{
?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php var_dump(dynamic_sidebar( 'widg-center-up' )); ?>
	</div>
<?php
}
?>
<div class="content">

</div>
</div>
<?php get_footer();
