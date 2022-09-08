<?php
new \Kirki\Panel(
    'stack_pannel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Stack Panel', 'stack'),
        'description' => esc_html__('Stack Theme options are here.', 'stack'),
    ]
);
// ==============================
// Banner section 
// ==============================
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
        'label'       => esc_html__('Typography Control', 'stack'),
        'description' => esc_html__('The full set of options.', 'stack'),
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
        'label'       => esc_html__('Image Control', 'stack'),
        'section'     => 'banner_section',
        'default'     => '',

    ]
);
//  Background 
new \Kirki\Field\Background(
    [
        'settings'    => 'banner_background_setting',
        'label'       => esc_html__('Banner Background', 'stack'),
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
// ==============================
// About section 
// ==============================
new \Kirki\Section(
    'About_section',
    [
        'title'       => esc_html__('About section', 'stack'),
        'description' => esc_html__('About Section Description.', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'about_title_setting',
        'label'    => esc_html__('About title', 'stack'),
        'section'  => 'About_section',
        'default'  => esc_html__('We are helping to grow your business.', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => '.title-hl',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Textarea(
    [
        'settings' => 'about_desc_setting',
        'label'    => esc_html__('About description', 'stack'),
        'section'  => 'About_section',
        'default'  => esc_html__('A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack'),
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => '.about-desc',
                'function' => 'html',
            ],
        ]
    ]
);
// About button text 
new \Kirki\Field\Text(
    [
        'settings' => 'About_button_text',
        'label'    => esc_html__('Button text', 'stack'),
        'section'  => 'About_section',
        'default'  => esc_html__('More about us', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => '.about-btn',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'About_button_url',
        'label'    => esc_html__('Button Link', 'stack'),
        'section'  => 'About_section',
        'default'  => 'https://yoururl.com/',
        'priority' => 10,
    ]

);
// About section Repeater 
new \Kirki\Field\Repeater(
    [
        'settings' => 'abbout_repeater',
        'label'    => esc_html__('About options', 'stack'),
        'section'  => 'About_section',
        'priority' => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Your Custom Value', 'stack'),
            'field' => 'about_subtitle',
        ],
        'button_label' => esc_html__('Add new about option ', 'stack'),
        'default'  => [
            [
                'about_icon'       => '<i class="fa-brands fa-aws"></i>',
                'about_subtitle'   => esc_html__('WHAT WE DO', 'stack'),
                'about_content'   => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack'),
            ],
            [
                'about_subtitle'   => esc_html__('MEET OUR TEAM', 'stack'),
                'about_content'   => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack'),
            ],
            [
                'about_subtitle'   => esc_html__('OUR CREATION', 'stack'),
                'about_content'   => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack'),
            ],

        ],
        'fields'   => [
            'about_icon'   => [
                'type'        => 'text',
                'label'       => esc_html__('Icon', 'stack'),
                'description' => '<a href="https://fontawesome.com/search?o=r&f=classic%2Cbrands"> Get the icon from  here </a>and pest the icond code below.',
                'default'     => '<i class="fa-brands fa-aws"></i>',
            ],
            'about_subtitle'   => [
                'type'        => 'text',
                'label'       => esc_html__('Title', 'stack'),
                'default'     => '',
            ],
            'about_content'   => [
                'type'        => 'textarea',
                'label'       => esc_html__('Content', 'stack'),
                'default'     => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
            ],

        ],
    ]
);
// ==============================
// Services section 
// ==============================
new \Kirki\Section(
    'services_section',
    [
        'title'       => esc_html__('Services section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox(
    [
        'settings'    => 'show_service_section',
        'label'       => esc_html__('Show Service section', 'stack'),
        'description' => esc_html__('If unchecked , service section will be hide', 'stack'),
        'section'     => 'services_section',
        'default'     => true,
    ]
);
new \Kirki\Field\Radio_Buttonset(
    [
        'settings'    => 'services_alignment',
        'label'       => esc_html__('Alignment', 'stack'),
        'section'     => 'services_section',
        'default'     => 'Left',
        'priority'    => 10,
        'choices'     => [
            'left'   => esc_html__('Left', 'stack'),
            'center' => esc_html__('Center', 'stack'),
            'right'  => esc_html__('Right', 'stack'),
        ],
        'output'    => [
            [
                'element'   => '.services-item',
                'property'  => 'text-align',
            ]
        ]

    ]
);
new \Kirki\Field\Select(
    [
        'settings'    => 'services_column_setting',
        'label'       => esc_html__('Service item per row', 'stack'),
        'section'     => 'services_section',
        'default'     => 'col-md-6 col-lg-4 col-xs-12',
        'placeholder' => esc_html__('Choose an option', 'stack'),
        'choices'     => [
            'col-md-3 col-lg-2 col-xs-12' => esc_html__('6 item', 'stack'),
            'col-md-4 col-lg-3 col-xs-12' => esc_html__('4 item', 'stack'),
            'col-md-6 col-lg-4 col-xs-12' => esc_html__('3 item', 'stack'),
            'col-md-6 col-lg-6 col-xs-12' => esc_html__('2 item', 'stack'),
            'col-md-12 col-lg-12 col-xs-12' => esc_html__('1 item', 'stack'),

        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'Services_title',
        'label'    => esc_html__('Services title', 'stack'),
        'section'  => 'services_section',
        'default'  => esc_html__('OUR SERVICES
        ', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'section#services h2 ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Textarea(
    [
        'settings' => 'Services_desc',
        'label'    => esc_html__('Services description', 'stack'),
        'section'  => 'services_section',
        'default'  => esc_html__('A desire to help and empower others between community contributors in technology
        began to grow in 2020.', 'stack'),
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'section#services .section-header p ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Repeater(
    [
        'settings' => 'services_repeater_settings',
        'label'    => esc_html__('Service items', 'stack'),
        'section'  => 'services_section',
        'priority' => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Your Custom Value', 'stack'),
            'field' => 'service_subtitle',
        ],
        'button_label' => esc_html__('Add new service option ', 'stack'),
        'default'  => [
            [
                // 'service_icon'       => '',
                'service_subtitle'   => esc_html__('CONTENT WRITING', 'stack'),
                'service_content'   => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur', 'stack'),
            ],
            [
                'service_subtitle'   => esc_html__('DIGITAL MARKETING', 'stack'),
                'service_content'   => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur', 'stack'),
            ],
            [
                'service_subtitle'   => esc_html__('WEB DEVELOPMENT', 'stack'),
                'service_content'   => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur', 'stack'),
            ],

        ],

        'fields'   => [
            // 'service_icon'   => [
            //     'type'        => 'text',
            //     'label'       => esc_html__('Icon', 'stack'),
            //     'description' => '<a href="https://fontawesome.com/search?o=r&f=classic%2Cbrands"> Get the icon from  here </a>and pest the icond code below.',
            //     'default'     => '<i class="fa-brands fa-aws"></i>',
            // ],
            'service_subtitle'   => [
                'type'        => 'text',
                'label'       => esc_html__('Title', 'stack'),
                'default'     => '',
                'transport' => 'postMessage',
                'js_vars'   => [
                    [
                        'element'  => 'section#services h3 a',
                        'function' => 'html',
                    ],

                ],
            ],
            'service_content'   => [
                'type'        => 'textarea',
                'label'       => esc_html__('Content', 'stack'),
                'default'     => '',
                'transport' => 'auto',
                'output'   => [
                    [
                        'element'  => '.services-content p  ',
                        'function' => 'html',
                    ],
                ]
            ],

        ],
    ]
);
// ==============================
// Services section 
// ==============================
new \Kirki\Section(
    'video_section',
    [
        'title'       => esc_html__('Video section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'video_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'kirki'),
        'section'     => 'video_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Enable', 'kirki'),
            'off' => esc_html__('Disable', 'kirki'),
        ],
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'video_url_setting',
        'label'    => esc_html__('URL Control', 'kirki'),
        'section'  => 'video_section',
        'default'  => 'https://youtu.be/EMTZUfIbiBk',
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'video_text',
        'label'    => esc_html__('Services title', 'stack'),
        'section'  => 'video_section',
        'default'  => esc_html__('OUR SERVICES
        ', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'h2.mt-3.wow.zoomIn.animated  ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Background(
    [
        'settings'    => 'video_background_setting',
        'label'       => esc_html__('Video section background', 'kirki'),
        'section'     => 'video_section',
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
                'element' => '.video-promo ',
            ],
        ],
    ]
);
