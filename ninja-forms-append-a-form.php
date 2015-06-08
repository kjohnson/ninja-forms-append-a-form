<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Ninja Forms - Append A Form
 * Plugin URI: http://kylebjohnson.me
 * Description: Append a Ninja Form to all Single Posts
 * Version: 0.0.1
 * Author: Kyle B. Johnson
 * Author URI: http://kylebjohnson.me
 */

class NF_AppendAForm
{

    public function __construct()
    {
        add_filter( 'the_content', array( $this, 'append' ) );
    }

    function append($content)
    {
        global $post;

        if( $post AND is_single()  ){
            $content .= do_shortcode( '[ninja_forms id=1]');
        }

        return $content;
    }


}

new NF_AppendAForm();