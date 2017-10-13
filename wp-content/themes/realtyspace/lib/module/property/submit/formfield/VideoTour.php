<?php

namespace cf47\theme\realtyspace\module\property\submit\formfield;

use Symfony\Component\Form\FormBuilderInterface;

class VideoTour extends AbstractFormField
{

    public function add_field(FormBuilderInterface $builder)
    {
		pll_register_string('realtyspace','Video tour URL');
        $builder->add($this->uid(),
            'url',
            [
                'required' => false,
                'label' => pll__('Video tour URL', 'realtyspace')
            ]);
    }

    public function filter($value)
    {
        return pll__raw($value);
    }
}
