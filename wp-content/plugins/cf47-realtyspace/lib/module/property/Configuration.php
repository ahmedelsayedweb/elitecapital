<?php

namespace cf47\plugin\realtyspace\module\property;

use Alcohol\ISO3166;
use cf47\plugin\realtyspace\module\property\currency\Manager;
use cf47\themecore\AcfManager;
use cf47\themecore\customizer\Panel;
use cf47\themecore\customizer\Section;
use cf47\themecore\helper\PluginChecker;
use cf47\themecore\helper\Util;

class Configuration
{
    /**
     * @var Panel
     */
    private $panel;
    private $prefix;
    /**
     * @var \cf47\themecore\AcfManager
     */
    private $manager;

    public function __construct(AcfManager $manager, Panel $panel, $prefix)
    {
        $this->panel = $panel;
        $this->prefix = $prefix;
        $this->manager = $manager;
    }

    public function register()
    {
        $this->registerGeneralSection();
        $this->registerMapSection();
        $this->registerSearchSection();
        $this->registerSubmissionSection();
        add_action('acf/init', function () {
            $this->registerSearchLabelsSection();
        });
    }

    private function registerGeneralSection()
    {
        /** @var Manager $currency_manager */
        $currency_manager = cf47rs_get('property.currency.manager');
        $prefix = $this->prefix . '_propgeneral';
        $section = $this->panel->addSection(
            $prefix,
            [
                'title' => pll__('Property / General settings', 'realtyspace'),
            ]
        );

        $section
            ->addField([
                'label' => pll__('Main currency', 'realtyspace'),
                'type' => 'select',
                'settings' => $prefix . '_main_currency',
                'choices' => $currency_manager->get_pairs(),
                'default' => 'USD'
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_currency_sign',
                'label' => pll__('Currency symbol', 'realtyspace'),
                'default' => '$',
            ])
            ->addField([
                'type' => 'radio',
                'settings' => $prefix . '_currency_sign_position',
                'label' => pll__('Currency sign position', 'realtyspace'),
                'default' => 'before',
                'choices' => [
                    'before' => pll__('Before', 'realtyspace'),
                    'after' => pll__('After', 'realtyspace')
                ],
            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_currency_sign_space',
                'label' => pll__('Include a space between currency sign and price', 'realtyspace'),
                'default' => false,
                'description' => pll__('e.g. $1000 -> $ 1000', 'realtyspace')
            ])
            ->addField([
                'type' => 'radio',
                'settings' => $prefix . '_price_thousand_separator',
                'label' => pll__('Thousand separator', 'realtyspace'),
                'default' => 'comma',
                'choices' => [
                    'space' => pll__('Space', 'realtyspace'),
                    'dot' => pll__('Dot', 'realtyspace'),
                    'comma' => pll__('Comma', 'realtyspace')
                ],
            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_price_show_decimals',
                'label' => pll__('Show decimals?', 'realtyspace'),
                'default' => false,
            ])
            ->addField([
                'type' => 'radio',
                'settings' => $prefix . '_price_decimal_separator',
                'label' => pll__('Decimal separator', 'realtyspace'),
                'default' => 'dot',
                'choices' => [
                    'space' => pll__('Space', 'realtyspace'),
                    'dot' => pll__('Dot', 'realtyspace'),
                    'comma' => pll__('Comma', 'realtyspace')
                ],
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_property_price_undefined',
                'label' => pll__('Text to show when the price is not set', 'realtyspace'),
                'wpml' => true,
                'default' => pll__('Contact us for pricing', 'realtyspace'),
            ])
            ->addField([
                'type' => 'radio',
                'settings' => $prefix . '_area_unit',
                'label' => pll__('Area unit', 'realtyspace'),
                'choices' => [
                    'sqft' => pll__('Sq Ft', 'realtyspace'),
                    'm2' => pll__('m2', 'realtyspace')
                ],
                'wpml' => true,
                'default' => 'sqft',
            ]);

    }

    private function registerMapSection()
    {
        $prefix = $this->prefix . '_propmap';
        $section = $this->panel->addSection(
            $prefix,
            [
                'title' => pll__('Property / Map settings', 'realtyspace'),
            ]
        );

        $section
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_lat',
                'label' => pll__('Default latitude (DD format)', 'realtyspace'),
                'default' => '34.020794936018724',
                'description' => wp_kses(__(
                    'You can find your coordinates <a target="_blank" href="http://www.gps-coordinates.net/">here</a>',
                    'realtyspace'
                ),
                    [
                        'a' => [
                            'target' => [],
                            'href' => []
                        ]
                    ]
                )
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_long',
                'label' => pll__('Default longitude (DD format)', 'realtyspace'),
                'default' => '-118.18954467773438',
                'description' => wp_kses(
                    __(
                        'You can find your coordinates <a target="_blank" href="http://www.gps-coordinates.net/">here</a>',
                        'realtyspace'
                    ),
                    [
                        'a' => [
                            'target' => [],
                            'href' => []
                        ]
                    ]
                )
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_apikey',
                'label' => pll__('Google Maps API key', 'realtyspace'),
                'default' => 'AIzaSyDKkJ9_r-StGOUaQSk03CA1p_42h1vooEo',
                'description' => wp_kses(
                    sprintf(
                        __(
                            'MAKE SURE TO GENERATE YOUR OWN KEY, THE DEMO KEY WILL WORK LIMITED TIME ONLY! 
                            See <a target="_blank" href="%s">here</a> on how to create an API key',
                            'realtyspace'
                        )
                        , 'http://realtyspace.codefactory47.com/docs/wp/map.html'
                    ),
                    [
                        'a' => [
                            'target' => [],
                            'href' => []
                        ]
                    ]
                )
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_zoom',
                'label' => pll__('Default map zoom', 'realtyspace'),
                'default' => '15',
            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_custom_marker',
                'label' => pll__('Use custom map marker?', 'realtyspace'),
                'default' => false,
                'expose' => 'isCustomMarker'
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_width_marker',
                'label' => pll__('Marker width', 'realtyspace'),
                'default' => 24,
                'expose' => 'customMarkerWidth',
                'required' => [
                    [
                        'setting' => $prefix . '_custom_marker',
                        'operator' => '==',
                        'value' => true,
                    ]
                ]
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_height_marker',
                'label' => pll__('Marker height', 'realtyspace'),
                'default' => 47,
                'expose' => 'customMarkerHeight',
                'required' => [
                    [
                        'setting' => $prefix . '_custom_marker',
                        'operator' => '==',
                        'value' => true,
                    ]
                ]
            ])
            ->addField([
                'type' => 'image',
                'settings' => $prefix . '_icon_marker',
                'label' => pll__('Marker Icon', 'realtyspace'),
                'default' => '',
                'expose' => 'customMarkerIcon',
                'required' => [
                    [
                        'setting' => $prefix . '_custom_marker',
                        'operator' => '==',
                        'value' => true,
                    ]
                ]
            ])
            ->addField([
                'label' => pll__('Autocomplete region', 'realtyspace'),
                'type' => 'select',
                'settings' => $prefix . '_autocomplete_region',
                'choices' => $this->get_country_choice_list(),
                'default' => 'worldwide',
                'expose' => 'autocompleteRegion'
            ]);
    }

    private function get_country_choice_list()
    {
        $iso3166 = new ISO3166();
        $list = $iso3166->getAll();
        $list = array_combine(
            Util::array_column($list, 'alpha2'),
            Util::array_column($list, 'name')
        );

        return array_merge(['worldwide' => pll__('Worldwide', 'realtyspace')], $list);
    }

    private function registerSearchSection()
    {
        $prefix = $this->prefix . '_propsearch';
        $section = $this->panel->addSection(
            $prefix,
            [
                'title' => pll__('Property / Search settings', 'realtyspace'),
            ]
        );

        $sort_options = cf47rs_get('param.property.sorting_options');
        $limit_options = [
            6,
            12,
            18,
            24
        ];

        $section
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_price_min',
                'label' => pll__('Price minimum value (range slider)', 'realtyspace'),
                'default' => 100,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_price_max',
                'label' => pll__('Price maximum value (range slider)', 'realtyspace'),
                'default' => 100000000,
            ])
            ->addField([
                'type' => 'textarea',
                'settings' => $prefix . '_price_range',
                'label' => pll__('Price range (dropdown)', 'realtyspace'),
                'default' => "50000:50,000\n100000:100,000\n300000:300,000\n1000000:1,000,000\n5000000:5,000,000",
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_bedroom_min',
                'label' => pll__('Bedroom minimum value', 'realtyspace'),
                'default' => 1,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_bedroom_max',
                'label' => pll__('Bedroom maximum value', 'realtyspace'),
                'default' => 100,
            ])
            ->addField([
                'type' => 'textarea',
                'settings' => $prefix . '_bedroom_range',
                'label' => pll__('Bedroom number range (dropdown)', 'realtyspace'),
                'default' => "1\n2\n3\n4\n5",
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_area_min',
                'label' => pll__('Area minimum value', 'realtyspace'),
                'default' => 1,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_area_max',
                'label' => pll__('Area maximum value', 'realtyspace'),
                'default' => 100,
            ])
            ->addField([
                'type' => 'textarea',
                'settings' => $prefix . '_area_range',
                'label' => pll__('Area range (dropdown)', 'realtyspace'),
                'default' => "10\n20\n30\n50\n70\n100",
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_bathroom_min',
                'label' => pll__('Bathroom minimum value', 'realtyspace'),
                'default' => 1,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_bathroom_max',
                'label' => pll__('Bathroom maximum value', 'realtyspace'),
                'default' => 4,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_room_min',
                'label' => pll__('Rooms minimum value', 'realtyspace'),
                'default' => 1,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_room_max',
                'label' => pll__('Room maximum value', 'realtyspace'),
                'default' => 4,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_year_min',
                'label' => pll__('Year minimum value', 'realtyspace'),
                'default' => date('Y') - 50,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_year_max',
                'label' => pll__('Year maximum value', 'realtyspace'),
                'default' => date('Y'),
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_garage_min',
                'label' => pll__('Garage minimum value', 'realtyspace'),
                'default' => 1,
            ])
            ->addField([
                'type' => 'number',
                'settings' => $prefix . '_garage_max',
                'label' => pll__('Garage maximum value', 'realtyspace'),
                'default' => 4,
            ])
            ->addField([
                'type' => 'sortable',
                'settings' => $prefix . '_sort_options',
                'label' => pll__('Sort options', 'realtyspace'),
                'choices' => $sort_options,
                'default' => array_keys($sort_options),
                'description' => pll__('The first option will be used as default.', 'realtyspace')
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_limit_options',
                'label' => pll__('Limit options', 'realtyspace'),
                'default' => implode(',', $limit_options),
                'description' => pll__(
                    'Separate new options with ,(comma). The first option will be used as default.',
                    'realtyspace'
                )
            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_dropdown_autocomplete',
                'label' => pll__('Replace checkbox dropdowns with autocomplete', 'realtyspace'),
                'default' => false,
            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_numabbr',
                'label' => pll__('Use numeric abbreviations', 'realtyspace'),
                'default' => true,
            ])
            ->addField([
                'type' => 'radio',
                'settings' => $prefix . '_input_style',
                'label' => pll__('Search input style', 'realtyspace'),
                'default' => '1',
                'choices' => [
                    '1' => pll__('Range Slider', 'realtyspace'),
                    '0' => pll__('Text input', 'realtyspace')
                ]
            ])
        ;
    }

    private function registerSubmissionSection()
    {

        $prefix = $this->prefix . '_propsubmit';
        $section = $this->panel->addSection(
            $prefix,
            [
                'title' => pll__('Property / Front-end submit', 'realtyspace'),
            ]
        );
        $section
            ->addWarning(
                $prefix . '_warning_membersip',
                pll__('To allow users to submit properties, you have to allow registration first!
                    Go to Settings/General and check the "Membership: Anyone can register" option.',
                    'realtyspace'),
                function () {
                    return !(bool)get_option('users_can_register');
                }
            )
            ->addField([
                'type' => 'switch',
                'settings' => $prefix . '_enabled',
                'label' => pll__('Front-end submit', 'realtyspace'),
                'choices' => [
                    0 => pll__('Off', 'realtyspace'),
                    1 => pll__('On', 'realtyspace'),
                ],
                'default' => 0,
            ])
            ->addField([
                'type' => 'dropdown-pages',
                'settings' => $prefix . '_listing_page',
                'label' => pll__('Submitted Listing page', 'realtyspace'),
                'default' => 'USD',

                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],

                ]
            ])
            ->addField([
                'type' => 'dropdown-pages',
                'settings' => $prefix . '_add_page',
                'label' => pll__('Submit form page', 'realtyspace'),
                'wpml' => true,
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],

                ]

            ])
            ->addField([
                'type' => 'checkbox',
                'settings' => $prefix . '_force_review',
                'label' => pll__('Review by admin before publishing', 'realtyspace'),
                'default' => true,
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],

                ]
            ]);

        $this->registerPaymentSection($section);
    }

    private function registerPaymentSection(Section $section)
    {

        $prefix = $this->prefix . '_proppayment';
        $section
            ->addWarning(
                $prefix . '_warning_paypalipn',
                wp_kses(
                    __(
                        'The plugin <a target="_blank" href="https://wordpress.org/plugins/paypal-ipn/">PayPal IPN</a> 
                        has to be installed for this options to work!',
                        'realtyspace'
                    ),
                    ['a' => ['target' => [], 'href' => []]]
                ),
                function () {
                    /** @var PluginChecker $plugin_checker */
                    $plugin_checker = cf47rs_get('core.helper.plugin_checker');

                    return !$plugin_checker->is_paypal_ipn_active();
                }
            )
            ->addField([
                'type' => 'switch',
                'settings' => $prefix . '_enabled',
                'label' => pll__('Paypal Payments', 'realtyspace'),
                'choices' => [
                    0 => pll__('Off', 'realtyspace'),
                    1 => pll__('On', 'realtyspace'),
                ],
                'default' => 0,
                'required' => [
                    [
                        'setting' => 'config_propsubmit_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                ]
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_email',
                'label' => pll__('PayPal Merchant Account ID or Email', 'realtyspace'),
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                    [
                        'setting' => 'config_propsubmit_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],

                ]
            ])
            ->addField([
                'type' => 'toggle',
                'settings' => $prefix . '_sandbox',
                'label' => pll__('Use Sandbox', 'realtyspace'),
                'default' => true,
                'description' => pll__('Enable PayPal Sandbox for testing', 'realtyspace'),
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                    [
                        'setting' => 'config_propsubmit_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                ]
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_amount',
                'label' => pll__('Submission price', 'realtyspace'),
                'default' => '20.00',
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                    [
                        'setting' => 'config_propsubmit_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                ]
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_currency',
                'label' => pll__('Currency code', 'realtyspace'),
                'default' => 'USD',
                'description' =>
                    wp_kses(
                        sprintf(
                            __('See <a href="%s">this</a> for more available codes', 'realtyspace'),
                            'https://developer.paypal.com/docs/classic/api/currency_codes/'
                        ),
                        ['a' => ['target' => [], 'href' => []]]
                    ),
                'required' => [
                    [
                        'setting' => $prefix . '_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                    [
                        'setting' => 'config_propsubmit_enabled',
                        'operator' => '==',
                        'value' => 1,
                    ],
                ]

            ]);
    }

    private function registerSearchLabelsSection()
    {

		pll_register_string('realtyspace','Street');
		pll_register_string('realtyspace','property_side');
		pll_register_string('realtyspace','property');
		pll_register_string('realtyspace','Contract type');
		pll_register_string('realtyspace','Description');
		pll_register_string('realtyspace','Show on page');
		pll_register_string('realtyspace','bathrooms');
		pll_register_string('realtyspace','bedrooms');
		pll_register_string('realtyspace','rooms');
		pll_register_string('realtyspace','Agent');
		pll_register_string('realtyspace','Area from');
		pll_register_string('realtyspace','Property / Search labels');
		$prefix = $this->prefix . '_propsearchlbl';
		pll_register_string('realtyspace','Bedrooms from');
		pll_register_string('realtyspace','Area to');
		pll_register_string('realtyspace','Bedrooms to');
		pll_register_string('realtyspace','Price from');
		pll_register_string('realtyspace','Price to');
		pll_register_string('realtyspace','Property feature');
		pll_register_string('realtyspace','Area from');
		pll_register_string('realtyspace','Area from');
        $section = $this->panel->addSection(
            $prefix,
            [
                'title' => pll__('Property / Search labels', 'realtyspace'),
            ]
        );

        $street_label = pll__('Street', 'realtyspace');
        $agent_label = $this->get_acf_label('property_side', 'agent');
        $area_label = $this->get_acf_label('property', 'area');
        $bathrooms_label = $this->get_acf_label('property', 'bathrooms');
        $bedrooms_label = $this->get_acf_label('property', 'bedrooms');
        $rooms_label = $this->get_acf_label('property', 'rooms');
        $contract_label = pll__('Contract type', 'realtyspace');
        $description_label = pll__('Description', 'realtyspace');
        $garage_label = $this->get_acf_label('property', 'garages');
        $landarea_label = $this->get_acf_label('property', 'land_area');
        $limit_label = pll__('Show on page', 'realtyspace');
        $location_label = $this->get_acf_label('property_side', 'location');
        $mode_label = pll__('View', 'realtyspace');
        $feature_label = pll__('Property feature', 'realtyspace');
        $tags_label = pll__('Tags', 'realtyspace');
        $sort_label = pll__('Sort by', 'realtyspace');
        $price_label = $this->get_acf_label('property', 'price');
        $type_label = $this->get_acf_label('property_side', 'property_type');
        $sku_label = $this->get_acf_label('property', 'sku');
        $year_label = $this->get_acf_label('property', 'year_built');

        $section
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_agent',
                'label' => $agent_label,
                'default' => $agent_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_area',
                'label' => $area_label,
                'default' => $area_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_area_from',
                'label' => pll__('Area from', 'realtyspace'),
                'default' => pll__('Area from', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_area_to',
                'label' => pll__('Area to', 'realtyspace'),
                'default' => pll__('Area to', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_bedrooms',
                'label' => $bedrooms_label,
                'default' => $bedrooms_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_bedrooms_from',
                'label' => pll__('Bedrooms from', 'realtyspace'),
                'default' => pll__('Bedrooms from', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_bedrooms_to',
                'label' => pll__('Bedrooms to', 'realtyspace'),
                'default' => pll__('Bedrooms to', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_bathrooms',
                'label' => $bathrooms_label,
                'default' => $bathrooms_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_rooms',
                'label' => $rooms_label,
                'default' => $rooms_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_contract',
                'label' => $contract_label,
                'default' => $contract_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_description',
                'label' => $description_label,
                'default' => $description_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_garages',
                'label' => $garage_label,
                'default' => $garage_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_land_area',
                'label' => $landarea_label,
                'default' => $landarea_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_limit',
                'label' => $limit_label,
                'default' => $limit_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_location',
                'label' => $location_label,
                'default' => $location_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_mode',
                'label' => $mode_label,
                'default' => $mode_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_price',
                'label' => $price_label,
                'default' => $price_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_price_from',
                'label' => pll__('Price from', 'realtyspace'),
                'default' => pll__('Price from', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_price_to',
                'label' => pll__('Price to', 'realtyspace'),
                'default' => pll__('Price to', 'realtyspace'),
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_feature',
                'label' => $feature_label,
                'default' => $feature_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_tag',
                'label' => $tags_label,
                'default' => $tags_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_type',
                'label' => $type_label,
                'default' => $type_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_sku',
                'label' => $sku_label,
                'default' => $sku_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_sort',
                'label' => $sort_label,
                'default' => $sort_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_street',
                'label' => $street_label,
                'default' => $street_label,
                'wpml' => true
            ])
            ->addField([
                'type' => 'text',
                'settings' => $prefix . '_year',
                'label' => $year_label,
                'default' => $year_label,
                'wpml' => true
            ]);

    }

    private function get_acf_label($group_name, $field_name)
    {
        $config = $this->manager->get_group_key($group_name, $field_name);

        return $config['label'];
    }
}
