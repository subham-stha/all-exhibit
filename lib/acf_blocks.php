<?php
function ae_theme_setup()
{
    //Add support for editor styles
    // add_theme_support('editor-styles');
    //  add_editor_style('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    // add_editor_style('assets/css/style.css'); 
    // add_editor_style('assets/css/addon.css'); 
}
add_action('after_setup_theme', 'ae_theme_setup');

// Gutenberg Pindrop Block Category
function custom_category($categories, $post)
{
    return array_merge(
        $categories,
        [
            [
                'slug' => 'allexhibit-blocks',
                'title' => __('All Exhibit Blocks', 'allexhibitf-blocks'),
            ],
        ]
    );
}
add_filter('block_categories', 'custom_category', 10, 2);

//Render Callback to call ACF block files

function theme_acf_block_render($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    //include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("/template-parts/block/{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/{$slug}.php"));
    }
}

//register ACF blocks
add_action('acf/init', 'theme_acf_blocks_init');
function theme_acf_blocks_init()
{

    // Check function exists.
    if (function_exists('acf_register_block')) {

        // Register all ACF block.
        acf_register_block(array(
            'name'              => 'hero-block',
            'title'             => __('Hero Block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('Hero banner', 'hero')
        ));
        acf_register_block(array(
            'name'              => 'partner-block',
            'title'             => __('Partners Block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('Partner block')
        ));
        acf_register_block(array(
            'name'              => 'ctatext-block',
            'title'             => __('CTA Text Block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('CTA with text')
        ));
        acf_register_block(array(
            'name'              => 'service-block',
            'title'             => __('Services Block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('AllEx services', 'services we offer')
        ));
        acf_register_block(array(
            'name'              => 'ex-solution-block',
            'title'             => __('Ex solution block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('AllEx services', 'solution block')
        ));
        acf_register_block(array(
            'name'              => 'latest-project-block',
            'title'             => __('latest project block'),
            'render_callback'   => 'theme_acf_block_render',
            'category'          => 'allexhibit-blocks',
            'icon'              =>  'slides',
            'keywords'          =>  array('AllEx services', 'latest project block')
        ));
    }
}
