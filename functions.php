<?php

	function load_scripts(){
		wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array( 'jquery' ), '4.6.2', 'true' );

		wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array(), '4.6.2', 'all' );
		wp_enqueue_style( 'template', get_stylesheet_directory_uri() . '/style.css', array(), 'all' );
		
	}

	add_action( 'wp_enqueue_scripts', 'load_scripts' );

	// registra menu

	register_nav_menus(
		array(
			'my_main_menu' => 'Menu principal',
			'menu_footer' => 'Menu Footer'
		)
	);


function custom_post_type_noticias() {
	register_post_type('noticias', array(
		'label' => 'Noticias',
		'description' => 'Noticias',
		'public' => true,
		'show_ui' => true,		
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'noticias', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Noticias',
			'singular_name' => 'Noticia',
			'menu_name' => 'Noticias',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Noticias',			
			'edit' => 'Editar',
			'edit_item' => 'Editar Noticias',
			'new_item' => 'Novo Noticias',
			'view' => 'Ver Noticias',
			'view_item' => 'Ver Noticias',
			'search_items' => 'Procurar Noticias',
			'not_found' => 'Nenhuma Noticias Encontrado',
			'not_found_in_trash' => 'Nenhuma Noticias Encontrado no Lixo',
		)
	));
}


add_action('init', 'custom_post_type_noticias');




/* Criando post type produtos */

add_action( 'init', 'post_type_produtos' );
function post_type_produtos() {
  $labels = array(
    'name'               => 'Produtos',
    'singular_name'      => 'Produto',
    'add_new'            => 'Adicionar novo',
    'add_new_item'       => 'Adicionar novo produto',
    'edit_item'          => 'Editar produto',
    'new_item'           => 'Novo produto',
    'all_items'          => 'Todos os produto',
    'view_item'          => 'Visualizar produto',
    'search_items'       => 'Buscar produto',
    'not_found'          => 'Nenhum produto encontrado',
    'not_found_in_trash' => 'Nenhum produto encontrado na lixeira',
    'menu_name'          => 'Produtos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'artigos' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author' ),
  );
  register_post_type( 'produtos', $args );
}

/* Criando taxonomia bl_editoria */

add_action( 'init', 'taxonomy_categorias' );
function taxonomy_categorias() {
  register_taxonomy( 'categorias', array( 'produtos' ), 
    array(
      'hierarchical' => true,
      'label' => 'Categorias',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'Categorias' ),
    )
  );
}




function add_favorite_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('favorite-script', get_template_directory_uri() . '/js/favorite-script.js', array('jquery'), null, true);

    wp_localize_script('favorite-script', 'favorite_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'add_favorite_scripts');

function add_favorite() {
    $post_id = intval($_POST['post_id']);
    $favorites = isset($_COOKIE['favorite_posts']) ? json_decode($_COOKIE['favorite_posts']) : array();

    if (!in_array($post_id, $favorites)) {
        $favorites[] = $post_id;
        setcookie('favorite_posts', json_encode($favorites), time() + 3600 * 24 * 30, '/');
    }

    die();
}
add_action('wp_ajax_add_favorite', 'add_favorite');
add_action('wp_ajax_nopriv_add_favorite', 'add_favorite');


























// Registrando o tipo de postagem personalizado "Projetos"
function registrar_tipo_de_postagem_mercado() {
    $labels = array(
        'name'               => 'Mercado',
        'singular_name'      => 'Mercado',
        'menu_name'          => 'Mercado',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Mercado',
        'edit_item'          => 'Editar Mercado',
        'new_item'           => 'Novo MercadoProjeto',
        'view_item'          => 'Ver Mercado',
        'search_items'       => 'Buscar Mercado',
        'not_found'          => 'Nenhum Mercado encontrado',
        'not_found_in_trash' => 'Nenhum Mercado encontrado na lixeira',
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'categories' ),
        'taxonomies'          => array( 'projeto_categoria' ), // Habilita categorias personalizadas
    );
    
    register_post_type( 'mercado', $args );
}
add_action( 'init', 'registrar_tipo_de_postagem_mercado' );

// Adicionar uma categoria personalizada ao tipo de postagem "Projetos"
function adicionar_categoria_de_mercado() {
    $labels = array(
        'name'                       => 'Categorias',
        'singular_name'              => 'Categoria',
        'menu_name'                  => 'Categorias',
        'edit_item'                  => 'Editar Categoria',
        'update_item'                => 'Atualizar Categoria d',
        'add_new_item'               => 'Adicionar Nova Categoria ',
        'new_item_name'              => 'Nome da Nova Categoria d',
        'parent_item'                => 'Categoria de Projeto Pai',
        'parent_item_colon'          => 'Categoria de Projeto Pai:',
        'search_items'               => 'Buscar Categorias de Projetos',
        'popular_items'              => 'Categorias de Projetos Populares',
        'separate_items_with_commas' => 'Separar categorias com vírgulas',
        'add_or_remove_items'        => 'Adicionar ou Remover Categorias',
        'choose_from_most_used'      => 'Escolher entre as mais usadas',
        'not_found'                  => 'Nenhuma categoria encontrada',
    );

    $args = array(
       'hierarchical' => true,
      'label' => 'Categorias',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'Categorias' ),
    );

    register_taxonomy( 'mercado_categoria', 'mercado', $args );
}
add_action( 'init', 'adicionar_categoria_de_mercado' );























function enqueue_custom_scripts() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


	?>

