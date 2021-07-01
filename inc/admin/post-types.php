<?php 

/*  
*   ADD "PASLAUGA" POST TYPE 
*/

// add_action('init', 'create_post_type_paslauga');

// function create_post_type_paslauga(){
    
//     $labels = array(
//         'name' => 'Paslaugos',
//         'singular_name' => 'Paslauga',
//         'add_new' => 'Pridėti naują paslaugą',
//         'all_items' => "Visos paslaugos",
//         'add_new_item' => "Nauja paslauga",
//     );

//     $args = array(
//         'labels' => $labels,
//         'publish' => true,
//         'public' => true,
//         'has_archive' => true,
//         'publicly_queryable' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => __('paslaugos', 'bmaster')),
//         'hierarchical' => false,
//         'support' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail',
//             'revision',
//         ),
//         'taxonomies' => array('category'),
//         'menu_position' => 5,
//         'exclude_from_search' => false,
//     );

//     register_post_type('paslauga', $args);
// }

