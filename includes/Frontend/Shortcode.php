<?php

namespace Includes\Frontend;

class Shortcode{
    public function __construct()
    {
        add_shortcode('starter', [$this, 'render_shortcode']);
    }
    public function render_shortcode( $atts, $content){
        echo '<h3>Hey! This is Shortcode from plugin starter</h3>';
    }
}

