<?php
new \Kirki\Panel(
    'stack_pannel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Stack Panel', 'stack'),
        'description' => esc_html__('Stack Theme options are here.', 'stack'),
    ]
);
// Banner section 
new \Kirki\Section(
    'banner_section',
    [
        'title'       => esc_html__('Banner section', 'stack'),
        'description' => esc_html__('Banner Section Description.', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'banner_heading', // For showing data in the frontend
        'label'    => esc_html__('Banner Title', 'stack'),
        'section'  => 'banner_section',
        'default'  => esc_html__('This is a default value', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => '.head-title',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Typography(
    [
        'settings'    => 'typography_setting',
        'label'       => esc_html__('Typography Control', 'kirki'),
        'description' => esc_html__('The full set of options.', 'kirki'),
        'section'     => 'banner_section',
        'priority'    => 10,
        'transport'   => 'auto',
        'default'     => [
            'font-family'     => 'Titillium Web', 'sans-serif',
            'variant'         => 'regular',
            'font-style'      => 'normal',
            'color'           => '#333333',
            'font-size'       => '14px',
            'line-height'     => '1.5',
            'letter-spacing'  => '0',
            'text-transform'  => 'none',
            'text-decoration' => 'none',
            'text-align'      => 'left',
        ],
        'output'      => [
            [
                'element' => '#hero-area .contents .head-title ',
            ],
        ],
    ]
);
// Banner button text 
new \Kirki\Field\Text(
    [
        'settings' => 'banner_button_text',
        'label'    => esc_html__('Button text', 'stack'),
        'section'  => 'banner_section',
        'default'  => esc_html__('Explore', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => '.banner-btn',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'banner_button_url',
        'label'    => esc_html__('Button Link', 'stack'),
        'section'  => 'banner_section',
        'default'  => 'https://yoururl.com/',
        'priority' => 10,
    ]
);

new \Kirki\Field\Image(
    [
        'settings'    => 'banner_image',
        'label'       => esc_html__('Image Control', 'kirki'),
        'section'     => 'banner_section',
        'default'     => '',

    ]
);
//  Background 
new \Kirki\Field\Background(
    [
        'settings'    => 'banner_background_setting',
        'label'       => esc_html__('Banner Background', 'kirki'),
        'section'     => 'banner_section',
        'default'     => [
            'background-color'      => 'rgba(20,20,20,.8)',
            'background-image'      => '',
            'background-repeat'     => 'norepeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '#hero-area',
            ],
        ],
    ]
);
