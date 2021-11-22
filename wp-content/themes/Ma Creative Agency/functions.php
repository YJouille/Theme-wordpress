<?php

function mesMenusWordpress()
{
    register_nav_menus(
        array(
            'header-menu' => __('Zone menu header'),
        )
        );
}

add_action('init', 'mesMenusWordpress');




function wpm_custom_post_type()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Tous nos projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('Nos projets'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tous nos projets'),
		'view_item'           => __('Voir les projets'),
		'add_new_item'        => __('Ajouter un nouveau projet'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Editer le projet'),
		'update_item'         => __('Modifier le projet'),
		'search_items'        => __('Rechercher un projet'),
		'not_found'           => __('projet non trouvé'),
		'not_found_in_trash'  => __('Non trouvée dans la corbeille à projet'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __('projets'),
		'description'         => __('Tout sur les projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest'			=> true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'projets'),

	);

	// On enregistre notre custom post type qu'on nomme ici "projets" et ses arguments
	register_post_type('projets', $args);
}

add_action('init', 'wpm_custom_post_type', 0);






///////////////////////////////////////////////////////zone de widget/////////////////////////////////////
function footer_widgets_init()
{

	register_sidebar(array(
				'name' => __('Footer Column 1 1', 'creativeagency'),
				'id' => 'footer_1',
				'before_widget' => '<div class="footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
	));
	register_sidebar(array(
				'name' => __('Footer Column 2 1', 'creativeagency'),
				'id' => 'footer_2',
				'before_widget' => '<div class="footer-widget">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
	));
	register_sidebar(array(
				'name' => __('Footer Column 1 2', 'creativeagency'),
				'id' => 'footer_3',
				'before_widget' => '<div class="footer-widget-bottom">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
	));
	register_sidebar(array(
				'name' => __('Footer Column 2 2', 'creativeagency'),
				'id' => 'footer_4',
				'before_widget' => '<div class="footer-widget-bottom">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
	));
}



add_action('widgets_init', 'footer_widgets_init');
