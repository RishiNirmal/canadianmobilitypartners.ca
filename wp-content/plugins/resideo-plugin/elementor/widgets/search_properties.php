<?php
/**
 * @package WordPress
 * @subpackage Resideo
 */

class Elementor_Resideo_Search_Properties_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'search_properties';
    }

    public function get_title() {
        return __('Search Properties Form', 'resideo');
    }

    public function get_icon() {
        return 'eicon-search';
    }

    public function get_categories() {
        return ['resideo'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'title_section',
            [
                'label' => __('Title', 'resideo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'resideo'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'string',
                'placeholder' => __('Enter title', 'resideo'),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Subtitle', 'resideo'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'input_type' => 'string',
                'placeholder' => __('Enter subtitle', 'resideo'),
            ]
        );

        $this->add_control(
            'align',
            [
                'label' => __('Align', 'resideo'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'resideo'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'resideo'),
                        'icon' => 'fa fa-align-center',
                    ]
                ],
                'default' => 'left',
                'toggle' => false,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'fields_section',
            [
                'label' => __('Fields List', 'resideo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'status',
            [
                'label' => __('Status', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'address',
            [
                'label' => __('Address', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'city',
            [
                'label' => __('City', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'neighborhood',
            [
                'label' => __('Neighborhood', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'state',
            [
                'label' => __('County/State', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'type',
            [
                'label' => __('Type', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'price',
            [
                'label' => __('Price', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'beds',
            [
                'label' => __('Beds', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'baths',
            [
                'label' => __('Baths', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'size',
            [
                'label' => __('Size', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'keywords',
            [
                'label' => __('Keywords', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'property_id',
            [
                'label' => __('Property ID', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->add_control(
            'amenities',
            [
                'label' => __('Amenities', 'resideo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'resideo'),
                'label_off' => __('No', 'resideo'),
                'return_value' => '1'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'custom_fields_section',
            [
                'label' => __('Custom Fields List', 'resideo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $custom_fields_settings = get_option('resideo_fields_settings');

        if (is_array($custom_fields_settings)) {
            uasort($custom_fields_settings, "resideo_compare_position");

            foreach ($custom_fields_settings as $key => $value) {
                $this->add_control(
                    $value['name'],
                    [
                        'label' => $value['label'],
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __('Yes', 'resideo'),
                        'label_off' => __('No', 'resideo'),
                        'return_value' => '1'
                    ]
                );
            }
        }

        $this->end_controls_section();

        $this->start_controls_section(
            'limit_main_fields',
            [
                'label' => __('Limit Main Fields', 'resideo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'limit',
            [
                'label' => __('Fields in Main Area', 'resideo'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'string',
                'default' => '2'
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $fields_count = 0;
        $main_fields = '';
        $adv_location_fields = '';
        $adv_fields = '';
        $amnt_fields = '';
        $limit = (isset($settings['limit']) && is_numeric($settings['limit'])) ? intval($settings['limit']) : 2;

        $search_submit = resideo_get_search_properties_link();

        $general_settings = get_option('resideo_general_settings');

        $fields_settings = get_option('resideo_prop_fields_settings');
        $address_type = isset($fields_settings['resideo_p_address_t_field']) ? $fields_settings['resideo_p_address_t_field'] : '';

        $align = isset($settings['align']) ? $settings['align'] : 'left';
        $align_class = '';
        if ($align == 'center') {
            $align_class = 'text-center';
        }

        /**
         * Status field
         */
        if ($settings['status'] == '1') {
            $status_tax = array( 
                'property_status'
            );
            $status_args = array(
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => false
            ); 
            $status_terms = get_terms($status_tax, $status_args);

            $status_field = 
                '<div class="col-sm-5 col-md-4 col-lg-3 pxp-search-properties-col">
                    <div class="form-group">
                        <label for="search_status">' . __('Status', 'resideo') . '</label>
                        <select class="custom-select" id="search_status" name="search_status">
                            <option value="0">' . __('All', 'resideo') . '</option>';
            foreach ($status_terms as $status_term) {
                $status_field .= 
                            '<option value="' . esc_attr($status_term->term_id) . '">' . esc_html($status_term->name) . '</option>';
            }
            $status_field .= 
                        '</select>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $status_field;
            } else {
                $adv_fields .= $status_field;
            }

            $fields_count++;
        }

        /**
         * Address field
         */
        if ($settings['address'] == '1') {
            $address_field = 
                '<div class="col-sm-7 col-md-8 col-lg-9 pxp-search-properties-col">
                    <div class="form-group">
                        <label for="search_address">' . __('Address', 'resideo') . '</label>';
            if ($address_type == 'auto') {
                $address_field .= 
                        '<input type="text" class="form-control pxp-is-address" id="filter-address-auto" name="search_address" placeholder="' . __('Search by City, Neighborhood, or Address', 'resideo') . '" autocomplete="off">
                        <input type="hidden" id="filter_street_no_field" name="search_street_no" autocomplete="off">
                        <input type="hidden" id="filter_street_field" name="search_street" autocomplete="off">
                        <input type="hidden" id="filter_neighborhood_field" name="search_neighborhood" autocomplete="off">
                        <input type="hidden" id="filter_city_field" name="search_city" autocomplete="off">
                        <input type="hidden" id="filter_state_field" name="search_state" autocomplete="off">
                        <input type="hidden" id="filter_zip_field" name="search_zip" autocomplete="off">';
            } else {
                $address_field .= 
                        '<input type="text" class="form-control pxp-is-address" id="search_address" name="search_address">';
            }
            $address_field .= 
                    '</div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $address_field;
            } else {
                $adv_location_fields .= $address_field;
            }

            $fields_count++;
        }

        /**
         * City field
         */
        if ($settings['city'] == '1') {
            $city_type = isset($fields_settings['resideo_p_city_t_field']) ? $fields_settings['resideo_p_city_t_field'] : '';
            $city_field = '';

            if ($address_type == 'input' || $address_type == '') {
                $city_field = 
                    '<div class="col-sm-6 col-md-4 pxp-search-properties-col">
                        <div class="form-group">
                            <label for="search_city">' . __('City', 'resideo') . '</label>';
                if ($city_type == 'list') {
                    $resideo_cities_settings = get_option('resideo_cities_settings');
                    $city_field .= 
                            '<select class="custom-select" id="search_city" name="search_city">
                                <option value="">' . __('All', 'resideo') . '</option>';
                    if (is_array($resideo_cities_settings) && count($resideo_cities_settings) > 0) {
                        uasort($resideo_cities_settings, "resideo_compare_position");
                        foreach ($resideo_cities_settings as $key => $value) {
                            $city_field .= 
                                '<option value="' . esc_attr($key) . '">' . __($value['name']) . '</option>';
                        }
                    }
                    $city_field .= 
                            '</select>';
                } else {
                    $city_field .= 
                            '<input class="form-control" type="text" name="search_city" id="search_city">';
                }
                $city_field .= 
                        '</div>
                    </div>';

                if ($fields_count < $limit) {
                    $main_fields .= $city_field;
                } else {
                    $adv_location_fields .= $city_field;
                }

                $fields_count++;
            }
        }

        /**
         * Neighborhood field
         */
        if ($settings['neighborhood'] == '1') {
            $neighborhood_type = isset($fields_settings['resideo_p_neighborhood_t_field']) ? $fields_settings['resideo_p_neighborhood_t_field'] : '';
            $neighborhood_field = '';

            if ($address_type == 'input' || $address_type == '') {
                $neighborhood_field = 
                    '<div class="col-sm-6 col-md-4 pxp-search-properties-col">
                        <div class="form-group">
                            <label for="search_neighborhood">' . __('Neighborhood', 'resideo') . '</label>';
                if ($neighborhood_type == 'list') {
                    $resideo_neighborhoods_settings = get_option('resideo_neighborhoods_settings');
                    $neighborhood_field .= 
                            '<select class="custom-select" id="search_neighborhood" name="search_neighborhood">
                                <option value="">' . __('All', 'resideo') . '</option>';
                    if (is_array($resideo_neighborhoods_settings) && count($resideo_neighborhoods_settings) > 0) {
                        uasort($resideo_neighborhoods_settings, "resideo_compare_position");
                        foreach ($resideo_neighborhoods_settings as $key => $value) {
                            $neighborhood_field .= 
                                '<option value="' . esc_attr($key) . '">' . __($value['name']) . '</option>';
                        }
                    }
                    $neighborhood_field .= 
                            '</select>';
                } else {
                    $neighborhood_field .= 
                        '<input class="form-control" type="text" name="search_neighborhood" id="search_neighborhood">';
                }
                $neighborhood_field .= 
                        '</div>
                    </div>';

                if ($fields_count < $limit) {
                    $main_fields .= $neighborhood_field;
                } else {
                    $adv_location_fields .= $neighborhood_field;
                }

                $fields_count++;
            }
        }

        /**
         * County/State field
         */
        if ($settings['state'] == '1') {
            if ($address_type == 'input' || $address_type == '') {
                $state_field = 
                    '<div class="col-sm-6 col-md-4 pxp-search-properties-col">
                        <div class="form-group">
                            <label for="search_state">' . __('County/State', 'resideo') . '</label>
                            <input class="form-control" type="text" name="search_state" id="search_state">
                        </div>
                    </div>';

                if ($fields_count < $limit) {
                    $main_fields .= $state_field;
                } else {
                    $adv_location_fields .= $state_field;
                }

                $fields_count++;
            }
        }

        /**
         * Type field
         */
        if ($settings['type'] == '1') {
            $type_tax = array( 
                'property_type'
            );
            $type_args = array(
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => false
            ); 
            $type_terms = get_terms($type_tax, $type_args);

            $type_field = 
                '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                    <div class="form-group">
                        <label for="search_type">' . __('Type', 'resideo') . '</label>
                        <select class="custom-select" id="search_type" name="search_type">
                            <option value="0">' . __('All', 'resideo') . '</option>';
            foreach ($type_terms as $type_term) {
                $type_field .= 
                            '<option value="' . esc_attr($type_term->term_id) . '">' . esc_html($type_term->name) . '</option>';
            }
            $type_field .= 
                        '</select>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $type_field;
            } else {
                $adv_fields .= $type_field;
            }

            $fields_count++;
        }

        /**
         * Beds field
         */
        if ($settings['beds'] == '1') {
            $beds_field = 
                '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                    <div class="form-group">
                        <label for="search_beds">' . __('Beds', 'resideo') . '</label>
                        <select class="custom-select" name="search_beds" id="search_beds">
                            <option value="0">' . __('Any', 'resideo') . '</option>
                            <option value="1">1+</option>
                            <option value="2">2+</option>
                            <option value="3">3+</option>
                            <option value="4">4+</option>
                            <option value="5">5+</option>
                        </select>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $beds_field;
            } else {
                $adv_fields .= $beds_field;
            }

            $fields_count++;
        }

        if ($settings['baths'] == '1') {
            $baths_field = 
                '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                    <div class="form-group">
                        <label for="search_baths">' . __('Baths', 'resideo') . '</label>
                        <select class="custom-select" name="search_baths" id="search_baths">
                            <option value="0">' . __('Any', 'resideo') . '</option>
                            <option value="1">1+</option>
                            <option value="2">2+</option>
                            <option value="3">3+</option>
                            <option value="4">4+</option>
                            <option value="5">5+</option>
                        </select>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $baths_field;
            } else {
                $adv_fields .= $baths_field;
            }

            $fields_count++;
        }

        if ($settings['price'] == '1') {
            $currency            = isset($general_settings['resideo_currency_symbol_field']) ? $general_settings['resideo_currency_symbol_field'] : '';
            $currency_pos        = isset($general_settings['resideo_currency_symbol_pos_field']) ? $general_settings['resideo_currency_symbol_pos_field'] : '';
            $price_range_type    = isset($general_settings['resideo_price_range_type_field']) ? $general_settings['resideo_price_range_type_field'] : 'auto';
            $price_range_custom  = isset($general_settings['resideo_price_range_custom_field']) ? $general_settings['resideo_price_range_custom_field'] : '';
            $max_price           = isset($general_settings['resideo_max_price_field']) ? intval($general_settings['resideo_max_price_field']) : '';
            $decimal_separator   = isset($general_settings['resideo_decimal_separator_field']) && $general_settings['resideo_decimal_separator_field'] != '' ? $general_settings['resideo_decimal_separator_field'] : '.';
            $thousands_separator = isset($general_settings['resideo_thousands_separator_field']) && $general_settings['resideo_thousands_separator_field'] != '' ? $general_settings['resideo_thousands_separator_field'] : ',';

            if ($price_range_type == 'auto') {
                $i = $max_price;
                $price_array = array($max_price);

                if ($max_price != '') {
                    while ($i >= 200) {
                        $i = round($i / 2, -2);
                        array_unshift($price_array, $i);
                    }
                }
            } else {
                $price_array = explode(',',$price_range_custom);
            }

            $price_field = 
                '<div class="col-sm-6 pxp-content-side-search-form-col">
                    <div class="pxp-search-properties-row row">
                        <div class="col pxp-content-side-search-form-col">
                            <div class="form-group">
                                <label for="search_price_min">' . __('Min Price', 'resideo') . '</label>
                                <select class="custom-select" name="search_price_min" id="search_price_min">
                                    <option value="">' . __('No Min', 'resideo') . '</option>';
            foreach ($price_array as $price) {
                if ($currency_pos == 'after') {
                    $price_field .= 
                                    '<option value="' . esc_attr($price) . '">' . esc_html(number_format($price, 0, $decimal_separator, $thousands_separator)) . esc_html($currency) . '</option>';
                } else {
                    $price_field .= 
                                    '<option value="' . esc_attr($price) . '">' . esc_html($currency) . esc_html(number_format($price, 0, $decimal_separator, $thousands_separator)) . '</option>';
                }
            }
            $price_field .= 
                                '</select>
                            </div>
                        </div>
                        <div class="col pxp-content-side-search-form-col">
                            <div class="form-group">
                                <label for="search_price_max">' . __('Max Price', 'resideo') . '</label>
                                <select class="custom-select" name="search_price_max" id="search_price_max">
                                    <option value="">' . __('No Max', 'resideo') . '</option>';
            foreach ($price_array as $price) {
                if ($currency_pos == 'after') {
                    $price_field .= 
                                    '<option value="' . esc_attr($price) . '">' . esc_html(number_format($price, 0, $decimal_separator, $thousands_separator)) . esc_html($currency) . '</option>';
                } else {
                    $price_field .= 
                                    '<option value="' . esc_attr($price) . '">' . esc_html($currency) . esc_html(number_format($price, 0, $decimal_separator, $thousands_separator)) . '</option>';
                }
            }
            $price_field .= 
                                '</select>
                            </div>
                        </div>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $price_field;
            } else {
                $adv_fields .= $price_field;
            }

            $fields_count++;
        }

        /**
         * Size field
         */
        if ($settings['size'] == '1') {
            $unit = isset($general_settings['resideo_unit_field']) ? $general_settings['resideo_unit_field'] : '';

            $size_field = 
                '<div class="col-sm-6 pxp-content-side-search-form-col">
                    <div class="pxp-search-properties-row row">
                        <div class="col pxp-content-side-search-form-col">
                            <label for="search_size_min">' . __('Min Size', 'resideo') . '</label>
                            <div class="input-group mb-3">
                                <input type="number" min="0" class="form-control" id="search_size_min" name="search_size_min">
                                <div class="input-group-append">
                                    <span class="input-group-text">' . esc_html($unit) . '</span>
                                </div>
                            </div>
                        </div>
                        <div class="col pxp-content-side-search-form-col">
                            <label for="search_size_max">' . __('Max Size', 'resideo') . '</label>
                            <div class="input-group mb-3">
                                <input type="number" min="0" class="form-control" id="search_size_max" name="search_size_max">
                                <div class="input-group-append">
                                    <span class="input-group-text">' . esc_html($unit) . '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $size_field;
            } else {
                $adv_fields .= $size_field;
            }

            $fields_count++;
        }

        /**
         * Keywords field
         */
        if ($settings['keywords'] == '1') {
            $keywords_field =
                '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                    <div class="form-group">
                        <label for="search_keywords">' . __('Keywords', 'resideo') . '</label>
                        <input class="form-control" type="text" name="search_keywords" id="search_keywords" placeholder="' . __('Try waterfront, gym, or renovate', 'resideo') . '">
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $keywords_field;
            } else {
                $adv_fields .= $keywords_field;
            }

            $fields_count++;
        }

        /**
         * Property ID field
         */
        if ($settings['property_id'] == '1') {
            $id_field = 
                '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                    <div class="form-group">
                        <label for="search_id">' . __('Property ID', 'resideo') . '</label>
                        <input class="form-control" type="text" name="search_id" id="search_id">
                    </div>
                </div>';

            if ($fields_count < $limit) {
                $main_fields .= $id_field;
            } else {
                $adv_fields .= $id_field;
            }

            $fields_count++;
        }

        /**
         * Custom fields
         */
        $custom_fields_settings = get_option('resideo_fields_settings');

        if (is_array($custom_fields_settings)) {
            uasort($custom_fields_settings, "resideo_compare_position");

            foreach ($custom_fields_settings as $key => $value) {
                if (isset($settings[$key]) && $settings[$key] == '1') {
                    if ($value['type'] == 'date_field') {
                        $custom_field = 
                            '<div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">';
                    } else if ($value['type'] == 'interval_field') {
                        $custom_field = 
                            '<div class="col-sm-6 pxp-content-side-search-form-col">';
                    } else {
                        $custom_field = 
                            '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">';
                    }

                    switch ($value['type']) {
                        case 'date_field':
                            $custom_field .= 
                                '<div class="form-group">
                                    <label for="' . esc_attr($key) . '">' . esc_html($value['label']) . '</label>
                                    <input type="text" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '" class="form-control date-picker"" placeholder="' . __('YYYY-MM-DD', 'resideo') . '">
                                </div>';
                        break;
                        case 'list_field':
                            $list = explode(',', $value['list']);
                            $custom_field .= 
                                '<div class="form-group">
                                    <label for="' . esc_attr($key) . '">' . esc_html($value['label']) . '</label>
                                    <select class="custom-select" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '">
                                        <option value="">' . __('All', 'resideo') . '</option>';
                            for ($i = 0; $i < count($list); $i++) {
                                $custom_field .= 
                                        '<option value="' . esc_attr($i) . '">' . esc_html($list[$i]) . '</option>';
                            }
                            $custom_field .= 
                                    '</select>
                                </div>';
                        break;
                        case 'interval_field':
                            $custom_field .= 
                                '<div class="pxp-search-properties-row row">
                                    <div class="col pxp-content-side-search-form-col">
                                        <div class="form-group">
                                            <label for="' . esc_attr($key) . '_min">' . esc_html($value['label']) . ' ' . __('Min', 'resideo') . '</label>
                                            <input type="text" name="' . esc_attr($key) . '_min" id="' . esc_attr($key) . '_min" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col pxp-content-side-search-form-col">
                                        <div class="form-group">
                                            <label for="' . esc_attr($key) . '_max">' . esc_html($value['label']) . ' ' . __('Max', 'resideo') . '</label>
                                            <input type="text" name="' . esc_attr($key) . '_max" id="' . esc_attr($key) . '_max" class="form-control">
                                        </div>
                                    </div>
                                </div>';
                        break;
                        default:
                            $custom_field .= 
                                '<div class="form-group">
                                    <label for="' . esc_attr($key) . '">' . esc_html($value['label']) . '</label>
                                    <input type="text" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '" class="form-control">
                                </div>';
                        break;
                    }

                    $custom_field .= 
                                '<input type="hidden" name="' . esc_attr($key) . '_comparison" id="' . esc_attr($key) . '_comparison">
                            </div>';

                    if ($fields_count < $limit) {
                        $main_fields .= $custom_field;
                    } else {
                        $adv_fields .= $custom_field;
                    }

                    $fields_count++;
                }
            }
        }

        /**
         * Amenities
         */
        if ($settings['amenities'] == '1') {
            $amenities_settings = get_option('resideo_amenities_settings');

            if (is_array($amenities_settings) && count($amenities_settings) > 0) {
                uasort($amenities_settings, "resideo_compare_position");

                $amenities_field = 
                    '<div class="form-group">
                        <h3 class="pxp-search-properties-h3">' . __('Amenities', 'resideo') . '</h3>
                        <div class="pxp-search-properties-row row">';
                foreach ($amenities_settings as $key => $value) {
                    $am_label = $value['label'];
                    if (function_exists('icl_translate')) {
                        $am_label = icl_translate('resideo', 'resideo_property_amenity_' . $value['label'], $value['label']);
                    }
                    $amenities_field .= 
                            '<div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="' . esc_attr($key) . '" value="1"><span class="fa fa-check"></span> ' . esc_html($am_label) . '</label>
                                    </div>
                                </div>
                            </div>';
                }
                $amenities_field .= 
                        '</div>
                    </div>';
            }

            $amnt_fields .= $amenities_field;
        }

        $adv_section = '';
        if ($adv_fields != '') {
            $adv_section =  
                '<h3 class="pxp-search-properties-h3">' . __('Features', 'resideo') . '</h3>
                <div class="pxp-search-properties-row row">'
                    . $adv_fields . 
                '</div>';
        }

        if ($adv_location_fields != '' || $adv_fields != '' || $amnt_fields != '') {
            $adv_trigger = '<a href="javascript:void(0);" class="pxp-search-properties-toggle text-uppercase"><span class="pxp-search-properties-toggle-plus">' . __('Show Advanced Search', 'resideo') . ' +</span><span class="pxp-search-properties-toggle-minus">' . __('Hide Advanced Search', 'resideo') . ' -</span></a>';
        } else {
            $adv_trigger = '';
        }

        $return_string = 
            '<div class="container mt-100">';
        if ($settings['title'] != '') {
            $return_string .= 
                '<h2 class="pxp-section-h2 ' . esc_attr($align_class) . '">' . esc_html($settings['title']) . '</h2>';
        }
        if ($settings['subtitle'] != '') {
            $return_string .= 
                '<div class="pxp-text-light ' . esc_attr($align_class) . '">' . $settings['subtitle'] . '</div>';
        }
        $return_string .= 
                '<div class="pxp-search-properties-container mt-4 mt-md-5 rounded-lg">
                    <form class="pxp-search-properties-form" role="search" method="get" action="' . esc_url($search_submit) . '">
                        <div class="pxp-search-properties-form-main">
                            <div class="pxp-search-properties-row row">'
                                . $main_fields . 
                            '</div>
                        </div>
                        <div class="pxp-search-properties-form-adv">
                            <div class="pxp-search-properties-row row">'
                                . $adv_location_fields . 
                            '</div>'
                            . $adv_section 
                            . $amnt_fields . 
                        '</div>
                        <div class="row">
                            <div class="col-6">'
                                . $adv_trigger . 
                            '</div>
                            <div class="col-6 text-right">
                                <input type="submit" class="pxp-search-properties-btn" value="' . __('Search Properties', 'resideo') . '">
                            </div>
                        </div>
                    </form>
                </div>
            </div>';

        echo $return_string;
    }
}
?>