<?php
    function jyunnn_files() {
        // wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
        // wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js');
        // wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js');
        wp_enqueue_style('tailwindcss', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css');
        wp_enqueue_style('Icon', 'https://cdn.lineicons.com/2.0/LineIcons.css');
        add_theme_support( 'title-tag' );
    };
    add_action('wp_enqueue_scripts', 'jyunnn_files');

    function jyunnn_wqn_fn() {
        // 設定 Title
        add_theme_support('title-tag');
    };
    // 設定主題後
    add_action('after_setup_theme', 'jyunnn_wqn_fn');