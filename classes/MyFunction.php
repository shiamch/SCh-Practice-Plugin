<?php
class MyFunction {

    public function __construct() {
//        add_action('admin_notices',array($this, 'my_hello_world_message'));
        add_action('say-something',array($this, 'saySomethingFunction'));

        //builtin
        add_filter('the_content', array($this, 'the_content_filter'));

        //custom
        add_filter('val_show', array($this, 'showFunction'));
    }

    public function addMenuPage(){
        add_action( 'admin_menu',array($this, 'wpshiamch_final_plugin_page'));
    }

    function wpshiamch_final_plugin_page() {
        add_menu_page(
            'wp-shiamch',
            'Final Plugin',
            'manage_options',
            'shiam-ch',array($this, 'wp_shiamch_create_page'),
            'dashicons-unlock',
            101
        );
    }

    function showFunction($value){
        echo '<p>From filter: </p>'.$value;
    }

    function wp_shiamch_create_page() {
        echo "<h3>Welcome to Final Plugin</h3><br/>";
        include 'main-page.php';
        do_action('say-something');
        apply_filters('val_show', 20);
    }

    function saySomethingFunction(){
        echo "<h4>Hello from Shiam</h4>";
    }

    public function sayHello() {
        echo "<span class='hello'>Hi, World!</span>";
    }

    function my_hello_world_message() {
        echo '<div class="notice notice-success is-dismissible my-custom-class"><p>Hello World from My Hello World Plugin!</p></div>';
    }

    // Built-in filter hook 'the_content'
    public function the_content_filter($content) {
        $modified_content = $content . '<p style="color: green">This is a built-in filter hook example hello.</p>';
        return $modified_content;
    }
}