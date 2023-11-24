<?php wp_head(); ?>

<body <?php body_class(); ?>>
  <kemet-drawer effect="slide" side="left">
    <nav slot="navigation">
      <?php get_template_part('includes/parts/aside'); ?>
    </nav>
    <section slot="content">
      <?php get_template_part('includes/parts/header'); ?>
      <main>
        <business-page-container>
          <?php get_template_part('includes/parts/featured'); ?>
          <?php the_content(); ?>
        </business-page-container>
      </main>
      <?php get_template_part('includes/parts/footer'); ?>
    </section>
  </kemet-drawer>
</body>

<?php wp_footer(); ?>
