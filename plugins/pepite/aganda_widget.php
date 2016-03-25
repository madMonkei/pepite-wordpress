<?php
class pepite_agenda_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('pepite_agenda', 'Agenda', array('description' => 'Les trois derniers évènement de l\'agenda.'));
    }
    
    public function widget($args, $instance)
    {
        echo 'widget newsletter';
    }
}