<?php
/**
 * @package WordPress
 * @subpackage Resideo
 */

if (!function_exists('resideo_admin_recaptcha')): 
    function resideo_admin_recaptcha() {
        add_settings_section('resideo_recaptcha_section', __('Google reCAPTCHA', 'resideo'), 'resideo_recaptcha_section_callback', 'resideo_recaptcha_settings');
        add_settings_field('resideo_recaptcha_site_key_field', __('Site Key', 'resideo'), 'resideo_recaptcha_site_key_field_render', 'resideo_recaptcha_settings', 'resideo_recaptcha_section');
        add_settings_field('resideo_recaptcha_secret_key_field', __('Secret Key', 'resideo'), 'resideo_recaptcha_secret_key_field_render', 'resideo_recaptcha_settings', 'resideo_recaptcha_section');
        add_settings_field('resideo_recaptcha_enable_field', __('Enable reCAPTCHA in Contact Forms', 'resideo'), 'resideo_recaptcha_enable_field_render', 'resideo_recaptcha_settings', 'resideo_recaptcha_section');
    }
endif;

if (!function_exists('resideo_recaptcha_section_callback')): 
    function resideo_recaptcha_section_callback() { 
        echo '<p class="help">' . __('reCAPTCHA is a free service to protect your website from spam and abuse. For using it, you need a <b>Site Key</b> and a <b>Secret Key</b> that you can get from ', 'resideo') . '<a href="https://www.google.com/recaptcha/admin" target="_blank">' . __('here', 'resideo') . '</a></p>';
    }
endif;

if (!function_exists('resideo_recaptcha_site_key_field_render')): 
    function resideo_recaptcha_site_key_field_render() {
        $options = get_option('resideo_recaptcha_settings'); ?>

        <input type="text" size="40" name="resideo_recaptcha_settings[resideo_recaptcha_site_key_field]" value="<?php if (isset($options['resideo_recaptcha_site_key_field'])) { echo esc_attr($options['resideo_recaptcha_site_key_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_recaptcha_secret_key_field_render')): 
    function resideo_recaptcha_secret_key_field_render() {
        $options = get_option('resideo_recaptcha_settings'); ?>

        <input type="text" size="40" name="resideo_recaptcha_settings[resideo_recaptcha_secret_key_field]" value="<?php if (isset($options['resideo_recaptcha_secret_key_field'])) { echo esc_attr($options['resideo_recaptcha_secret_key_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_recaptcha_enable_field_render')): 
    function resideo_recaptcha_enable_field_render() {
        $options = get_option('resideo_recaptcha_settings'); ?>

        <input type="checkbox" name="resideo_recaptcha_settings[resideo_recaptcha_enable_field]" <?php if (isset($options['resideo_recaptcha_enable_field'])) { checked($options['resideo_recaptcha_enable_field'], 1); } ?> value="1">
    <?php }
endif;
?>