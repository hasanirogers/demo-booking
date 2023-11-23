<?php


function business_customize_register_site($wp_customize) {
  // site page width
  $wp_customize->add_setting('site-page-width', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_site_width', array(
    'label' => __('Max Page Width'),
    'section' => 'title_tagline',
    'settings' => 'site-page-width',
    'type' => 'text'
  )));

  // site logo
  $wp_customize->add_setting('site-logo', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'theme_site_logo', array(
    'label' => __('Site Logo'),
    'section' => 'title_tagline',
    'settings' => 'site-logo'
  )));


  // site masthead background
  $wp_customize->add_setting('site-masthead-background', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'theme_site_masthead-background', array(
    'label' => __('Site Masthead'),
    'section' => 'title_tagline',
    'settings' => 'site-masthead-background'
  )));

  // site colors
  $wp_customize->add_setting('site-color-primary', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_primary', array(
    'label'     => __('Primary Color'),
    'section'   => 'title_tagline',
    'settings'  => 'site-color-primary',
  )));

  $wp_customize->add_setting('site-color-secondary', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_secondary', array(
    'label'     => __('Secondary Color'),
    'section'   => 'title_tagline',
    'settings'  => 'site-color-secondary',
  )));

  $wp_customize->add_setting('site-color-tertiary', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_tertiary', array(
    'label'     => __('Tertiary Color'),
    'section'   => 'title_tagline',
    'settings'  => 'site-color-tertiary',
  )));

  $wp_customize->add_setting('site-color-background', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_background', array(
    'label'     => __('Background Color'),
    'section'   => 'title_tagline',
    'settings'  => 'site-color-background',
  )));

  $wp_customize->add_setting('site-color-footer', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_footer', array(
    'label'     => __('Footer Color'),
    'section'   => 'title_tagline',
    'settings'  => 'site-color-footer',
  )));
}
add_action('customize_register', 'business_customize_register_site');



function business_customize_register_information($wp_customize) {
  // sections
  $wp_customize->add_section('business-information', array(
    'title' => __('Business Information'),
    'description' => __('Information about the business.')
  ));

  // store hours
  $wp_customize->add_setting('business-hours-monday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_monday_hours', array(
    'label'     => __('Monday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-monday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-tuesday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_tuesday_hours', array(
    'label'     => __('Tuesday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-tuesday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-wednesday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_wednesday_hours', array(
    'label'     => __('Wednesday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-wednesday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-thursday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_thursday_hours', array(
    'label'     => __('Thursday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-thursday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-friday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_friday_hours', array(
    'label'     => __('Friday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-friday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-saturday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_saturday_hours', array(
    'label'     => __('Saturday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-saturday',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('business-hours-sunday', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_sunday_hours', array(
    'label'     => __('Sunday Hours'),
    'section'   => 'business-information',
    'settings'  => 'business-hours-sunday',
    'type'      =>  'text'
  )));

  // contact info
  $wp_customize->add_setting('headquarters-address', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_address', array(
    'label'     => __('Headquarters Address'),
    'section'   => 'business-information',
    'settings'  => 'headquarters-address',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('headquarters-address-link', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_address_link', array(
    'label'     => __('Headquarters Address Link'),
    'section'   => 'business-information',
    'settings'  => 'headquarters-address-link',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('primary-email', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_email', array(
    'label'     => __('Primary Email'),
    'section'   => 'business-information',
    'settings'  => 'primary-email',
    'type'      =>  'text'
  )));

  $wp_customize->add_setting('primary-phone', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_phone', array(
    'label'     => __('Primary Phone Number'),
    'section'   => 'business-information',
    'settings'  => 'primary-phone',
    'type'      =>  'text'
  )));
}
add_action('customize_register', 'business_customize_register_information');



function business_customize_locations_fields() {
  return ['name', 'address', 'address-link', 'email', 'phone'];
}

function business_customize_register_locations( $wp_customize ) {
  if (!isset($wp_customize)) {
    return;
  }

  // number of locations
  $wp_customize->add_setting('business-location-number', array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_location_number', array(
    'label'     => __('Number of Locations'),
    'section'   => 'business-locations',
    'settings'  => 'business-location-number',
    'type'      =>  'number'
  )));

  if (class_exists('WP_Customize_Control')) {
    class Toms_Control_Builder extends WP_Customize_Control {
      public $html = array();

      public function build_field_html($key, $setting, $fieldname) {
        $value = '';
        $uniqueKey = $fieldname .'-'. $key;
        if (isset($this->settings[$key])) {
          $value = $this->settings[$key]->value();
        }
        $this->html[] = '<p><label>'. $fieldname .'<input type="text" value="'.$value.'" '.$this->get_link($key).' /></label></p>';
      }

      public function render_content() {
        $output =  '<h3>' . $this->label .'</h3>';
        $fields = business_customize_locations_fields();
        echo $output;
        foreach ($this->settings as $key => $value) {
          $this->build_field_html($key, $value, $fields[$key]);
        }
        echo implode( '', $this->html );
      }
    }

    $field = [];
    $section = new Business_Customizer_Section($wp_customize, 'business-locations', 'Business Locations', 25);
    $numOfLocations = get_theme_mod('business-location-number');

    for ($location = 0; $location < $numOfLocations; $location++) {
      $field[$locations] = new Business_Customizer_Field('business-location-'. $location, '', 'Location '. $location+1, business_customize_locations_fields(), $location);
      $field[$locations]->add_to_section( $wp_customize, $section );
    }
  }
}
add_action( 'customize_register', 'business_customize_register_locations' );


class Business_Customizer_Section {
  public $name = '';
  public $pretty_name = '';
  public function __construct( WP_Customize_Manager $wp_customize, $name, $pretty_name, $priority = 25 ) {
    $this->name = $name;
    $this->pretty_name = $pretty_name;

    $wp_customize->add_section( $this->getName(), array(
        'title'          => $pretty_name,
        'priority'       => $priority,
        'transport'      => 'refresh'
    ));
  }

  public function getName() {
    return $this->name;
  }

  public function getPrettyName() {
    return $this->pretty_name;
  }
}

class Business_Customizer_Field {
  private $name;
  private $default;
  private $pretty_name;
  private $fields;
  private $location;

  public function __construct($name, $default, $pretty_name, $fields, $location) {
    $this->name = $name;
    $this->default = $default;
    $this->pretty_name = $pretty_name;
    $this->fields = $fields;
    $this->location = $location;
  }

  public function add_to_section(WP_Customize_Manager $wp_customize, Business_Customizer_Section $section) {
    $fields = [];

    foreach ($this->fields as $field) {
      $uniqueField = 'business-location-'. $field .'-'. $this->location;

      $wp_customize->add_setting($uniqueField, array(
        'default'        => $this->default,
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options'
      ));

      $fields[] = $uniqueField;
    }

    $control = new Toms_Control_Builder($wp_customize, $this->name, array(
      'label'    => $this->pretty_name,
      'section'  => $section->getName(),
      'settings' => $fields
    ));

    $wp_customize->add_control($control);
  }
}
