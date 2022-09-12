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
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'video_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);
new \Kirki\Field\URL(
    [
        'settings' => 'video_url_setting',
        'label'    => esc_html__('URL Control', 'stack'),
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
        'label'       => esc_html__('Video section background', 'stack'),
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

// ==============================
// Team section 
// ==============================
new \Kirki\Section(
    'team_section',
    [
        'title'       => esc_html__('Team section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'team_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'team_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);

new \Kirki\Field\Select(
    [
        'settings'    => 'team_column_setting',
        'label'       => esc_html__('Team member per row', 'stack'),
        'section'     => 'team_section',
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
        'settings' => 'team_title',
        'label'    => esc_html__('Team title', 'stack'),
        'section'  => 'team_section',
        'default'  => esc_html__('MEET OUR TEAM', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'section#team h2  ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Textarea(
    [
        'settings' => 'team_desc',
        'label'    => esc_html__('Team description', 'stack'),
        'section'  => 'team_section',
        'default'  => esc_html__('A desire to help and empower others between community contributors in technology
        began to grow in 2020.', 'stack'),
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => ' section#team .section-header p',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Repeater(
    [
        'settings' => 'team_repeater_settings',
        'label'    => esc_html__('Team members', 'stack'),
        'section'  => 'team_section',
        'priority' => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Your Custom Value', 'stack'),
            'field' => 'team_subtitle',
        ],
        'button_label' => esc_html__('Add new team member ', 'stack'),
        'default'  => [
            [
                // 'team_image'       => '',
                'team_subtitle'    => esc_html__('DAVID SMITH', 'stack'),
                'team_content'     => esc_html__('Chief Operating Officer', 'stack'),
            ],


        ],

        'fields'   => [

            'team_image'   => [
                'type'    => 'image',
                'label'       => esc_html__('Team member image', 'stack'),
                'default'     => '',
                'choices'     => [
                    'save_as' => 'array',
                ],
            ],
            'team_subtitle'   => [
                'type'        => 'text',
                'label'       => esc_html__('Title', 'stack'),
                'default'     => '',
            ],
            'team_content'   => [
                'type'        => 'textarea',
                'label'       => esc_html__('Content', 'stack'),
                'default'     => '',
            ],
            'team_facebook'   => [
                'type'        => 'url',
                'label'       => esc_html__('Facebook Link', 'stack'),
                'default'     => '',
            ], 'team_twitter'   => [
                'type'        => 'url',
                'label'       => esc_html__('Twiter Link', 'stack'),
                'default'     => '',
            ], 'team_instagram'   => [
                'type'        => 'url',
                'label'       => esc_html__('Instagram Link', 'stack'),
                'default'     => '',
            ],
        ],
    ]
);
// ==============================
// Counter section 
// ==============================
new \Kirki\Section(
    'counter_section',
    [
        'title'       => esc_html__('Counter section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'counter_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'counter_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);

new \Kirki\Field\Repeater(
    [
        'settings' => 'counter_repeater_settings',
        'label'    => esc_html__('Team members', 'stack'),
        'section'  => 'counter_section',
        'priority' => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Your Custom Value', 'stack'),
            'field' => 'counter_subtitle',
        ],
        'button_label' => esc_html__('Add new team member ', 'stack'),

        'fields'   => [
            'counter_icon' => array(
                'type'        => 'select',
                'label'       => esc_attr__('Counter Icon', 'stack'),
                'default'     =>  '',
                'choices'     => [
                    'lni-users'      => esc_html__('User icon', 'stack'),
                    'lni-emoji-smile' => esc_html__('Smile emoji', 'stack'),
                    'lni-download'   => esc_html__('Download icon', 'stack'),
                    'lni-thumbs-up'  => esc_html__('Thumbs up icon', 'stack'),
                ],
            ),

            'counter_number'   => [
                'type'        => 'text',
                'label'       => esc_html__('Number', 'stack'),
                'description' => esc_html__('Use numbers only', 'stack'),
                'default'     => '',
            ],
            'counter_title'   => [
                'type'        => 'text',
                'label'       => esc_html__('Title', 'stack'),
                'default'     => '',
            ],


        ],
    ]
);
new \Kirki\Field\Background(
    [
        'settings'    => 'counter_background',
        'label'       => esc_html__('Counter Background', 'stack'),
        'section'     => 'counter_section',
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
                'element' => '#counter',
            ],
        ],
    ]
);

// ==============================
// Pricing section 
// ==============================
new \Kirki\Section(
    'pricing_section',
    [
        'title'       => esc_html__('Pricing section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'pricing_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'pricing_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'pricing_heading',
        'label'    => esc_html__('Pricing Heading', 'stack'),
        'section'  => 'pricing_section',
        'default'  => esc_html__('BEST PRICING', 'stack'),
        'priority' => 10,
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'section#pricing .section-title  ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Textarea(
    [
        'settings' => 'pricing_desc',
        'label'    => esc_html__('Pricing description', 'stack'),
        'section'  => 'pricing_section',
        'default'  => esc_html__('A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack'),
        'transport' => 'auto',
        'output'   => [
            [
                'element'  => 'section#pricing .section-header p ',
                'function' => 'html',
            ],
        ]
    ]
);
// new \Kirki\Field\Repeater(
//     [
//         'settings' => 'pricing_repeater_settings',
//         'label'    => esc_html__('Pricing Tables', 'stack'),
//         'section'  => 'pricing_section',
//         'priority' => 10,
//         'row_label'    => [
//             'type'  => 'field',
//             'value' => esc_html__('Your Custom Value', 'stack'),
//             'field' => 'pricing_subtitle',
//         ],
//         'default'  => [
//             [
//                 'pricing_title'       => esc_html__('Basic', 'stack'),
//                 'pricing_currency'   => esc_html__('$', 'stack'),
//                 'pricing_duration'   => esc_html__('Month', 'stack'),
//             ],
//             [
//                 'pricing_title'       => esc_html__('Professonal', 'stack'),
//                 'pricing_currency'   => esc_html__('$', 'stack'),
//                 'pricing_duration'   => esc_html__('Month', 'stack'),
//             ],
//             [
//                 'pricing_title'       => esc_html__('Expert', 'stack'),
//                 'pricing_currency'   => esc_html__('$', 'stack'),
//                 'pricing_duration'   => esc_html__('Month', 'stack'),
//             ],


//         ],

//         'fields'   => [


//             'pricing_title'   => [
//                 'type'        => 'text',
//                 'label'       => esc_html__('Title', 'stack'),

//             ],
//             'pricing_currency'   => [
//                 'type'        => 'text',
//                 'label'       => esc_html__('Currency sign', 'stack'),
//                 'default'     => '$',
//             ],
//             'pricing_value'   => [
//                 'type'        => 'text',
//                 'label'       => esc_html__('Price', 'stack'),
//                 'default'     => '',
//             ],
//             'pricing_duration'   => [
//                 'type'        => 'select',
//                 'label'       => esc_html__('Duration', 'stack'),
//                 'default'     => 'Month',
//                 'choices'     => [
//                     'Month' => esc_html__('Month', 'stack'),
//                     'Year' => esc_html__('Year', 'stack'),
//                 ],
//             ],

//         ],
//     ]
// );
// =============================
// This section will show inside of pricing section 
// =============================
// Basic pricing table 
new \Kirki\Section(
    'pricing_Table1',
    [
        'title'       => esc_html__('Pricing table 1', 'stack'),
        // 'panel'       => 'stack_pannel',
        'section'  => 'pricing_section',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'basic_title',
        'label'    => esc_html__('Table title', 'stack'),
        'section'  => 'pricing_Table1',
        'default'  => esc_html__('Basic', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'basic_currency',
        'label'    => esc_html__('Currency sign', 'stack'),
        'section'  => 'pricing_Table1',
        'default'  => esc_html__('$', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'basic_value',
        'label'    => esc_html__('Price', 'stack'),
        'section'  => 'pricing_Table1',
        'default'  => esc_html__('', 'stack'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Select(
    [
        'settings'    => 'basic_duration',
        'label'       => esc_html__('Duration', 'stack'),
        'section'     => 'pricing_Table1',
        'default'     => 'Month',
        'placeholder' => esc_html__('Choose time duration', 'stack'),
        'choices'     => [
            'Month' => esc_html__('Month', 'stack'),
            'Year' => esc_html__('Year', 'stack'),
        ],
    ]
);
new \Kirki\Field\Multicheck(
    [
        'settings' => 'basic_featurs',
        'label'    => esc_html__('Featurs', 'stack'),
        'section'  => 'pricing_Table1',
        'default'  => [''],
        'priority' => 10,
        'choices'  => [
            'Business Analyzing'     => esc_html__('Business Analyzing', 'stack'),
            '24/7 Tech Suport'       => esc_html__('24/7 Tech Suport', 'stack'),
            'Operational Excellence' => esc_html__('Operational Excellence', 'stack'),
            'Business Idea Ready'    => esc_html__('Business Idea Ready', 'stack'),
            '2 Database'             => esc_html__('2 Database', 'stack'),
            'Customer Support'       => esc_html__('Customer Support', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'basic_btn_txt',
        'label'    => esc_html__('Button text', 'stack'),
        'section'  => 'pricing_Table1',
        'default'  => esc_html__('GET IT', 'stack'),
        'priority' => 10,
    ]
);

// Professonal pricing table =======================

new \Kirki\Section(
    'pricing_Table2',
    [
        'title'       => esc_html__('Pricing table 2', 'stack'),
        // 'panel'       => 'stack_pannel',
        'section'  => 'pricing_section',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'professonal_title',
        'label'    => esc_html__('Table title', 'stack'),
        'section'  => 'pricing_Table2',
        'default'  => esc_html__('professonal', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'professonal_currency',
        'label'    => esc_html__('Currency sign', 'stack'),
        'section'  => 'pricing_Table2',
        'default'  => esc_html__('$', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'professonal_value',
        'label'    => esc_html__('Price', 'stack'),
        'section'  => 'pricing_Table2',
        'default'  => esc_html__('', 'stack'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Select(
    [
        'settings'    => 'professonal_duration',
        'label'       => esc_html__('Duration', 'stack'),
        'section'     => 'pricing_Table2',
        'default'     => 'Month',
        'placeholder' => esc_html__('Choose time duration', 'stack'),
        'choices'     => [
            'Month' => esc_html__('Month', 'stack'),
            'Year' => esc_html__('Year', 'stack'),
        ],
    ]
);
new \Kirki\Field\Multicheck(
    [
        'settings' => 'professonal_featurs',
        'label'    => esc_html__('Featurs', 'stack'),
        'section'  => 'pricing_Table2',
        'default'  => [''],
        'priority' => 10,
        'choices'  => [
            'Business Analyzing'     => esc_html__('Business Analyzing', 'stack'),
            '24/7 Tech Suport'       => esc_html__('24/7 Tech Suport', 'stack'),
            'Operational Excellence' => esc_html__('Operational Excellence', 'stack'),
            'Business Idea Ready'    => esc_html__('Business Idea Ready', 'stack'),
            '2 Database'             => esc_html__('2 Database', 'stack'),
            'Customer Support'       => esc_html__('Customer Support', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'professonal_btn_txt',
        'label'    => esc_html__('Button text', 'stack'),
        'section'  => 'pricing_Table2',
        'default'  => esc_html__('GET IT', 'stack'),
        'priority' => 10,
    ]
);

// Expert pricing table =======================

new \Kirki\Section(
    'pricing_Table3',
    [
        'title'       => esc_html__('Pricing table 3', 'stack'),
        // 'panel'       => 'stack_pannel',
        'section'  => 'pricing_section',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'Expert_title',
        'label'    => esc_html__('Table title', 'stack'),
        'section'  => 'pricing_Table3',
        'default'  => esc_html__('Expert', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'Expert_currency',
        'label'    => esc_html__('Currency sign', 'stack'),
        'section'  => 'pricing_Table3',
        'default'  => esc_html__('$', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'Expert_value',
        'label'    => esc_html__('Price', 'stack'),
        'section'  => 'pricing_Table3',
        'default'  => esc_html__('', 'stack'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Select(
    [
        'settings'    => 'Expert_duration',
        'label'       => esc_html__('Duration', 'stack'),
        'section'     => 'pricing_Table3',
        'default'     => 'Month',
        'placeholder' => esc_html__('Choose time duration', 'stack'),
        'choices'     => [
            'Month' => esc_html__('Month', 'stack'),
            'Year' => esc_html__('Year', 'stack'),
        ],
    ]
);
new \Kirki\Field\Multicheck(
    [
        'settings' => 'Expert_featurs',
        'label'    => esc_html__('Featurs', 'stack'),
        'section'  => 'pricing_Table3',
        'default'  => [''],
        'priority' => 10,
        'choices'  => [
            'Business Analyzing'     => esc_html__('Business Analyzing', 'stack'),
            '24/7 Tech Suport'       => esc_html__('24/7 Tech Suport', 'stack'),
            'Operational Excellence' => esc_html__('Operational Excellence', 'stack'),
            'Business Idea Ready'    => esc_html__('Business Idea Ready', 'stack'),
            '2 Database'             => esc_html__('2 Database', 'stack'),
            'Customer Support'       => esc_html__('Customer Support', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'Expert_btn_txt',
        'label'    => esc_html__('Button text', 'stack'),
        'section'  => 'pricing_Table3',
        'default'  => esc_html__('GET IT', 'stack'),
        'priority' => 10,
    ]
);
// =======================
// Portfolio Section 
// =======================
new \Kirki\Section(
    'portfolio_section',
    [
        'title'       => esc_html__('Portfolio section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'portfolio_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'portfolio_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'portfolio_heading', // For showing data in the frontend
        'label'    => esc_html__('Portfolio Heading', 'stack'),
        'section'  => 'portfolio_section',
        'default'  => esc_html__('OUR WORKS', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => '',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'portfolio_desc',
        'label'    => esc_html__('Portfolio Description', 'stack'),
        'section'  => 'portfolio_section',
        'default'  => esc_html__('A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack'),
        'priority' => 10,
    ]
);
new \Kirki\Field\Repeater(
    [
        'settings'     => 'portfolio_repeater',
        'label'        => esc_html__('Portfolio', 'stack'),
        'section'      => 'portfolio_section',
        'priority'     => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Your Custom Value', 'stack'),
            'field' => 'portfolio_title',
        ],
        'button_label' => esc_html__('Add New Portfolio item', 'stack'),
        'fields'       => [
            'portfolio_title'   => [
                'type'        => 'text',
                'label'       => esc_html__('Portfolio Title', 'stack'),
                'default'     => '',
            ],
            'portfolio_small_img'    => [
                'type'        => 'image',
                'label'       => esc_html__('Portfolio small image', 'stack'),
                'default'     => '',
            ],
            'portfolio_big_img'    => [
                'type'        => 'image',
                'label'       => esc_html__('Portfolio big image', 'stack'),
                'default'     => '',
            ],
        ],
    ]
);
// ==============================
// testomonial section 
// ==============================
new \Kirki\Section(
    'testomonial_section',
    [
        'title'       => esc_html__('Testomonial section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'testomonial_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'testomonial_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);

new \Kirki\Field\Repeater(
    [
        'settings' => 'testomonial_repeater_settings',
        'label'    => esc_html__('Testomonial item', 'stack'),
        'section'  => 'testomonial_section',
        'priority' => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Add new item', 'stack'),
            'field' => 'testomonial_name',
        ],
        'button_label' => esc_html__('Add new testomonial item ', 'stack'),

        'fields'   => [


            'testomonial_image'   => [
                'type'        => 'image',
                'label'       => esc_html__('image', 'stack'),
                'default'     => '',
            ],
            'testomonial_name'   => [
                'type'        => 'text',
                'label'       => esc_html__('Name', 'stack'),
                'default'     => '',
            ],
            'testomonial_posetion'   => [
                'type'        => 'text',
                'label'       => esc_html__('Posetion', 'stack'),
                'default'     => '',
            ],
            'testomonial_desc'   => [
                'type'        => 'textarea',
                'label'       => esc_html__('Description', 'stack'),
                'default'     => '',
            ],


        ],
    ]
);
new \Kirki\Field\Background(
    [
        'settings'    => 'testomonial_background',
        'label'       => esc_html__('testomonial Background', 'stack'),
        'section'     => 'testomonial_section',
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
                'element' => '.testimonial',
                'property' => 'background-image'
            ],
        ],
    ]
);
// =======================
// Blog Section 
// =======================
new \Kirki\Section(
    'blog_section',
    [
        'title'       => esc_html__('Blog section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'blog_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'blog_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'blog_heading', // For showing data in the frontend
        'label'    => esc_html__('Blog Heading', 'stack'),
        'section'  => 'blog_section',
        'default'  => esc_html__('LATEST BLOG', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => 'section#blog h2 ',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'blog_desc',
        'label'    => esc_html__('Blog Description', 'stack'),
        'section'  => 'blog_section',
        'default'  => esc_html__('A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => 'section#blog .section-header p ',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Number(
    [
        'settings' => 'blog_per_page', // For showing data in the frontend
        'label'    => esc_html__('Blog per page', 'stack'),
        'section'  => 'blog_section',
        'default'  => esc_html__(3, 'stack'),
        'priority' => 10,
    ]
);

// =======================
// Clients Section 
// =======================
new \Kirki\Section(
    'clients_section',
    [
        'title'       => esc_html__('Client section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'clients_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'clients_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'clients_heading', // For showing data in the frontend
        'label'    => esc_html__('Client Heading', 'stack'),
        'section'  => 'clients_section',
        'default'  => esc_html__('NOTABLE CLIENTS', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => 'div#clients h2',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'clients_desc',
        'label'    => esc_html__('Client Description', 'stack'),
        'section'  => 'clients_section',
        'default'  => esc_html__('Over the last 20 years, we have helped and guided organisations to achieve outstanding results', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => 'div#clients.section-header p ',
                'function' => 'html',
            ],
        ]
    ]
);


new \Kirki\Field\Repeater(
    [
        'settings'     => 'clients_repeater',
        'label'        => esc_html__('Clients logo', 'stack'),
        'section'      => 'clients_section',
        'priority'     => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Client', 'stack'),
            'field' => '',
        ],
        'button_label' => esc_html__('Add New Client', 'stack'),
        'fields'       => [

            'clients_name'    => [
                'type'        => 'text',
                'label'       => esc_html__('Client Name', 'stack'),
                'default'     => '',
            ],
            'clients_img'    => [
                'type'        => 'image',
                'label'       => esc_html__('Client logo', 'stack'),
                'default'     => '',
            ],
        ],
    ]
);
// =======================
// Contact Section 
// =======================
new \Kirki\Section(
    'contact_section',
    [
        'title'       => esc_html__('Contact section', 'stack'),
        'panel'       => 'stack_pannel',
        'priority'    => 160,
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'contact_switch_setting',
        'label'       => esc_html__('Show or hide this section', 'stack'),
        'section'     => 'contact_section',
        'default'     => 'on',
        'choices'     => [
            'on'  => esc_html__('Show', 'stack'),
            'off' => esc_html__('Hide', 'stack'),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'contact_heading', // For showing data in the frontend
        'label'    => esc_html__('Contact Heading', 'stack'),
        'section'  => 'contact_section',
        'default'  => esc_html__('We\'re a friendly bunch..', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => '.contact-title h1',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Textarea(
    [
        'settings' => 'contact_desc',
        'label'    => esc_html__('Contact Description', 'stack'),
        'section'  => 'contact_section',
        'default'  => esc_html__('We create projects for companies and startups with a passion for quality', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => '.contact-title p ',
                'function' => 'html',
            ],
        ]
    ]
);
new \Kirki\Field\Text(
    [
        'settings' => 'contact_title', // For showing data in the frontend
        'label'    => esc_html__('Contact Title', 'stack'),
        'section'  => 'contact_section',
        'default'  => esc_html__('CONTACT US', 'stack'),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => '.contact-right-area h2',
                'function' => 'html',
            ],
        ]
    ]
);

new \Kirki\Field\Repeater(
    [
        'settings'     => 'contact_repeater',
        'label'        => esc_html__('Contacts item', 'stack'),
        'section'      => 'contact_section',
        'priority'     => 10,
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__('Contac item', 'stack'),
            'field' => 'contact_info',
        ],
        'button_label' => esc_html__('Add New Contact', 'stack'),
        'fields'       => [
            'contact_logo'    => [
                'type'        => 'select',
                'label'       => esc_html__('Contact logo', 'stack'),
                'default'     => 'lni-map-marker',
                'choices'     => [
                    'lni-map-marker' => esc_html__('map', 'kirki'),
                    'lni-envelope' => esc_html__('envelope', 'kirki'),
                    'lni-phone-handset' => esc_html__('phone', 'kirki'),


                ],
            ],
            'contact_info'    => [
                'type'        => 'text',
                'label'       => esc_html__('Contact Information', 'stack'),
                'default'     => '',
            ],

        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'contact_form', // For showing data in the frontend
        'label'    => esc_html__('Contact form shortcode', 'stack'),
        'section'  => 'contact_section',
        'default'  => esc_html__('[contact-form-7 id="87" title="Contact form 1"]', 'stack'),
        'priority' => 10,
        // 'transport' => 'postMessage',
        // 'js_vars'   => [
        //     [
        //         'element'  => '',
        //         'function' => 'html',
        //     ],
        // ]
    ]
);

// =======================
// Theme settings color 
// =======================

//colors
new \Kirki\Field\Color(
    [
        'settings'    => 'stack_background_color',
        'label'       => esc_html__('Background Color', 'stack'),
        'section'     => 'colors',
        'default'     => '#ffffff',
        'priority'    => 20,
    ]
);
new \Kirki\Field\Color(
    [
        'settings'    => 'stack_primery_color',
        'label'       => esc_html__('Primery Color', 'stack'),
        'section'     => 'colors',
        'default'     => '#3d60f4',
        'priority'    => 20,
    ]
);
// ===========================
// Typography section 
// ===========================

new \Kirki\Section(
    'typography_options',
    [
        'title'       => esc_html__('Typography', 'stack'),
        'priority'    => 52,
    ]
);
new \Kirki\Field\Typography(
    [
        'settings'    => 'stack_headings_font',
        'label'       => esc_html__('All heading text', 'kirki'),
        'section'     => 'typography_options',
        'priority'    => 10,
        'transport'   => 'auto',
        'default'     => [
            'font-family'     => 'Roboto',

        ],
        'output'      => [
            [
                'element' => 'h1,h2,h3,h4,h5,h6',
            ],
        ],
    ]
);


function stack_theme_css()
{
?>
    <style>
        body {
            background-color: <?php echo get_theme_mod('stack_background_color'); ?>
        }

        :root {
            --primery: <?php echo get_theme_mod('stack_primery_color'); ?>;
            --headingfont: <?php echo get_theme_mod('stack_headings_font'); ?>
        }
    </style>

<?php
}
add_action('wp_head', 'stack_theme_css');
// ================================================