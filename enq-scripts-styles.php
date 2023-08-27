<?php
// enqueue-scripts-styles.php

// Enqueue styles and scripts
function my_enq_styles_and_scripts() {
    // Enqueue your style.css file
    wp_enqueue_style('my-style', plugins_url('assets/css/my-style.css', __FILE__));

    // Enqueue your script.js file
    wp_enqueue_script('my-script', plugins_url('assets/js/my-script.js', __FILE__), array('jquery'), '1.0', true);
}

add_action("admin_enqueue_scripts", "my_enq_styles_and_scripts");

