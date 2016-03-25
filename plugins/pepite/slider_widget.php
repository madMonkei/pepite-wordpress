<?php
class pepite_slider_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('pepite_slider', 'Slider', array('description' => 'Les trois images d\'illustrations.'));
    }
    
    public function widget($args, $instance)
    {
        echo 'test slider';
    }
    public function form($instance)
	{
	    $title = isset($instance['title']) ? $instance['title'] : '';
	    ?>
	    <p>
	        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo  $title; ?>" />
	    </p>
	    <?php
	}
}