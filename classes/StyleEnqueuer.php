<?php
namespace FinalPlugin\Classes\StyleEnqueuer;

class StyleEnqueuer {
    public function __construct()
    {

    }

    function register()
    {
        add_action("admin_enqueue_scripts", "my_enq_styles_and_scripts");
    }

    function enqueueStyleScript()
    {
        wp_enqueue_style('my-style', plugins_url('assets/css/my-style.css', __FILE__));
        wp_enqueue_script('my-script', plugins_url('assets/js/script.js', __FILE__), array('jquery'), '1.0', true);
    }
}
