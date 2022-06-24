<?php

function _themename_sidebar_widgets()
{
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => esc_html__('Primary Sidebar', '_themename'),
        'description' => esc_html__('This sidebar appears in the blog posts page.', '_themename'),
        'before_widget' => '<section id="%1$s" class="c-sidebar-widget u-margin-bottom-20 %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}

register_sidebar(array(
    'id' => 'footer-sidebar-1',
    'name' => esc_html__('Footer Widgets Column 1', '_themename'),
    'description' => esc_html__('Footer widgets', '_themename'),
    'before_widget' => '<section id="%1$s" class="c-footer-widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
));

register_sidebar(array(
    'id' => 'footer-sidebar-2',
    'name' => esc_html__('Footer Widgets Column 2', '_themename'),
    'description' => esc_html__('Footer widgets', '_themename'),
    'before_widget' => '<section id="%1$s" class="c-footer-widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
));

register_sidebar(array(
    'id' => 'footer-sidebar-3',
    'name' => esc_html__('Footer Widgets Column 3', '_themename'),
    'description' => esc_html__('Footer widgets', '_themename'),
    'before_widget' => '<section id="%1$s" class="c-footer-widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
));

add_action('widgets_init', '_themename_sidebar_widgets');
