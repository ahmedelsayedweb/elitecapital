<?php
namespace cf47\plugin\realtyspace\module\property\search\field;

use cf47\plugin\realtyspace\module\postconfig\type\PropertyPostType;
use cf47\plugin\realtyspace\module\property\search\field\basetype\Choice;

class PropertyFeature extends Choice
{
    public function get_field_label()
    {
        return $this->options['config_propsearchlbl_feature'];
    }

    protected function get_form_options()
    {
        $parent_options = parent::get_form_options();

        return [
                   'expanded' => !(bool) $this->options['config_propsearch_dropdown_autocomplete'],
                   'multiple' => true,
               ] + $parent_options;
    }

    protected function get_meta_field_name()
    {
        /** @var PropertyPostType $post_type */
        $post_type = cf47rs_get('property.post_type');

        return $post_type->get_feature_taxonomy_name();
    }

    protected function get_options()
    {
        return get_terms($this->get_meta_field_name(), ['fields' => 'id=>name', 'order' => 'ASC', 'orderby' => 'name']);
    }
}
