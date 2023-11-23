<!DOCTYPE html>
<html lang="en">
<?php
  $siteLogoID = get_theme_mod('site-logo');
  $siteLogoURL = wp_get_attachment_url($siteLogoID);
  $siteMastheadBackgroundID = get_theme_mod('site-masthead-background');
  $siteMastheadBackgroundURL = wp_get_attachment_url($siteMastheadBackgroundID);

  $headerMenuArgs = array(
    'container' => '',
    'menu_class' => '',
  );
?>

<business-header>
  <a href="<?php echo get_home_url(); ?>" class="mobile">
    <img src="<?php echo $siteLogoURL; ?>"  alt="Booking Demo Logo" />
    <h2><?php echo get_bloginfo('name'); ?></h2>
    <business-hamburger></business-hamburger>
  </a>
  <business-page-container>
    <ul class="information">
      <li>
        <kemet-icon icon="geo-alt" size="16"></kemet-icon>
        <a href="<?php echo get_theme_mod('headquarters-address-link'); ?>" target="_blank">
          <?php echo get_theme_mod('headquarters-address'); ?>
        </a>
      </li>
      <li>
        <kemet-icon icon="envelope" size="16"></kemet-icon>
        <a href="mailto:<?php echo get_theme_mod('primary-email'); ?>">
          <?php echo get_theme_mod('primary-email'); ?>
        </a>
      </li>
      <li>
        <kemet-icon icon="phone" size="16"></kemet-icon>
        <a href="tel:<?php echo get_theme_mod('primary-phone'); ?>"><?php echo get_theme_mod('primary-phone'); ?></a>
      </li>
    </ul>
    <nav class="navigation">
      <a href="<?php echo get_home_url(); ?>" class="logo">
        <img src="<?php echo $siteLogoURL; ?>" alt="Booking Demo Logo" />
        <h2><?php echo get_bloginfo('name'); ?></h2>
      </a>
      <?php wp_nav_menu($headerMenuArgs); ?>
    </nav>
  </business-page-container>
</business-header>
