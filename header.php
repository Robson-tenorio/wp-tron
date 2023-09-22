<!DOCTYPE html>
<html lang="pt-br">
    <head>
      	<meta charset="UTF-8">
      	<meta name="viewport" content="width=device-width">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<title><?php bloginfo('name'); ?>  <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
        <meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">
        <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.default.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <!-- jQuery 1.8 or later, 33 KB -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Fotorama from CDNJS, 19 KB -->
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

<?php
// Obtém o título da página
$pageTitle = wp_title('', false);

// Verifica se o título da página está vazio
if (!empty($pageTitle)) {
    // Adiciona um hífen antes do título da página
    $titleWithHyphen = ' - ' . $pageTitle;
    echo '<title>' . $titleWithHyphen . '</title>';
} else {
    echo '<title>Sem título</title>';
}
?>

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>


<!--<div class="container-fluid full">

	<header id="header">
          <a href="/">
              <img id="logos" src="<?php echo get_template_directory_uri(); ?>/img/logotron.png" id="logos" class="d-block w-100" alt="Logo">
            </a>
  <nav id="nav">
    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburger"></span>
      </button>
    <ul id="menu" role="menu">
      
      <li> <a href="<?php bloginfo('url'); ?>">HOME</a> </li>
      <li> <a href="<?php bloginfo('url'); ?>/a-tron">A TRON</a> </li>
      <li> <a href="<?php bloginfo('url'); ?>/produtos">PRODUTOS</a> </li>
      <li> <a href="<?php bloginfo('url'); ?>/servicos">SERVIÇOS</a> </li>
      <li> <a href="<?php bloginfo('url'); ?>/baixe-o-catalogo">BAIXE O CATÁLOGO</a> </li>
      <li> <a href="<?php bloginfo('url'); ?>/fale-conosco">FALE CONOSCO</a> </li>

    </ul>

  </nav>
<div class="  text-right">
            

              <ul>
                 <li class="imagens"><a href="#" target="_blank" title="Linkdin"><img src="<?php echo get_template_directory_uri(); ?>/img/icons-linkdin.png" > </a> </li>
                 <li class="imagens"><a href="#" target="_blank" title="Instagram"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons-instagram.png" > </a></li>
                 <li class="imagens"><a href="#" target="_blank" title="Youtube"><img src="<?php echo get_template_directory_uri(); ?>/img/icons-youtube.png" > </a> </li>    
                              
             </ul>

          </div>
-->

	<!--	<section class="menu-area">
			 <div class="container">
        <div class="row">
          <div class="col-xl-2 col-sm-4 col-4 ">
            <a href="/">
              <img id="logos" src="<?php echo get_template_directory_uri(); ?>/img/logotron.png"  alt="Logo">
            </a>
          </div>
          <div class="  header_menu col-xl-8 col-sm-6 col-8">
             <?php wp_nav_menu( array('theme_locations' => 'my_main_menu')); ?>  
             <header id="header">
<nav id="nav">
    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburger"></span>
      </button>
    <ul id="menu" role="menu">
      
      <li> <a id="aa" href="<?php bloginfo('url'); ?>">HOME</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/a-tron">A TRON</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/produtos">PRODUTOS</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/servicoa">SERVIÇOS</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/baixe-o-catalogo">BAIXE O CATÁLOGO</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/fale-conosco">FALE CONOSCO</a> </li>

    </ul>

  </nav></header>
          </div>          
          <div class=" col-xl-2 col-sm-5 col-5 d-none d-md-block text-right">
            

              <ul>
                 <li class="imagens"><a href="#" target="_blank" title="Linkdin"><img src="<?php echo get_template_directory_uri(); ?>/img/icons-linkdin.png" > </a> </li>
                 <li class="imagens"><a href="#" target="_blank" title="Instagram"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons-instagram.png" > </a></li>
                 <li class="imagens"><a href="#" target="_blank" title="Youtube"><img src="<?php echo get_template_directory_uri(); ?>/img/icons-youtube.png" > </a> </li>    
                              
             </ul>

          </div>
        </div>
      </div> 
		</section> -->
		
	</header>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/menu.js"></script>
</div>

