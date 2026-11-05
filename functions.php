<?php
if (!defined('ABSPATH')) { exit; }
function giph_setup() {
    load_theme_textdomain('giph', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('height'=>120,'width'=>360,'flex-height'=>true,'flex-width'=>true));
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array('primary'=>__('Menú principal','giph')));
}
add_action('after_setup_theme','giph_setup');
function giph_assets() {
    wp_enqueue_style('giph-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('giph-script', get_template_directory_uri().'/assets/site.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','giph_assets');
function giph_customize_register($wp_customize) {
    $wp_customize->add_section('giph_contact', array('title'=>__('Datos de contacto — Gestión Integral PH','giph'),'priority'=>32));
    $fields = array(
        'phone' => array('Teléfono principal','314 314 6891','text'),
        'whatsapp' => array('WhatsApp','311 478 7655','text'),
        'email' => array('Correo electrónico','gestionintegralphyjuridicasas@gmail.com','email'),
        'address' => array('Dirección','Calle 48bis sur #22A03','text'),
        'city' => array('Ciudad y país','Bogotá, Colombia','text'),
    );
    foreach ($fields as $key=>$field) {
        $wp_customize->add_setting('giph_'.$key, array('default'=>$field[1],'sanitize_callback'=>$field[2]==='email'?'sanitize_email':'sanitize_text_field'));
        $wp_customize->add_control('giph_'.$key, array('label'=>__($field[0],'giph'),'section'=>'giph_contact','type'=>$field[2]));
    }
}
add_action('customize_register','giph_customize_register');
function giph_contact_value($key) { return get_theme_mod('giph_'.$key, array('phone'=>'314 314 6891','whatsapp'=>'311 478 7655','email'=>'gestionintegralphyjuridicasas@gmail.com','address'=>'Calle 48bis sur #22A03','city'=>'Bogotá, Colombia')[$key] ?? ''); }
function giph_digits($value) { return preg_replace('/\D+/', '', (string)$value); }
function giph_schema() {
    if (!is_front_page()) return;
    $phone = giph_digits(giph_contact_value('phone'));
    $email = sanitize_email(giph_contact_value('email'));
    $address = giph_contact_value('address');
    $city = giph_contact_value('city');
    $schema = array(
        '@context'=>'https://schema.org','@type'=>'ProfessionalService',
        'name'=>'Gestión Integral PH y Jurídica S.A.S.',
        'description'=>'Administración profesional de propiedad horizontal y respaldo jurídico especializado.',
        'telephone'=>'+57'.$phone,'email'=>$email,
        'address'=>array('@type'=>'PostalAddress','streetAddress'=>$address,'addressLocality'=>$city,'addressCountry'=>'CO'),
        'areaServed'=>'Bogotá, Colombia'
    );
    echo '<script type="application/ld+json">'.wp_json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';
}
add_action('wp_head','giph_schema');
function giph_meta_description() {
    if (is_front_page()) echo '<meta name="description" content="Administración profesional de propiedad horizontal y asesoría jurídica especializada en Bogotá. Gestión transparente, respaldo legal y comunicación efectiva.">';
}
add_action('wp_head','giph_meta_description',2);
