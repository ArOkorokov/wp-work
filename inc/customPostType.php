<?

add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'customposts', [
		'label'  => null,
		'labels' => [
			'name'               => 'teamslider',
			'singular_name'      => 'teamslider',
			'add_new'            => 'add teamslide',
			'add_new_item'       => 'Добавление teamslide', 
			'edit_item'          => 'Редактирование teamslide', 
			'new_item'           => 'New teamslide', 
			'view_item'          => 'Смотреть teamslide', 
			'search_items'       => 'Искать teamslide',
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Team slides', 
		],
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true, 
		'show_in_menu'           => null, 
		
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'map_meta_cap'        => true, 
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','thumbnail','excerpt'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );


	
	register_post_type( 'bakery_gallery', [
		'label'  => null,
		'labels' => [
			'name'               => 'bakery_gallery', // основное название для типа записи
			'singular_name'      => 'bakery_gallery', // название для одной записи этого типа
			'add_new'            => 'Добавить bakery_gallery', // для добавления новой записи
			'add_new_item'       => 'Добавление bakery_gallery', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование bakery_gallery', // для редактирования типа записи
			'new_item'           => 'Новое bakery_gallery', // текст новой записи
			'view_item'          => 'Смотреть bakery_gallery', // для просмотра записи этого типа.
			'search_items'       => 'Искать bakery_gallery', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Bakery pictures', // название меню
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


	register_post_type( 'bakery_slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'bakery_slider',
			'singular_name'      => 'bakery_slide', 
			'add_new'            => 'Добавить bakery_slide', 
			'add_new_item'       => 'Добавление bakery_slide', 
			'edit_item'          => 'Редактирование bakery_slider',
			'new_item'           => 'Новое bakery_slide',
			'view_item'          => 'Смотреть bakery_slide',
			'search_items'       => 'Искать bakery_slide',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Bakery slider',
		],
		'description'            => '',
		'public'                 => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'map_meta_cap'        => true, 
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','custom-fields','thumbnail'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}




?>