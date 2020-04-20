<?php
 function zendevs_hello_world_shortcode($atts) { 
    $a=shortcode_atts( array( 
       'name'   =>   'world' 
    ) ,   $atts   ) ; 
    return   'Hello '   .   $a['name']   .   ! ' ; 
 } 
add_shortcode ('helloworld', 'zendevs_hello_world_shortcode');
