
<!--exemple pour enlever bootstrap du theme enfant-->
<?php
add_action('wp_enqueue_scripts', function () {
   wp_deregister_style('bootstrap');
}, 11);
?>