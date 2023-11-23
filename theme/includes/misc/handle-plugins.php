<?php
  function handle_bookly() {
    global $post;

    $postSlug = $post->post_name;
    $bookingPageSlug = 'book';
    $bookingPluginLocation = 'bookly-responsive-appointment-booking-tool/main.php';

    if ($postSlug !== $bookingPageSlug) {
      // this was an attempt at manually disabling scripts from bookly book...
      // you can disable bookly scripts and styles by in bookly settings by changing "Enqueue" to "Print"
      // echo '<pre>';
      // print_r(get_queued_scripts_styles());
      // echo '</pre>';
    }
  }

  add_action('wp', 'handle_bookly'); // wp hook is needed for access to $post global
