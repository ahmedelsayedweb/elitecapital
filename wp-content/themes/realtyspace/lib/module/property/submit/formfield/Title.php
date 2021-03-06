<?php

namespace cf47\theme\realtyspace\module\property\submit\formfield;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class Title extends AbstractFormField
{

    public function add_field(FormBuilderInterface $builder)
    {
pll_register_string('realtyspace', 'Property title');
        $builder->add($this->uid(),
            'text',
            [
                'required' => true,
                'label' => pll__('Property title', 'realtyspace'),
                'constraints' => [
                    new NotBlank()
                ]
            ]);
    }

    public function filter($value)
    {
        return sanitize_text_field($value);
    }
}
