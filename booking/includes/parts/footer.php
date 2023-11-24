<business-footer>
  <div class="page-container">
    <section class="panes">
      <div class="find">
        <h3>Find us</h3>
        <div>
          <kemet-tabs panel-effect="fade" tabs-align="start">
            <?php
              $numOfLocations = get_theme_mod('business-location-number');
              for ($location = 0; $location < $numOfLocations; $location++) {
                ?>
                  <kemet-tab slot="tab"><?php echo get_theme_mod('business-location-name-'. $location); ?></kemet-tab>
                  <kemet-tab-panel slot="panel">
                    <ul>
                      <li>
                        <kemet-icon icon="geo-alt" size="16"></kemet-icon>
                        <a href="<?php echo get_theme_mod('business-location-address-link-'. $location); ?>" target="_blank">
                          <?php echo get_theme_mod('business-location-address-'. $location); ?>
                        </a>
                      </li>
                      <li>
                        <kemet-icon icon="envelope" size="16"></kemet-icon>
                        <a href="mailto:<?php echo get_theme_mod('business-location-email-'. $location); ?>">
                          <?php echo get_theme_mod('business-location-email-'. $location); ?>
                        </a>
                      </li>
                      <li>
                        <kemet-icon icon="phone" size="16"></kemet-icon>
                        <a href="tel:<?php echo get_theme_mod('business-location-phone-'. $location); ?>"><?php echo get_theme_mod('business-location-phone-'. $location); ?></a>
                      </li>
                    </ul>
                  </kemet-tab-panel>
                <?php
              }
            ?>
          </kemet-tabs>
          <?php
            $footerSocialMenuArgs = array(
              'menu'                 => 'Social Menu',
              'container'            => '',
              'container_class'      => '',
              'container_id'         => '',
              'container_aria_label' => '',
              'menu_class'           => 'social',
              'menu_id'              => '',
              'echo'                 => true,
              'fallback_cb'          => 'wp_page_menu',
              'before'               => '',
              'after'                => '',
              'link_before'          => '',
              'link_after'           => '',
              'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'item_spacing'         => 'preserve',
              'depth'                => 0,
              'walker'               => '',
              'theme_location'       => '',
            );

            wp_nav_menu($footerSocialMenuArgs);
          ?>
        </div>
      </div>
      <div class="hours">
        <h3>Our Hours</h3>
        <table>
          <tr>
            <td>Monday:</td>
            <td><?php echo get_theme_mod('business-hours-monday'); ?></td>
          </tr>
          <tr>
            <td>Tuesday:</td>
            <td><?php echo get_theme_mod('business-hours-tuesday'); ?></td>
          </tr>
          <tr>
            <td>Wednesday:</td>
            <td><?php echo get_theme_mod('business-hours-wednesday'); ?></td>
          </tr>
          <tr>
            <td>Thursday:</td>
            <td><?php echo get_theme_mod('business-hours-thursday'); ?></td>
          </tr>
          <tr>
            <td>Friday:</td>
            <td><?php echo get_theme_mod('business-hours-friday'); ?></td>
          </tr>
          <tr>
            <td>Saturday:</td>
            <td><?php echo get_theme_mod('business-hours-saturday'); ?></td>
          </tr>
          <tr>
            <td>Sunday:</td>
            <td><?php echo get_theme_mod('business-hours-sunday'); ?></td>
          </tr>
        </table>
      </div>
      <div class="about">
        <h3>About <?php echo get_bloginfo('name'); ?></h3>
        <div>
          <?php
            $aboutPage = get_posts(array(
              'name' => 'about',
              'post_type' => 'page',
              'numberposts' => 1
            ));

            if ($aboutPage) {
              echo $aboutPage[0]->post_excerpt;
              echo '<p><kemet-button type="rounded" link="'. home_url('/about') .'">Read More</kemet-button></p>';
            }
          ?>
        </div>
      </div>
    </section>
  </div>
</business-footer>
<business-footer-legal>
  <small class="page-container">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>.</small>
</business-footer-legal>
