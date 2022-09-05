<?php
new \Kirki\Panel(
    'stack_pannel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Stack Panel', 'stack'),
        'description' => esc_html__('Stack Theme options are here.', 'stack'),
    ]
);
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
    ]
);
new \Kirki\Field\Image(
    [
        'settings'    => 'banner_image',
        'label'       => esc_html__('Image Control (URL)', 'kirki'),
        'description' => esc_html__('The saved value will be the URL.', 'kirki'),
        'section'     => 'banner_section',
        'default'     => '',
    ]
);
