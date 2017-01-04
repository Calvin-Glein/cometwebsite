<?php


function learningWordPress_resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');


/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/11/2016
 * Time: 1:43 AM
 */

function learningWordPress_setup()
{
    register_nav_menus(array(
        'Primary' => __('Primary')
    ));

    add_theme_support('post-thumbnails');

    //search bar eto mga bes -glenn
	add_theme_support('html5', array('search-form'));
}

add_action('after_setup_theme', 'learningWordPress_setup');

function pw_connection_types()
{
    // Make sure the Posts 2 Posts plugin is active.
    if (!function_exists('p2p_register_connection_type'))
        return;

    p2p_register_connection_type(array(
        'name' => 'working',
        'from' => 'members',
        'to' => 'project',
        'fields' => array(
            'role' => array(
                'title' => 'Role',
                'type' => 'select',
                'values' => array( 'Team Lead', 'Mentor', 'Programmer', 'Designer' )
            )
        )
    ));

    p2p_register_connection_type(array(
        'name' => 'researched',
        'from' => 'members',
        'to' => 'papers'
    ));
}

add_action('wp_loaded', 'pw_connection_types');

function custom_pagination($numpages = '', $pagerange = '', $paged = '')
{

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     *
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function.
     */
    $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'total' => $numpages,
        'current' => $paged,
        'show_all' => False,
        'end_size' => 1,
        'mid_size' => $pagerange,
        'prev_next' => True,
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
        'type' => 'plain',
        'add_args' => false,
        'add_fragment' => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
        echo $paginate_links;
        echo "</nav>";
    }

}

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}


?>