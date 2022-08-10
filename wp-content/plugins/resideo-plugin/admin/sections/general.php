<?php
/**
 * @package WordPress
 * @subpackage Resideo
 */

if (!function_exists('resideo_admin_general_settings')): 
    function resideo_admin_general_settings() {
        add_settings_section('resideo_general_section', __('General Settings', 'resideo'), 'resideo_general_section_callback', 'resideo_general_settings');
        add_settings_field('resideo_auto_country_field', __('Limit Google Autocomplete to One Country', 'resideo'), 'resideo_auto_country_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_map_marker_price_format_field', __('Map Marker Price Format', 'resideo'), 'resideo_map_marker_price_format_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_decimals_field', __('Use Decimals for Price', 'resideo'), 'resideo_decimals_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_decimals_field', __('Use Decimals for Price', 'resideo'), 'resideo_decimals_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_decimal_separator_field', __('Price Decimal Separator', 'resideo'), 'resideo_decimal_separator_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_thousands_separator_field', __('Price Thousands Separator', 'resideo'), 'resideo_thousands_separator_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_currency_symbol_field', __('Currency Symbol', 'resideo'), 'resideo_currency_symbol_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_currency_symbol_pos_field', __('Currency Symbol Position', 'resideo'), 'resideo_currency_symbol_pos_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_price_range_type_field', __('Price Range Type', 'resideo'), 'resideo_price_range_type_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_max_price_field', __('Price Range Max Value (for <i>Auto</i>)', 'resideo'), 'resideo_max_price_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_price_range_custom_field', __('Price Range List (for <i>Custom</i>)', 'resideo'), 'resideo_price_range_custom_field_render', 'resideo_general_settings', 'resideo_general_section');
        add_settings_field('resideo_beds_label_field', __('Property Bedrooms Label', 'resideo'), 'resideo_beds_label_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_baths_label_field', __('Property Bathrooms Label', 'resideo'), 'resideo_baths_label_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_unit_field', __('Property Size Unit', 'resideo'), 'resideo_unit_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_max_files_field', __('Max Number of Uploaded Photos per Property', 'resideo'), 'resideo_max_files_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_agents_rate_field', __('Enable Agent/Owner Reviews and Rating', 'resideo'), 'resideo_agents_rating_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_no_review_field', __('Allow Property Publish Without Admin Approval', 'resideo'), 'resideo_no_review_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_featured_property_field', __('Allow Agents to Set Properties as Featured', 'resideo'), 'resideo_featured_property_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_show_print_property_field', __('Show Print Property Option', 'resideo'), 'resideo_show_print_property_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_show_report_property_field', __('Show Report Property Option', 'resideo'), 'resideo_show_report_property_field_render', 'resideo_general_settings', 'resideo_general_section' );
        add_settings_field('resideo_copyright_field', __('Footer Copyright Text', 'resideo'), 'resideo_copyright_field_render', 'resideo_general_settings', 'resideo_general_section' );
    }
endif;

if (!function_exists('resideo_general_section_callback')): 
    function resideo_general_section_callback() {
        echo '';
    }
endif;

if (!function_exists('resideo_auto_country_field_render')): 
    function resideo_auto_country_field_render() { 
        $options   = get_option('resideo_general_settings');
        $countries = array("af" => __("Afghanistan", "resideo"), "ax" => __("Åland Islands", "resideo"), "al" => __("Albania", "resideo"), "dz" => __("Algeria", "resideo"), "as" => __("American Samoa", "resideo"), "ad" => __("Andorra", "resideo"), "ao" => __("Angola", "resideo"), "ai" => __("Anguilla", "resideo"), "aq" => __("Antarctica", "resideo"), "ag" => __("Antigua and Barbuda", "resideo"), "ar" => __("Argentina", "resideo"), "am" => __("Armenia", "resideo"), "aw" => __("Aruba", "resideo"), "au" => __("Australia", "resideo"), "at" => __("Austria", "resideo"), "az" => __("Azerbaijan", "resideo"), "bs" => __("Bahamas", "resideo"), "bh" => __("Bahrain", "resideo"), "bd" => __("Bangladesh", "resideo"), "bb" => __("Barbados", "resideo"), "by" => __("Belarus", "resideo"), "be" => __("Belgium", "resideo"), "bz" => __("Belize", "resideo"), "bj" => __("Benin", "resideo"), "bm" => __("Bermuda", "resideo"), "bt" => __("Bhutan", "resideo"), "bo" => __("Bolivia (Plurinational State of)", "resideo"), "bq" => __("Bonaire, Sint Eustatius and Saba", "resideo"), "ba" => __("Bosnia and Herzegovina", "resideo"), "bw" => __("Botswana", "resideo"), "bv" => __("Bouvet Island", "resideo"), "br" => __("Brazil", "resideo"), "io" => __("British Indian Ocean Territory", "resideo"), "bn" => __("Brunei Darussalam", "resideo"), "bg" => __("Bulgaria", "resideo"), "bf" => __("Burkina Faso", "resideo"), "bi" => __("Burundi", "resideo"), "cv" => __("Cabo Verde", "resideo"), "kh" => __("Cambodia", "resideo"), "cm" => __("Cameroon", "resideo"), "ca" => __("Canada", "resideo"), "ky" => __("Cayman Islands", "resideo"), "cf" => __("Central African Republic", "resideo"), "td" => __("Chad", "resideo"), "cl" => __("Chile", "resideo"), "cn" => __("China", "resideo"), "cx" => __("Christmas Island", "resideo"), "cc" => __("Cocos (Keeling) Islands", "resideo"), "co" => __("Colombia", "resideo"), "km" => __("Comoros", "resideo"), "cg" => __("Congo", "resideo"), "cd" => __("Congo (Democratic Republic of the)", "resideo"), "ck" => __("Cook Islands", "resideo"), "cr" => __("Costa Rica", "resideo"), "ci" => __("Côte d'Ivoire", "resideo"), "hr" => __("Croatia", "resideo"), "cu" => __("Cuba", "resideo"), "cw" => __("Curaçao", "resideo"), "cy" => __("Cyprus", "resideo"), "cz" => __("Czech Republic", "resideo"), "dk" => __("Denmark", "resideo"), "dj" => __("Djibouti", "resideo"), "dm" => __("Dominica", "resideo"), "do" => __("Dominican Republic", "resideo"), "ec" => __("Ecuador", "resideo"), "eg" => __("Egypt", "resideo"), "sv" => __("El Salvador", "resideo"), "gq" => __("Equatorial Guinea", "resideo"), "er" => __("Eritrea", "resideo"), "ee" => __("Estonia", "resideo"), "et" => __("Ethiopia", "resideo"), "fk" => __("Falkland Islands (Malvinas)", "resideo"), "fo" => __("Faroe Islands", "resideo"), "fj" => __("Fiji", "resideo"), "fi" => __("Finland", "resideo"), "fr" => __("France", "resideo"), "gf" => __("French Guiana", "resideo"), "pf" => __("French Polynesia", "resideo"), "tf" => __("French Southern Territories", "resideo"), "ga" => __("Gabon", "resideo"), "gm" => __("Gambia", "resideo"), "ge" => __("Georgia", "resideo"), "de" => __("Germany", "resideo"), "gh" => __("Ghana", "resideo"), "gi" => __("Gibraltar", "resideo"), "gr" => __("Greece", "resideo"), "gl" => __("Greenland", "resideo"), "gd" => __("Grenada", "resideo"), "gp" => __("Guadeloupe", "resideo"), "gu" => __("Guam", "resideo"), "gt" => __("Guatemala", "resideo"), "gg" => __("Guernsey", "resideo"), "gn" => __("Guinea", "resideo"), "gw" => __("Guinea-Bissau", "resideo"), "gy" => __("Guyana", "resideo"), "ht" => __("Haiti", "resideo"), "hm" => __("Heard Island and McDonald Islands", "resideo"), "va" => __("Holy See", "resideo"), "hn" => __("Honduras", "resideo"), "hk" => __("Hong Kong", "resideo"), "hu" => __("Hungary", "resideo"), "is" => __("Iceland", "resideo"), "in" => __("India", "resideo"), "id" => __("Indonesia", "resideo"), "ir" => __("Iran (Islamic Republic of)", "resideo"), "iq" => __("Iraq", "resideo"), "ie" => __("Ireland", "resideo"), "im" => __("Isle of Man", "resideo"), "il" => __("Israel", "resideo"), "it" => __("Italy", "resideo"), "jm" => __("Jamaica", "resideo"), "jp" => __("Japan", "resideo"), "je" => __("Jersey", "resideo"), "jo" => __("Jordan", "resideo"), "kz" => __("Kazakhstan", "resideo"), "ke" => __("Kenya", "resideo"), "ki" => __("Kiribati", "resideo"), "kp" => __("Korea (Democratic People's Republic of)", "resideo"), "kr" => __("Korea (Republic of)", "resideo"), "kw" => __("Kuwait", "resideo"), "kg" => __("Kyrgyzstan", "resideo"), "la" => __("Lao People's Democratic Republic", "resideo"), "lv" => __("Latvia", "resideo"), "lb" => __("Lebanon", "resideo"), "ls" => __("Lesotho", "resideo"), "lr" => __("Liberia", "resideo"), "ly" => __("Libya", "resideo"), "li" => __("Liechtenstein", "resideo"), "lt" => __("Lithuania", "resideo"), "lu" => __("Luxembourg", "resideo"), "mo" => __("Macao", "resideo"), "mk" => __("Macedonia (the former Yugoslav Republic of)", "resideo"), "mg" => __("Madagascar", "resideo"), "mw" => __("Malawi", "resideo"), "my" => __("Malaysia", "resideo"), "mv" => __("Maldives", "resideo"), "ml" => __("Mali", "resideo"), "mt" => __("Malta", "resideo"), "mh" => __("Marshall Islands", "resideo"), "mq" => __("Martinique", "resideo"), "mr" => __("Mauritania", "resideo"), "mu" => __("Mauritius", "resideo"), "yt" => __("Mayotte", "resideo"), "mx" => __("Mexico", "resideo"), "fm" => __("Micronesia (Federated States of)", "resideo"), "md" => __("Moldova (Republic of)", "resideo"), "mc" => __("Monaco", "resideo"), "mn" => __("Mongolia", "resideo"), "me" => __("Montenegro", "resideo"), "ms" => __("Montserrat", "resideo"), "ma" => __("Morocco", "resideo"), "mz" => __("Mozambique", "resideo"), "mm" => __("Myanmar", "resideo"), "na" => __("Namibia", "resideo"), "nr" => __("Nauru", "resideo"), "np" => __("Nepal", "resideo"), "nl" => __("Netherlands", "resideo"), "nc" => __("New Caledonia", "resideo"), "nz" => __("New Zealand", "resideo"), "ni" => __("Nicaragua", "resideo"), "ne" => __("Niger", "resideo"), "ng" => __("Nigeria", "resideo"), "nu" => __("Niue", "resideo"), "nf" => __("Norfolk Island", "resideo"), "mp" => __("Northern Mariana Islands", "resideo"), "no" => __("Norway", "resideo"), "om" => __("Oman", "resideo"), "pk" => __("Pakistan", "resideo"), "pw" => __("Palau", "resideo"), "ps" => __("Palestine, State of", "resideo"), "pa" => __("Panama", "resideo"), "pg" => __("Papua New Guinea", "resideo"), "py" => __("Paraguay", "resideo"), "pe" => __("Peru", "resideo"), "ph" => __("Philippines", "resideo"), "pn" => __("Pitcairn", "resideo"), "pl" => __("Poland", "resideo"), "pt" => __("Portugal", "resideo"), "pr" => __("Puerto Rico", "resideo"), "qa" => __("Qatar", "resideo"), "re" => __("Réunion", "resideo"), "ro" => __("Romania", "resideo"), "ru" => __("Russian Federation", "resideo"), "rw" => __("Rwanda", "resideo"), "bl" => __("Saint Barthélemy", "resideo"), "sh" => __("Saint Helena, Ascension and Tristan da Cunha", "resideo"), "kn" => __("Saint Kitts and Nevis", "resideo"), "lc" => __("Saint Lucia", "resideo"), "mf" => __("Saint Martin (French part)", "resideo"), "pm" => __("Saint Pierre and Miquelon", "resideo"), "vc" => __("Saint Vincent and the Grenadines", "resideo"), "ws" => __("Samoa", "resideo"), "sm" => __("San Marino", "resideo"), "st" => __("Sao Tome and Principe", "resideo"), "sa" => __("Saudi Arabia", "resideo"), "sn" => __("Senegal", "resideo"), "rs" => __("Serbia", "resideo"), "sc" => __("Seychelles", "resideo"), "sl" => __("Sierra Leone", "resideo"), "sg" => __("Singapore", "resideo"), "sx" => __("Sint Maarten (Dutch part)", "resideo"), "sk" => __("Slovakia", "resideo"), "si" => __("Slovenia", "resideo"), "sb" => __("Solomon Islands", "resideo"), "so" => __("Somalia", "resideo"), "za" => __("South Africa", "resideo"), "gs" => __("South Georgia and the South Sandwich Islands", "resideo"), "ss" => __("South Sudan", "resideo"), "es" => __("Spain", "resideo"), "lk" => __("Sri Lanka", "resideo"), "sd" => __("Sudan", "resideo"), "sr" => __("Suriname", "resideo"), "sj" => __("Svalbard and Jan Mayen", "resideo"), "sz" => __("Swaziland", "resideo"), "se" => __("Sweden", "resideo"), "ch" => __("Switzerland", "resideo"), "sy" => __("Syrian Arab Republic", "resideo"), "tw" => __("Taiwan, Province of China", "resideo"), "tj" => __("Tajikistan", "resideo"), "tz" => __("Tanzania, United Republic of", "resideo"), "th" => __("Thailand", "resideo"), "tl" => __("Timor-Leste", "resideo"), "tg" => __("Togo", "resideo"), "tk" => __("Tokelau", "resideo"), "to" => __("Tonga", "resideo"), "tt" => __("Trinidad and Tobago", "resideo"), "tn" => __("Tunisia", "resideo"), "tr" => __("Turkey", "resideo"), "tm" => __("Turkmenistan", "resideo"), "tc" => __("Turks and Caicos Islands", "resideo"), "tv" => __("Tuvalu", "resideo"), "ug" => __("Uganda", "resideo"), "ua" => __("Ukraine", "resideo"), "ae" => __("United Arab Emirates", "resideo"), "gb" => __("United Kingdom of Great Britain and Northern Ireland", "resideo"), "us" => __("United States of America", "resideo"), "um" => __("United States Minor Outlying Islands", "resideo"), "uy" => __("Uruguay", "resideo"), "uz" => __("Uzbekistan", "resideo"), "vu" => __("Vanuatu", "resideo"), "ve" => __("Venezuela (Bolivarian Republic of)", "resideo"), "vn" => __("Viet Nam", "resideo"), "vg" => __("Virgin Islands (British)", "resideo"), "vi" => __("Virgin Islands (U.S.)", "resideo"), "wf" => __("Wallis and Futuna", "resideo"), "eh" => __("Western Sahara", "resideo"), "ye" => __("Yemen", "resideo"), "zm" => __("Zambia", "resideo"), "zw" => __("Zimbabwe", "resideo"));

        $field = '<select id="resideo_general_settings[resideo_auto_country_field]" name="resideo_general_settings[resideo_auto_country_field]">';
        $field .= '<option value="">' . __('All', 'resideo') . '</option>';

        foreach ($countries as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['resideo_auto_country_field']) && $options['resideo_auto_country_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('resideo_map_marker_price_format_field_render')): 
    function resideo_map_marker_price_format_field_render() {
        $options = get_option('resideo_general_settings');
        $formats = array(
            'short' => __('Short', 'resideo'),
            'long'  => __('Long', 'resideo'),
        );

        $field = '<select id="resideo_general_settings[resideo_map_marker_price_format]" name="resideo_general_settings[resideo_map_marker_price_format]">';

        foreach ($formats as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['resideo_map_marker_price_format']) && $options['resideo_map_marker_price_format'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('resideo_decimals_field_render')): 
    function resideo_decimals_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_decimals_field]" <?php if(isset($options['resideo_decimals_field'])) { checked($options['resideo_decimals_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_decimal_separator_field_render')): 
    function resideo_decimal_separator_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_decimal_separator_field]" type="text" size="10" name="resideo_general_settings[resideo_decimal_separator_field]" value="<?php if (isset($options['resideo_decimal_separator_field'])) { echo esc_attr($options['resideo_decimal_separator_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_thousands_separator_field_render')): 
    function resideo_thousands_separator_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_thousands_separator_field]" type="text" size="10" name="resideo_general_settings[resideo_thousands_separator_field]" value="<?php if (isset($options['resideo_thousands_separator_field'])) { echo esc_attr($options['resideo_thousands_separator_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_currency_symbol_field_render')): 
    function resideo_currency_symbol_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_currency_symbol_field]" type="text" size="10" name="resideo_general_settings[resideo_currency_symbol_field]" value="<?php if (isset($options['resideo_currency_symbol_field'])) { echo esc_attr($options['resideo_currency_symbol_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_currency_symbol_pos_field_render')): 
    function resideo_currency_symbol_pos_field_render() {
        $options = get_option('resideo_general_settings');
        $positions = array(
            'before' => __('Before', 'resideo'),
            'after'  => __('After', 'resideo'),
        );

        $field = '<select id="resideo_general_settings[resideo_currency_symbol_pos_field]" name="resideo_general_settings[resideo_currency_symbol_pos_field]">';

        foreach ($positions as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['resideo_currency_symbol_pos_field']) && $options['resideo_currency_symbol_pos_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('resideo_price_range_type_field_render')): 
    function resideo_price_range_type_field_render() {
        $options = get_option('resideo_general_settings');
        $types = array(
            'auto' => __('Auto', 'resideo'),
            'custom'  => __('Custom', 'resideo'),
        );

        $field = '<select id="resideo_general_settings[resideo_price_range_type_field]" name="resideo_general_settings[resideo_price_range_type_field]">';

        foreach ($types as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['resideo_price_range_type_field']) && $options['resideo_price_range_type_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('resideo_max_price_field_render')): 
    function resideo_max_price_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_max_price_field]" type="text" size="16" name="resideo_general_settings[resideo_max_price_field]" value="<?php if (isset($options['resideo_max_price_field'])) { echo esc_attr($options['resideo_max_price_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_price_range_custom_field_render')): 
    function resideo_price_range_custom_field_render() { 
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_price_range_custom_field]" type="text" size="60" name="resideo_general_settings[resideo_price_range_custom_field]" value="<?php if (isset($options['resideo_price_range_custom_field'])) { echo esc_attr($options['resideo_price_range_custom_field']); } ?>" />
        <p class="help"><?php esc_html_e('Enter the price values separated by comma. (E.g. 100,1000,10000)', 'resideo'); ?></p>
    <?php }
endif;

if (!function_exists('resideo_beds_label_field_render')): 
    function resideo_beds_label_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_beds_label_field]" type="text" size="16" name="resideo_general_settings[resideo_beds_label_field]" value="<?php if (isset($options['resideo_beds_label_field'])) { echo esc_attr($options['resideo_beds_label_field']); } ?>" /> <i>(E.g. BD, Beds)</i>
    <?php }
endif;

if (!function_exists('resideo_baths_label_field_render')): 
    function resideo_baths_label_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_baths_label_field]" type="text" size="16" name="resideo_general_settings[resideo_baths_label_field]" value="<?php if (isset($options['resideo_baths_label_field'])) { echo esc_attr($options['resideo_baths_label_field']); } ?>" /> <i>(E.g. BA, Baths)</i>
    <?php }
endif;

if (!function_exists('resideo_unit_field_render')): 
    function resideo_unit_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_unit_field]" type="text" size="16" name="resideo_general_settings[resideo_unit_field]" value="<?php if (isset($options['resideo_unit_field'])) { echo esc_attr($options['resideo_unit_field']); } ?>" /> <i>(E.g. Sqft, Sqm, m2, ft2)</i>
    <?php }
endif;

if (!function_exists('resideo_max_files_field_render')): 
    function resideo_max_files_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input id="resideo_general_settings[resideo_max_files_field]" type="text" size="16" name="resideo_general_settings[resideo_max_files_field]" value="<?php if (isset($options['resideo_max_files_field'])) { echo esc_attr($options['resideo_max_files_field']); } ?>" />
    <?php }
endif;

if (!function_exists('resideo_agents_rating_field_render')): 
    function resideo_agents_rating_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_agents_rating_field]" <?php if (isset($options['resideo_agents_rating_field'])) { checked( $options['resideo_agents_rating_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_no_review_field_render')): 
    function resideo_no_review_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_no_review_field]" <?php if (isset($options['resideo_no_review_field'])) { checked( $options['resideo_no_review_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_featured_property_field_render')): 
    function resideo_featured_property_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_featured_property_field]" <?php if (isset($options['resideo_featured_property_field'])) { checked( $options['resideo_featured_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_show_print_property_field_render')): 
    function resideo_show_print_property_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_show_print_property_field]" <?php if (isset($options['resideo_show_print_property_field'])) { checked( $options['resideo_show_print_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_show_report_property_field_render')): 
    function resideo_show_report_property_field_render() {
        $options = get_option('resideo_general_settings'); ?>

        <input type="checkbox" name="resideo_general_settings[resideo_show_report_property_field]" <?php if (isset($options['resideo_show_report_property_field'])) { checked( $options['resideo_show_report_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('resideo_copyright_field_render')): 
    function resideo_copyright_field_render() { 
        $options = get_option('resideo_general_settings'); ?>

        <textarea cols='40' rows='5' name='resideo_general_settings[resideo_copyright_field]'><?php if (isset($options['resideo_copyright_field'])) { echo esc_html($options['resideo_copyright_field']); } ?></textarea>
    <?php }
endif;
?>