<?php
/**
 * metawin-theme functions and definitions
 */

function enqueue_custom_theme_style()
{
    wp_enqueue_style("custom-theme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "enqueue_custom_theme_styles");

// added logo section to the customiser
function mytheme_customizer_setup()
{
    add_theme_support("custom-logo");
}
add_action("after_setup_theme", "mytheme_customizer_setup");

// Register primary navigation menu
function register_primary_menu()
{
    register_nav_menus([
        "primary_menu" => "Primary Menu",
    ]);
}
add_action("after_setup_theme", "register_primary_menu");

// Register custom fields using ACF Pro
function mytheme_acf_init()
{
    if (function_exists("acf_register_block_type")) {
        acf_register_block_type([
            "name" => "my-custom-block",
            "title" => __("My Custom Block"),
            "description" => __("A custom block for Metawin theme."),
            "render_template" => "template-parts/blocks/my-custom-block.php",
            "category" => "formatting",
            "icon" => "admin-comments",
            "keywords" => ["custom", "block"],
        ]);
    }
}
add_action("acf/init", "mytheme_acf_init");

function create_casino_hotels_post_type()
{
    register_post_type("casino_hotels", [
        "labels" => [
            "name" => __("Casino Hotels"),
            "singular_name" => __("Casino Hotel"),
        ],
        "public" => true,
        "has_archive" => true,
        "supports" => ["title", "custom-fields"],
    ]);
}
add_action("init", "create_casino_hotels_post_type");
