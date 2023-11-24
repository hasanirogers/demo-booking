<?php wp_head(); ?>

<body <?php body_class(); ?>>
  <kemet-drawer effect="slide" side="left">
    <nav slot="navigation">
      <?php get_template_part('includes/parts/aside'); ?>
    </nav>
    <section slot="content">
      <?php get_template_part('includes/parts/header'); ?>
      <?php get_template_part('includes/parts/hero'); ?>
      <main>
        <business-page-container>
          <?php the_content(); ?>
          <br /><br />
          <!-- has a major impact on performance -->
          <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-d6ea0ac1-167a-42ce-bb2f-f30ec9400178"></div> -->
        </business-page-container>
      </main>
      <?php get_template_part('includes/parts/footer'); ?>
    </section>
  </kemet-drawer>
</body>

<?php wp_footer(); ?>
