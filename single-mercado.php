<?php 
// Template Name: Single noticias
get_header(); ?>


<section class="menuarea cor">
       <div class="container">
        <div class="row">
          <div class="col-xl-2 col-sm-2 col-4 ">
            <a href="<?php bloginfo('url'); ?>/home">
              <img id="logos" src="<?php echo get_template_directory_uri(); ?>/img/logotron.png"  alt="Logo">
            </a>
          </div>
          <div class="  header_menu col-xl-8 col-sm-8 col-8">
             <!--<?php wp_nav_menu( array('theme_locations' => 'my_main_menu')); ?>  -->
             <header id="header">
<nav id="nav">
    
    <ul id="menu" role="menu">
      
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/home">HOME</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/a-tron">A TRON</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/produtos">PRODUTOS</a> </li>
      <!--<li> <a id="aa" href="<?php bloginfo('url'); ?>/servicos">SERVIÇOS</a> </li>-->
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/baixe-o-catalogo">BAIXE O CATÁLOGO</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/fale-conosco">FALE CONOSCO</a> </li>

    </ul>

  </nav>




</header><script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/menu.js"></script>
          

          </div>    

                
          <div class="col-xl-2 col-sm-2 col-5 d-none d-xl-block text-right">
            

                <ul>
                 <li class="imagens"><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFxYtJjSPHXuwAAAYpHkDI4vYV-9fb3yPA0SY5-_yNF6uFCbMO3G3GwTegp5TtEazyVYwR1IXtoAKqM1imlJmowTRgqrRgryOd3q635GaubvlSUA8TIvBjUutpj2aYqSmZp4yc=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ftron-solu%25C3%25A7%25C3%25B5es" target="_blank" title="Linkdin"><i class="fa-brands fa-linkedin-in"></i> </a> </li>
                 <li class="imagens"><a href="https://www.instagram.com/tronsolucoes/" target="_blank" title="Instagram"> <i class="fa-brands fa-instagram"></i> </a></li>
                 <li class="imagens"><a href="https://www.youtube.com/channel/UCvCxSDi-SqigMFm0UKrajiQ" target="_blank" title="Youtube"><i class="fa-brands fa-youtube"></i> </a> </li>    
                              
             </ul>

          </div>
        </div>
      </div> 
    </section>
	<section class=" menu-area-azul" >
		<div class="container">
		<div class="row col-xl-12">
			



<section class=" menu-area-azul" >
    <div class="container">
    <div class="row col-xl-12">
      
      </div class="textoprodutoh"> Mercado
    </div>
      </div>

  </section>


  <!-- noticia--> 
      <section class="sobre " id="a-tron">
        <div class="container ">
     <h2 id="title_produto"><?php the_title(); ?></h2>
     
     
            <div class="row">

        <div class="col-xl-6 col-sm-12 col-12"> 
<div class="breadcrumbs">
   <?php
echo '<a href="' . home_url() . '">HOME</a> / ';

if (is_category() || is_single()) {
    the_category(' / ');
    if (is_single()) {
        echo ' <a href="' . get_permalink(get_page_by_path('mercados')) . '">MERCADO</a> / ';
        echo '' . get_the_title() . '';
    }
} elseif (is_page()) {
    echo '<>' . get_the_title() . '</>';
}
?>
</div>

<div class="fotorama data-thumb" ><br>
  <a href="<?php the_field('imgem_mercado'); ?>" data-thumb="<?php the_field('imgem_mercado'); ?>" width="110" height="80"></a><br>
  <a href="<?php the_field('imgem2'); ?>" data-thumb="<?php the_field('imgem2'); ?>" width="110" height="80"></a>
  <a href="<?php the_field('imgem3'); ?>" data-thumb="<?php the_field('imgem_3'); ?>" width="110" height="80"></a>
  <a href="<?php the_field('imgem4'); ?>" data-thumb="<?php the_field('imgem4'); ?>" width="110" height="80"></a>
  <a href="<?php the_field('imgem5'); ?>" data-thumb="<?php the_field('imgem5'); ?>" width="110" height="80"></a>
  
</div>

<script>
  
  $('.fotorama').fotorama({
  width: 700,
  maxwidth: '100%',
  
  /*ratio: 14/14,*/
  
  allowfullscreen: true,
  nav: 'thumbs'
});
</script>

         </div>
         
        <div class="col-xl-6 col-sm-12 col-12 ">            
            
            <h4 id="texto_detalhe"><?php the_field('texto_do_mercado'); ?></h4>
            
            
            <a href="<?php the_field('downlod_do_catalogos'); ?>" target="_blank"><button class="botao-imagem-gradiente">
  <img src="<?php echo get_template_directory_uri(); ?>/img/download.png" alt="Download"> <b>Download do Arquivo</b></button></a>
            <br><br>
            <h2 id="title_compartilhar">COMPARTILHAR</h2>
            <div class="social-sharing">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"> <img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" ></a>

    <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>&text=<?php the_title(); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/tweet.png" ></a>
    <!--<a href="https://www.google.com/maps/place/<?php echo esc_url(get_permalink()); ?>&title=<?php the_title(); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/g+.png" ></a>-->
    <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20<?php echo esc_url(get_permalink()); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" ></a>
</div>

         </div>
</div><br><br><br><br>
</div>

</section>
<section class="container">
    <h2 id="textoprodutoh55">Produtos Relacionados</h2>
    <div class="row">
        <?php
        // Obtém as categorias do produto atual
        $product_categories = get_the_terms(get_the_ID(), 'mercado_categoria');

        if ($product_categories && !is_wp_error($product_categories)) {
            // Crie um array de termos de categoria para usar na consulta
            $category_ids = array();
            foreach ($product_categories as $product_category) {
                $category_ids[] = $product_category->term_id;
            }

            $args = array(
                'post_type' => 'mercado',
                'orderby' => 'rand',
                'posts_per_page' => 4,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'mercado_categoria',
                        'field' => 'id',
                        'terms' => $category_ids,
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
            

            <div class="card-relacinados col-xl-3 col-sm-3 col-12 efeito-suave1">
                
            <a class="" href="<?php the_permalink(); ?>">
                <img src="<?php the_field('imgem_mercado'); ?>">
                <div class=""><br>
                    <h3 id="title-produtos"><?php the_title(); ?></h3>
                    
                </div>
            </a>
            
            </div>
            
        <?php endwhile;
            endif;
        } else {
            echo '<p>Nenhuma categoria encontrada.</p>';
        }
        ?>
    </div>
</section>
<br>
<br>












<!-- noticias fim-->



<?php get_footer(); ?>