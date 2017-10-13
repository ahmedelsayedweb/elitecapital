<?php
/*
 * Template Name: Home
 * Description: A Page Template with a darker design.
 */

cf47rs_render_view(
// template that will be displayed, all templates are stored in the views/ folder
    'modules/core/home.twig',
    // if you are familiar with MVC concept, this is something that usually goes into controller's action
    // the returned variables from this function will be available in the template
    function () {
        /** @var \cf47\themecore\section\Registry $section_registry */
        $section_registry = cf47rs_get('core.section.registry');

        return [
            'sections' => $section_registry->get_render_data()
        ];
    },
    [
        'cf47rs-footer-col-1',
        'cf47rs-footer-col-2',
        'cf47rs-footer-col-3',
    ]
);
