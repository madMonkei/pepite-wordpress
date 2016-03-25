
<?php
/*
	Plugin Name: widget Pepite
	Plugin URI: htt://localhost
	Description: les widgets de pepite
	Version: 1.0.0
	Author: Alexis Dubois
	Author URI: htt://localhost
*/
//include_once plugin_dir_path( __FILE__ ).'aganda_widget.php';
add_action('widgets_init','init_widget');

function init_widget()
{
	if( function_exists('register_widget'))
    {
    	register_widget('pepite_agenda_Widget');
    }
}
class pepite_agenda_Widget extends WP_Widget
{
    function pepite_agenda_Widget()
    {
    	$params = array(	
    		'classname'=>'test',
    		'description' => 'Les trois derniers évènement de l\'agenda.'
    	);
        $this->WP_widget('pepite_agenda','Agenda',$params);
    }
    
    function widget($args, $inst)
    {
    	extract($args);
    	$nb_event_display = intval($inst['nb_event']);
    	echo $before_widget;
    	echo $before_title.$inst['title'].$after_title;
    	$fake_event = array(
    		array(
    			'date' => '12-3-2016',
    			'titre' => 'un événement',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum aliquam turpis, vel convallis magna congue eget. Mauris imperdiet a orci ut interdum. Sed ultricies condimentum consequat. Maecenas iaculis non quam vel finibus. Quisque at lectus egestas, tempor purus et, scelerisque orci. Aliquam erat volutpat. Vestibulum pharetra justo nibh, ut suscipit nibh imperdiet faucibus. Mauris semper sollicitudin leo id consequat. Sed sit amet neque tristique, ullamcorper velit nec, imperdiet libero. Morbi placerat vehicula auctor. Ut eu ipsum vitae ipsum venenatis imperdiet id non augue. Donec vitae placerat mi. Nulla a eleifend sapien. Cras vitae enim molestie, euismod libero et, sollicitudin tortor. Cras sed quam neque.

				Aenean justo nibh, euismod sed eros id, volutpat iaculis metus. Nunc suscipit vel quam et mattis. Aliquam eleifend est sed magna ultricies, id dictum libero commodo. Praesent vehicula tempor risus id blandit. Ut a sem est. Mauris viverra tincidunt finibus. Cras in dolor vel sapien pretium maximus. Morbi urna mauris, molestie ut mi nec, faucibus fermentum nulla.'
    		),
    		array(
    			'date' => '15-3-2016',
    			'titre' => 'un événement',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum aliquam turpis, vel convallis magna congue eget. Mauris imperdiet a orci ut interdum. Sed ultricies condimentum consequat. Maecenas iaculis non quam vel finibus. Quisque at lectus egestas, tempor purus et, scelerisque orci. Aliquam erat volutpat. Vestibulum pharetra justo nibh, ut suscipit nibh imperdiet faucibus. Mauris semper sollicitudin leo id consequat. Sed sit amet neque tristique, ullamcorper velit nec, imperdiet libero. Morbi placerat vehicula auctor. Ut eu ipsum vitae ipsum venenatis imperdiet id non augue. Donec vitae placerat mi. Nulla a eleifend sapien. Cras vitae enim molestie, euismod libero et, sollicitudin tortor. Cras sed quam neque.

			Aenean justo nibh, euismod sed eros id, volutpat iaculis metus. Nunc suscipit vel quam et mattis. Aliquam eleifend est sed magna ultricies, id dictum libero commodo. Praesent vehicula tempor risus id blandit. Ut a sem est. Mauris viverra tincidunt finibus. Cras in dolor vel sapien pretium maximus. Morbi urna mauris, molestie ut mi nec, faucibus fermentum nulla.'
    		),
    		array(
    			'date' => '20-3-2016',
    			'titre' => 'un événement',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum aliquam turpis, vel convallis magna congue eget. Mauris imperdiet a orci ut interdum. Sed ultricies condimentum consequat. Maecenas iaculis non quam vel finibus. Quisque at lectus egestas, tempor purus et, scelerisque orci. Aliquam erat volutpat. Vestibulum pharetra justo nibh, ut suscipit nibh imperdiet faucibus. Mauris semper sollicitudin leo id consequat. Sed sit amet neque tristique, ullamcorper velit nec, imperdiet libero. Morbi placerat vehicula auctor. Ut eu ipsum vitae ipsum venenatis imperdiet id non augue. Donec vitae placerat mi. Nulla a eleifend sapien. Cras vitae enim molestie, euismod libero et, sollicitudin tortor. Cras sed quam neque.

			Aenean justo nibh, euismod sed eros id, volutpat iaculis metus. Nunc suscipit vel quam et mattis. Aliquam eleifend est sed magna ultricies, id dictum libero commodo. Praesent vehicula tempor risus id blandit. Ut a sem est. Mauris viverra tincidunt finibus. Cras in dolor vel sapien pretium maximus. Morbi urna mauris, molestie ut mi nec, faucibus fermentum nulla.'
    		),
    		array(
    			'date' => '25-3-2016',
    			'titre' => 'un événement',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum aliquam turpis, vel convallis magna congue eget. Mauris imperdiet a orci ut interdum. Sed ultricies condimentum consequat. Maecenas iaculis non quam vel finibus. Quisque at lectus egestas, tempor purus et, scelerisque orci. Aliquam erat volutpat. Vestibulum pharetra justo nibh, ut suscipit nibh imperdiet faucibus. Mauris semper sollicitudin leo id consequat. Sed sit amet neque tristique, ullamcorper velit nec, imperdiet libero. Morbi placerat vehicula auctor. Ut eu ipsum vitae ipsum venenatis imperdiet id non augue. Donec vitae placerat mi. Nulla a eleifend sapien. Cras vitae enim molestie, euismod libero et, sollicitudin tortor. Cras sed quam neque.

			Aenean justo nibh, euismod sed eros id, volutpat iaculis metus. Nunc suscipit vel quam et mattis. Aliquam eleifend est sed magna ultricies, id dictum libero commodo. Praesent vehicula tempor risus id blandit. Ut a sem est. Mauris viverra tincidunt finibus. Cras in dolor vel sapien pretium maximus. Morbi urna mauris, molestie ut mi nec, faucibus fermentum nulla.'
    		),
    		array(
    			'date' => '9-3-2016',
    			'titre' => 'un événement',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum aliquam turpis, vel convallis magna congue eget. Mauris imperdiet a orci ut interdum. Sed ultricies condimentum consequat. Maecenas iaculis non quam vel finibus. Quisque at lectus egestas, tempor purus et, scelerisque orci. Aliquam erat volutpat. Vestibulum pharetra justo nibh, ut suscipit nibh imperdiet faucibus. Mauris semper sollicitudin leo id consequat. Sed sit amet neque tristique, ullamcorper velit nec, imperdiet libero. Morbi placerat vehicula auctor. Ut eu ipsum vitae ipsum venenatis imperdiet id non augue. Donec vitae placerat mi. Nulla a eleifend sapien. Cras vitae enim molestie, euismod libero et, sollicitudin tortor. Cras sed quam neque.

			Aenean justo nibh, euismod sed eros id, volutpat iaculis metus. Nunc suscipit vel quam et mattis. Aliquam eleifend est sed magna ultricies, id dictum libero commodo. Praesent vehicula tempor risus id blandit. Ut a sem est. Mauris viverra tincidunt finibus. Cras in dolor vel sapien pretium maximus. Morbi urna mauris, molestie ut mi nec, faucibus fermentum nulla.'
    		)
    	);
    	$nb_event = count($fake_event);
    	for($i=0;$i<$nb_event && $i<$nb_event_display;$i++)
    	{
    		$event = $fake_event[$i];
    		$date = date_create($event['date']);
    		$day = date_format($date,'d');
    		$month_year = date_format($date,'M Y');
    		$content = strlen($event['content'])>200 ? substr($event['content'],0,200) : $event['content'];
    	?>
    		<div class='pep_event_wrapper'>
    			<div class='pep_event_date'>
    				<p class='pep_event_date_day'><?= $day ?></p>
    				<p class='pep_event_date_M_Y'><?= $month_year ?></p>
    			</div>
    			<div class='pep_event_content'>
    				<h2><?= mb_strtoupper($event['titre'],'UTF-8'); ?></h2>
    				<p><?= $content ?><a href=''>... en savoir plus</a></p>
    			</div>
    		</div>
    	<?php
    	}
    	?>

    	<?php
        echo $after_widget;
    }
    function form($inst)
	{
	    $title = isset($inst['title']) ? $inst['title'] : '';
	    $nb_event = isset($inst['nb_event']) ? $inst['nb_event'] : '';
	    ?>
	    <p>
	        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this->get_field_name( 'nb_event' ); ?>"><?php _e( 'nombre d\'évènement  afficher :' ); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id( 'nb_event' ); ?>" name="<?php echo $this->get_field_name( 'nb_event' ); ?>" type="text" value="<?php echo  $nb_event; ?>" />
	    </p>
	    <?php
	}
	function update($new,$old)
	{

		$new_params = array(
			'title'=>$new['title'],
			'nb_event'=>$new['nb_event']
		);
		return $new_params;
	}
};
?>