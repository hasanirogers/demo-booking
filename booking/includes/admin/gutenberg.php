<?php
  function business_gutenberg_blocks() {
      $args = array(
        'editor_script' => 'business-blocks-js'
      );

      register_block_type('business/hero-cta', $args);
      register_block_type('business/google-maps');
  }
  add_action( 'init', 'business_gutenberg_blocks' );
