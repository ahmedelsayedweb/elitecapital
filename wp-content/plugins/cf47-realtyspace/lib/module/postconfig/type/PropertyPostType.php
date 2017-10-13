<?php

namespace cf47\plugin\realtyspace\module\postconfig\type;

use cf47\plugin\realtyspace\module\property\submit\FieldConfig;
use cf47\themecore\acf\setting;
use cf47\themecore\AcfManager;
use cf47\themecore\Options;
use cf47\themecore\PostTypeInterface;
use cf47\themecore\wpml\WpmlManager;

class PropertyPostType implements PostTypeInterface
{
    private $name;
    private $theme_prefix;
    /**
     * @var \cf47\themecore\AcfManager
     */
    private $acf;
    /**
     * @var \cf47\plugin\realtyspace\module\postconfig\type\AgentPostType
     */
    private $agent_post_type;
    /**
     * @var \cf47\themecore\wpml\WpmlManager
     */
    private $wpml_manager;
    /**
     * @var \cf47\themecore\Options
     */
    private $options;

    public function __construct(
        $theme_prefix,
        AcfManager $acf,
        AgentPostType $agent_post_type,
        WpmlManager $wpml_manager,
        Options $options
    ) {
        $this->theme_prefix = $theme_prefix;
        $this->name = $this->theme_prefix . '_' . 'property';
        $this->acf = $acf;
        $this->agent_post_type = $agent_post_type;
        $this->wpml_manager = $wpml_manager;
        $this->options = $options;
    }

    public function register()
    {
        $this->register_post_type();
        $this->register_meta_fields();

        $this->wpml_manager->register_custom_type($this->get_name());

        $this->wpml_manager->register_taxonomy($this->get_type_taxonomy_name());
        $this->wpml_manager->register_taxonomy($this->get_contract_taxonomy_name());
        $this->wpml_manager->register_taxonomy($this->get_feature_taxonomy_name());
        $this->wpml_manager->register_taxonomy($this->get_location_taxonomy_name());
    }

    public function get_name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function get_singular_name()
    {
        return esc_html__('Property', 'realtyspace');
    }

    public function get_type_taxonomy_name()
    {
        return $this->theme_prefix . '_property_type';
    }

    public function get_location_taxonomy_name()
    {
        return $this->theme_prefix . '_property_location';
    }

    public function get_contract_taxonomy_name()
    {
        return $this->theme_prefix . '_property_contract';
    }

    public function get_feature_taxonomy_name()
    {
        return $this->theme_prefix . '_property_feature';
    }

    public function get_tag_taxonomy_name()
    {
        return $this->theme_prefix . '_property_tag';
    }

    private function register_post_type()
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
		pll_register_string('realtyspace', 'Amenities');
	pll_register_string('realtyspace', 'Listing');
	pll_register_string('realtyspace', 'You can choose amenities that you have.');
	pll_register_string('realtyspace', 'Tags');
	pll_register_string('realtyspace', 'You can choose tags that you have.');
	pll_register_string('realtyspace', 'Special features');
	pll_register_string('realtyspace', 'Additional details');
	pll_register_string('realtyspace', 'Location');
	pll_register_string('realtyspace', 'Set Google Maps location');
	pll_register_string('realtyspace', 'Save');
	pll_register_string('realtyspace', 'Photos');
	pll_register_string('realtyspace', 'The first image will be set as property cover');
        $cpt = new \CPT([
            'post_type_name' => $this->get_name(),
            'singular' => $this->get_singular_name(),
            'plural' => pll__('Properties', 'realtyspace'),
            /* translators: After translation url parts, the WordPress permalink cache should be dropped.
               The simplest way is to go to Settings / Permalinks and click on Save. */
            'slug' => esc_html_x('properties', 'slug', 'realtyspace'),
        ], [
            'show_ui' => true,
            'show_in_admin_bar' => true,
            'exclude_from_search' => true,
            'public' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
            ],
            'taxonomies' => [
                $this->get_type_taxonomy_name(),
                $this->get_location_taxonomy_name(),
                $this->get_contract_taxonomy_name(),
                $this->get_feature_taxonomy_name(),

            ],
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-home',
        ]);

        $cpt->register_taxonomy(
            [
                'taxonomy_name' => $this->get_type_taxonomy_name(),
                'singular' => pll__('Property Type', 'realtyspace'),
                'plural' => pll__('Property Types', 'realtyspace'),
                'slug' => pll__('property_type', 'realtyspace'),
            ],
            [
                'hierarchical' => true,
            ]
        );

        $cpt->register_taxonomy(
            [
                'taxonomy_name' => $this->get_feature_taxonomy_name(),
                'singular' => pll__('Property Amenities', 'realtyspace'),
                'plural' => pll__('Property Amenities', 'realtyspace'),
                'slug' => pll__('property_amenity', 'realtyspace'),
            ],
            [
                'hierarchical' => true,
            ]
        );

        $cpt->register_taxonomy(
            [
                'taxonomy_name' => $this->get_location_taxonomy_name(),
                'singular' => pll__('Property Location', 'realtyspace'),
                'plural' => pll__('Property Locations', 'realtyspace'),
                'slug' => pll__('property_location', 'realtyspace'),
            ],
            [
                'hierarchical' => true,
            ]
        );

        $cpt->register_taxonomy(
            [
                'taxonomy_name' => $this->get_contract_taxonomy_name(),
                'singular' => pll__('Property Status', 'realtyspace'),
                'plural' => pll__('Property Statuses', 'realtyspace'),
                'slug' => pll__('property_contract', 'realtyspace'),
            ],
            [
                'hierarchical' => true,
            ]
        );

        $cpt->register_taxonomy(
            [
                'taxonomy_name' => $this->get_tag_taxonomy_name(),
                'singular' => pll__('Property Tag', 'realtyspace'),
                'plural' => pll__('Property Tags', 'realtyspace'),
                'slug' => pll__('property_tag', 'realtyspace'),
            ],
            [
                'hierarchical' => true,
            ]
        );

        add_action('admin_menu',
            function () {
                remove_meta_box($this->theme_prefix . '_property_contractdiv', $this->get_name(), 'side');
                remove_meta_box($this->theme_prefix . '_property_typediv', $this->get_name(), 'side');
                remove_meta_box($this->theme_prefix . '_property_locationdiv', $this->get_name(), 'side');
            }
        );
    }

    private function register_meta_fields()
    {
        $this->register_content_meta_fields();
        $this->register_side_meta_fields();
        $this->register_property_submit_meta();
    }

    private function register_content_meta_fields()
    {
		pll_register_string('realtyspace','SKU');
		pll_register_string('realtyspace','Price');
		pll_register_string('realtyspace','Year built');
		pll_register_string('realtyspace','Only number');
		pll_register_string('realtyspace','Description');
		pll_register_string('realtyspace','Price suffix');
		pll_register_string('realtyspace','Rooms');
		pll_register_string('realtyspace','bedrooms');
		pll_register_string('realtyspace','Bathrooms');
		pll_register_string('realtyspace','Agent');
		pll_register_string('realtyspace','Garages');
		pll_register_string('realtyspace','Land area');
		pll_register_string('realtyspace','Built-up area');
		pll_register_string('realtyspace','Is featured');
		pll_register_string('realtyspace','Add to gallery');
		pll_register_string('realtyspace','Map location');
		pll_register_string('realtyspace','Gallery');
		pll_register_string('realtyspace','Video tour');
		pll_register_string('realtyspace','Additional details');
		pll_register_string('realtyspace','Name');
		pll_register_string('realtyspace','Value');
		pll_register_string('realtyspace','Attachments');
		pll_register_string('realtyspace','Attachment');
        $builder = $this->acf->get_builder();

        $group = $builder
            ->group(pll__('Property', 'realtyspace'), 'property')
            ->set_position(setting\Position::POSITION_AFTER_TITLE)
            ->set_menu_order(2)
            ->set_location([
                [
                    [
                        'param' => setting\Location::PARAM_POST_TYPE,
                        'operator' => '==',
                        'value' => $this->get_name(),
                    ],
                ],
            ])
            ->set_fields([
                $builder->text(pll__('SKU', 'realtyspace'), 'sku'),
                $builder->number(pll__('Price', 'realtyspace'), 'price')
                        ->set_instructions(pll__('Only number', 'realtyspace')),
                $builder->number(pll__('Year built', 'realtyspace'), 'year_built'),
                $builder->text(pll__('Price suffix', 'realtyspace'), 'price_suffix'),
                $builder->number(pll__('Rooms', 'realtyspace'), 'rooms'),
                $builder->number(pll__('Bathrooms', 'realtyspace'), 'bathrooms'),
                $builder->number(pll__('Bedrooms', 'realtyspace'), 'bedrooms'),
                $builder->number(pll__('Garages', 'realtyspace'), 'garages'),
                $builder->number(pll__('Built-up area', 'realtyspace'), 'area'),
                $builder->number(pll__('Land area', 'realtyspace'), 'land_area'),
                $builder->true_false(pll__('Is featured', 'realtyspace'), 'featured'),
                $builder->true_false(pll__('Add to gallery', 'realtyspace'), 'add_to_gallery'),
                $builder
                    ->google_map(pll__('Map location', 'realtyspace'), 'map_location')
                    ->with_settings([
                        'center_lat' => $this->options['config_propmap_lat'],
                        'center_lng' => $this->options['config_propmap_long'],
                        'zoom' => $this->options['config_propmap_zoom'],
                    ]),
                $builder->gallery(pll__('Gallery', 'realtyspace'), 'images')
                        ->with_settings([
                            'library' => 'uploadedTo',
                        ]),
                $builder->oembed(pll__('Video tour', 'realtyspace'), 'video_tour'),
                $builder->repeater(pll__('Additional details', 'realtyspace'), 'additional_details')
                        ->set_subfields([
                            $builder->text(pll__('Name', 'realtyspace'), 'name'),
                            $builder->text(pll__('Value', 'realtyspace'), 'value'),
                        ])
                ,
                $builder->repeater(pll__('Attachments', 'realtyspace'), 'attachments')
                        ->set_subfields([
                            $builder->file(pll__('Attachment', 'realtyspace'), 'attachment'),
                        ]),
            ]);

        $this->acf->register_group($group);
    }

    private function register_side_meta_fields()
    {
		pll_register_string('realtyspace','Property Location');
		pll_register_string('realtyspace','Property Contract type');
		pll_register_string('realtyspace','Extra');
		pll_register_string('realtyspace','Property type');
		pll_register_string('realtyspace','Agent');
                pll_register_string('realtyspace','Search');

        $builder = $this->acf->get_builder();
        $group = $builder
            ->group(pll__('Extra', 'realtyspace'), 'property_side')
            ->set_position(setting\Position::POSITION_SIDE)
            ->set_location([
                [
                    [
                        'param' => setting\Location::PARAM_POST_TYPE,
                        'operator' => '==',
                        'value' => $this->get_name(),
                    ],
                ],
            ])
            ->set_fields([
                $builder->taxonomy(pll__('Property Contract type', 'realtyspace'), 'contract_type')
                        ->set_taxonomy($this->get_contract_taxonomy_name())
                        ->set_field_type(setting\FieldType::FIELD_RADIO)
                        ->with_settings([
                            'add_term' => 1,
                            'save_terms' => 1,
                            'load_terms' => 1,
                        ]),
                $builder->taxonomy(pll__('Property type', 'realtyspace'), 'property_type')
                        ->set_taxonomy($this->get_type_taxonomy_name())
                        ->set_field_type(setting\FieldType::FIELD_RADIO)
                        ->with_settings([
                            'add_term' => 1,
                            'save_terms' => 1,
                            'load_terms' => 1,
                        ])
                ,
//				
                $builder->taxonomy(pll__('Property Location'), 'location')
                        ->set_taxonomy($this->get_location_taxonomy_name())
                        ->set_field_type(setting\FieldType::FIELD_RADIO)
                        ->with_settings([
                            'add_term' => 1,
                            'save_terms' => 1,
                            'load_terms' => 1,
                        ])
                ,
                $builder->post_object(pll__('Agent', 'realtyspace'), 'agent')
                        ->set_post_types([$this->agent_post_type->get_name()])
                        ->set_return_format(setting\ReturnFormat::RETURN_ID)
                        ->allow_null(),
            ]);

        $this->acf->register_group($group);
    }

    private function register_property_submit_meta()
    {
        /** @var FieldConfig $field_config */
        $field_config = cf47rs_get('property.submit.field_config');
        $builder = $this->acf->get_builder();
        $group = $builder
            ->group(pll__('Front end submit form', 'realtyspace'), 'property_submit')
            ->set_menu_order(2)
            ->set_position(setting\Position::POSITION_AFTER_TITLE)
            ->set_location([
                [
                    [
                        'param' => setting\Location::PARAM_PAGE_TEMPLATE,
                        'operator' => '==',
                        'value' => 'page-templates/template-propertysubmit.php',
                    ],
                ],
            ])
            ->set_fields([
                $builder->checkbox(pll__('Form fields', 'realtyspace'), 'form_fields')
                        ->set_choices($field_config->get_pairs())
                        ->set_default_value(array_keys($field_config->get_pairs())),
            ]);

        $this->acf->register_group($group);
    }
}
