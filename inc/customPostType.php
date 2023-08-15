<?

add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'customPosts', [
		'label'  => null,
		'labels' => [
			'name'               => 'customPosts', // основное название для типа записи
			'singular_name'      => 'customPost', // название для одной записи этого типа
			'add_new'            => 'Добавить customPost', // для добавления новой записи
			'add_new_item'       => 'Добавление customPost', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование customPosts', // для редактирования типа записи
			'new_item'           => 'Новое customPosts', // текст новой записи
			'view_item'          => 'Смотреть customPost', // для просмотра записи этого типа.
			'search_items'       => 'Искать customPosts', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'customPosts', // название меню
		],
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		// 'capability_type'   => 'post',
		// 'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		'map_meta_cap'      => true, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}




?>