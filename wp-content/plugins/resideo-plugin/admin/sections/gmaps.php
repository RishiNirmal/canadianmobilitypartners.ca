<?php
/**
 * @package WordPress
 * @subpackage Resideo
 */

if (!function_exists('resideo_admin_gmaps')): 
    function resideo_admin_gmaps() {
        add_settings_section('resideo_gmaps_section', __('Google Maps', 'resideo'), 'resideo_gmaps_section_callback', 'resideo_gmaps_settings');
        add_settings_field('resideo_gmaps_key_field', __('Google Maps API Key', 'resideo'), 'resideo_gmaps_key_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_lat_field', __('Google Maps Default Latitude', 'resideo'), 'resideo_gmaps_lat_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_lng_field', __('Google Maps Default Longitude', 'resideo'), 'resideo_gmaps_lng_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_zoom_field', __('Google Maps Default Zoom Level', 'resideo'), 'resideo_gmaps_zoom_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_style_field', __('Google Maps Style', 'resideo'), 'resideo_gmaps_style_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_poi_field', __('Show Places on Search Results Map', 'resideo'), 'resideo_gmaps_poi_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
        add_settings_field('resideo_gmaps_poi_list_field', __('Places List', 'resideo'), 'resideo_gmaps_poi_list_field_render', 'resideo_gmaps_settings', 'resideo_gmaps_section');
    }
endif;

if (!function_exists('resideo_gmaps_section_callback')): 
    function resideo_gmaps_section_callback() { 
        echo '';
    }
endif;

if (!function_exists('resideo_gmaps_key_field_render')): 
    function resideo_gmaps_key_field_render() {
        $options = get_option('resideo_gmaps_settings'); ?>

        <input type="text" size="40" name="resideo_gmaps_settings[resideo_gmaps_key_field]" value="<?php if (isset($options['resideo_gmaps_key_field'])) { echo esc_attr($options['resideo_gmaps_key_field']); } ?>" />
        <p class="help"><?php _e('Google Maps JavaScript API requires an API key. You can get it from', 'resideo'); ?> <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank"><?php _e('here', 'resideo'); ?></a>.</p>
    <?php }
endif;

if (!function_exists('resideo_gmaps_lat_field_render')): 
    function resideo_gmaps_lat_field_render() {
        $options = get_option('resideo_gmaps_settings'); ?>

        <input type="text" size="40" name="resideo_gmaps_settings[resideo_gmaps_lat_field]" value="<?php if (isset($options['resideo_gmaps_lat_field'])) { echo esc_attr($options['resideo_gmaps_lat_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_gmaps_lng_field_render')): 
    function resideo_gmaps_lng_field_render() {
        $options = get_option('resideo_gmaps_settings'); ?>

        <input type="text" size="40" name="resideo_gmaps_settings[resideo_gmaps_lng_field]" value="<?php if (isset($options['resideo_gmaps_lat_field'])) { echo esc_attr($options['resideo_gmaps_lng_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_gmaps_zoom_field_render')): 
    function resideo_gmaps_zoom_field_render() {
        $options = get_option('resideo_gmaps_settings');
        $values = array(3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
        $value_select = '<select id="resideo_gmaps_settings[resideo_gmaps_zoom_field]" name="resideo_gmaps_settings[resideo_gmaps_zoom_field]">';

        foreach ($values as $value) {
            $value_select .= '<option value="' . esc_attr($value) . '"';
            if (isset($options['resideo_gmaps_zoom_field']) && $options['resideo_gmaps_zoom_field'] == $value) {
                $value_select .= 'selected="selected"';
            }
            $value_select .= '>' . esc_html($value) . '</option>';
        }

        $value_select .= '</select>';

        print $value_select;
    }
endif;

if (!function_exists('resideo_gmaps_style_field_render')): 
    function resideo_gmaps_style_field_render() {
        $options = get_option( 'resideo_gmaps_settings' );
        $values = array(
            __('Default', 'resideo')          => '',
            __('Monochrome Light', 'resideo') => urlencode('[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]'),
            __('Monochrome Dark', 'resideo')  => urlencode('[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'),
            __('Aubergine', 'resideo')        => urlencode('[{"elementType":"geometry","stylers":[{"color":"#1d2c4d"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#8ec3b9"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#1a3646"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#64779e"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#334e87"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#023e58"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#283d6a"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#6f9ba5"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#023e58"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#3C7680"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#304a7d"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#2c6675"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#255763"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#b0d5ce"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#023e58"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#283d6a"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#3a4762"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#0e1626"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#4e6d70"}]}]'),
            __('Blue Light', 'resideo')       => urlencode('[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":"0.00"},{"lightness":"-81"},{"saturation":"-100"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"weight":"4.00"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.icon","stylers":[{"gamma":"6.45"}]},{"featureType":"administrative.land_parcel","elementType":"labels","stylers":[{"saturation":"-13"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"saturation":"-27"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.natural.terrain","elementType":"labels.text.fill","stylers":[{"weight":"9.81"}]},{"featureType":"landscape.natural.terrain","elementType":"labels.icon","stylers":[{"color":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.stroke","stylers":[{"weight":"3.27"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"weight":"3.00"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#143e6c"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"saturation":"-100"},{"lightness":"-100"},{"color":"#354590"}]}]'),
            __('Forest', 'resideo')           => urlencode('[{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#68a46d"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#cfe4cc"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#fbfbfb"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#d3edc1"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#c6dbb8"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#e6f3d6"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"},{"weight":"0.5"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#c1c1c1"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffde52"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#ffe05e"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#ffde52"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b0ffdd"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#e0f6f7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#8f8f8f"}]}]'),
            __('Night', 'resideo')            => urlencode('[{"elementType":"geometry","stylers":[{"color":"#242f3e"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#746855"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#242f3e"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#263c3f"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#6b9a76"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#38414e"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#212a37"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#9ca5b3"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#746855"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#1f2835"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#f3d19c"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2f3948"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#17263c"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#515c6d"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#17263c"}]}]'),
            __('Portal', 'resideo')           => urlencode('[{"featureType":"all","elementType":"geometry","stylers":[{"visibility":"simplified"},{"hue":"#ff7700"}]},{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#1d1d1d"}]},{"featureType":"administrative.province","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.text.stroke","stylers":[{"color":"#ed5929"},{"weight":"5.00"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#787878"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":"5.00"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#2d2d2d"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":"5.00"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.fill","stylers":[{"saturation":"64"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#fafafa"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#d5d5d5"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"},{"color":"#ff0000"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#ed5929"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":"5.00"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ed5929"},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#ed5929"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ed5929"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d9d9d9"},{"visibility":"on"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"visibility":"simplified"},{"lightness":"4"},{"saturation":"-100"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#e1e1e1"},{"visibility":"on"}]}]'),
            __('Retro', 'resideo')            => urlencode('[{"elementType":"geometry","stylers":[{"color":"#ebe3cd"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#523735"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f1e6"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#c9b2a6"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"color":"#dcd2be"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#ae9e90"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#93817c"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#a5b076"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#447530"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#f5f1e6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fdfcf8"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#f8c967"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#e9bc62"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#e98d58"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#db8555"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#806b63"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"color":"#8f7d77"}]},{"featureType":"transit.line","elementType":"labels.text.stroke","stylers":[{"color":"#ebe3cd"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#b9d3c2"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#92998d"}]}]'),
            __('Cobalt', 'resideo')           => urlencode('[{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":0},{"saturation":10},{"lightness":30},{"gamma":0.5},{"hue":"#435158"}]}]'),
            __('Red Hues', 'resideo')         => urlencode('[{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}]'),
            __('Blue Hues', 'resideo')        => urlencode('[{"stylers":[{"hue":"#007fff"},{"saturation":89}]},{"featureType":"water","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"visibility":"off"}]}]'),
            __('Navy Blue', 'resideo')        => urlencode('[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#6c747d"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#13263c"},{"weight":2},{"gamma":"1"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#223347"},{"gamma":"0"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#223347"},{"gamma":"1"},{"weight":"10"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#2f3f51"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#283b51"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#182b40"},{"lightness":"0"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#304358"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#0e2239"}]}]'),
            __('Orange', 'resideo')           => urlencode('[{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff6800"},{"saturation":"20"},{"lightness":"-8"},{"gamma":"1.00"},{"weight":"1.12"}]}]'),
            __('Canary', 'resideo')           => urlencode('[{"featureType":"all","elementType":"all","stylers":[{"hue":"#ffbb00"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"hue":"#ffbb00"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"hue":"#ffbb00"}]}]')
        );
        $value_select = '<select id="resideo_gmaps_settings[resideo_gmaps_style_field]" name="resideo_gmaps_settings[resideo_gmaps_style_field]">';

        foreach ($values as $key => $value) {
            $value_select .= '<option value="' . esc_attr($value) . '"';
            if (isset($options['resideo_gmaps_style_field']) && $options['resideo_gmaps_style_field'] == $value) {
                $value_select .= 'selected="selected"';
            }
            $value_select .= '>' . esc_html($key) . '</option>';
        }

        $value_select .= '</select>';

        print $value_select;
    }
endif;

if (!function_exists('resideo_gmaps_poi_field_render')): 
    function resideo_gmaps_poi_field_render() {
        $options = get_option('resideo_gmaps_settings'); ?>

        <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_field]" <?php if (isset($options['resideo_gmaps_poi_field'])) { checked($options['resideo_gmaps_poi_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_gmaps_poi_list_field_render')): 
    function resideo_gmaps_poi_list_field_render() {
        $options = get_option('resideo_gmaps_settings'); ?>

        <label for="resideo_gmaps_settings[resideo_gmaps_poi_schools_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_schools_field]" <?php if (isset($options['resideo_gmaps_poi_schools_field'])) { checked($options['resideo_gmaps_poi_schools_field'], 1); } ?> value="1">
            <?php esc_html_e('Schools', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_transportation_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_transportation_field]" <?php if (isset($options['resideo_gmaps_poi_transportation_field'])) { checked($options['resideo_gmaps_poi_transportation_field'], 1); } ?> value="1">
            <?php esc_html_e('Transportation', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_restaurants_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_restaurants_field]" <?php if (isset($options['resideo_gmaps_poi_restaurants_field'])) { checked($options['resideo_gmaps_poi_restaurants_field'], 1); } ?> value="1">
            <?php esc_html_e('Restaurants', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_shopping_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_shopping_field]" <?php if (isset($options['resideo_gmaps_poi_shopping_field'])) { checked($options['resideo_gmaps_poi_shopping_field'], 1); } ?> value="1">
            <?php esc_html_e('Shopping', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_cafes_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_cafes_field]" <?php if (isset($options['resideo_gmaps_poi_cafes_field'])) { checked($options['resideo_gmaps_poi_cafes_field'], 1); } ?> value="1">
            <?php esc_html_e('Cafes & Bars', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_arts_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_arts_field]" <?php if (isset($options['resideo_gmaps_poi_arts_field'])) { checked($options['resideo_gmaps_poi_arts_field'], 1); } ?> value="1">
            <?php esc_html_e('Arts & Entertainment', 'resideo'); ?>
        </label>
        <br>
        <label for="resideo_gmaps_settings[resideo_gmaps_poi_fitness_field]">
            <input type="checkbox" name="resideo_gmaps_settings[resideo_gmaps_poi_fitness_field]" <?php if (isset($options['resideo_gmaps_poi_fitness_field'])) { checked($options['resideo_gmaps_poi_fitness_field'], 1); } ?> value="1">
            <?php esc_html_e('Fitness', 'resideo'); ?>
        </label>
    <?php }
endif;
?>