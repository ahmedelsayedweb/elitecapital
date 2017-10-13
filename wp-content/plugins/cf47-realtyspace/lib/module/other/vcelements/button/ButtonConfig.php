<?php

namespace cf47\plugin\realtyspace\module\other\vcelements\button;

use cf47\themecore\vc\AbstractShortcode;
use cf47\themecore\vc\ParamBuilder;
use Timber\Timber;

class ButtonConfig extends AbstractShortcode
{
    public function is_mappable()
    {
        return false;
    }

    public function get_vc_config()
    {
        $param_builder = new ParamBuilder();
        $param_builder
            ->add_field_text('text', esc_html__('Button text', 'realtyspace'), [
                'options' => [
                    'value' => esc_html__('Text on the button', 'realtyspace')
                ]
            ])
            ->add_field_link('link', esc_html__('URL (Link)', 'realtyspace'), [
                'options' => [
                    'description' => esc_html__('Add link to button.', 'realtyspace')
                ]
            ])
            ->add_field_dropdown('style', esc_html__('Style', 'realtyspace'), [
                'options' => [
                    'description' => esc_html__('Add link to button.', 'realtyspace'),
                    'value' => [
                        esc_html__('Simple', 'realtyspace') => 'simple',
                        esc_html__('Standard', 'realtyspace') => 'standart',
                    ]
                ]
            ])
            ->add_field_color('bg_color', esc_html__('Background color', 'realtyspace'))
            ->add_field_color('text_color', esc_html__('Text color', 'realtyspace'))
            ->add_field_text('extra_class', esc_html__('Button extra class', 'realtyspace'))
            ->add_group_css();

        return [
            'base' => 'button',
            'name' => esc_html__('Button', 'realtyspace'),
//            'as_child' => ['only'=> 'cf47rs_section_cta'],
            'params' => $param_builder
        ];
    }

    public function render(array $template_vars)
    {
        return Timber::compile('modules/other/vcelements/button.twig', [
            'button' => new ButtonView($template_vars, cf47_app())
        ]);
    }
}