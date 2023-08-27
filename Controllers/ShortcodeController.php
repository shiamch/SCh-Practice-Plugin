<?php
namespace ShiamNamespace\Controllers;
class ShortcodeController
{
    public function createShortcode()
    {
        add_shortcode('new-sc', array($this, 'my_shortcode_function'));
    }

    public function my_shortcode_function($atts, $content = null) {
        return 'Hello Shortcode! Content goes here.';
    }
}