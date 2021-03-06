<?php

namespace cf47\theme\realtyspace\module\property\submit\formfield;

use cf47\plugin\realtyspace\module\postconfig\type\PropertyPostType;
use cf47\themecore\helper\Util;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;

class PropertyType extends AbstractFormField
{

    public function add_field(FormBuilderInterface $builder)
    {
		pll_register_string('realtyspace','Property type');
        /** @var PropertyPostType $property_post_type */
        $property_post_type = cf47rs_get('property.post_type');
        $options = get_terms($property_post_type->get_type_taxonomy_name(), [
            'fields' => 'id=>name',
            'hide_empty' => false
        ]);
        $builder
            ->add($this->uid(),
                'choice',
                [
                    'label' => pll__('Property type', 'realtyspace'),
                    'choices' => $options,
                    'placeholder' => pll__('None', 'realtyspace'),
                    'required' => false
                ]);
    }

    public function filter($value)
    {
        if (Util::is_positive_digit($value)) {
            return absint($value);
        }

        return null;
    }

}
