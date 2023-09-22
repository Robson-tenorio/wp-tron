<?php 
// Template Name: alimentos-e-bebidas
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

  </nav></header><script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/menu.js"></script>
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
            
            </div class="textoprodutoh"> Mercado - Alimentos e Bebidas
        </div>
            </div>
        
    </section>
<section class="container">


     <div class="container-menus">
        <ul class="text-cente menu-linha">
            <li><a  href="<?php bloginfo('url'); ?>/alimentos-e-bebidas" class="item active">Alimentos e Bebidas</a></li>
            <li><a  href="<?php bloginfo('url'); ?>/cozinha" >Cozinha</a></li>
            <li><a  href="<?php bloginfo('url'); ?>/geracao-de-espuma" >Geração de Espuma</a></li>
            <li><a  href="<?php bloginfo('url'); ?>/Institucional" >Institucional</a></li>
            <li><a  href="<?php bloginfo('url'); ?>/lavanderia" >Lavanderia</a></li>
        </ul>
        <script>
$(document).ready(function() {
  // Quando um item da lista for clicado
  $('.item').click(function() {
    // Remova a classe 'active' de todos os itens
    $('.item').removeClass('active');
    // Adicione a classe 'active' apenas ao item clicado
    $(this).addClass('active');
  });
});
</script>
    </div>
    <div class="row">
        <?php
        // Defina a slug da categoria desejada
        $categoria_slug = 'alimentos-e-bebidas'; // Substitua 'nome-da-categoria' pela slug da categoria desejada

        // Argumentos para a consulta WP_Query
        $args = array(
            'post_type' => 'mercado', // Substitua 'produto' pelo nome do seu tipo de post
            'posts_per_page' => -1, // Exibir todos os posts da categoria
            'tax_query' => array(
                array(
                    'taxonomy' => 'mercado_categoria', // Substitua 'categoria' pelo nome da sua taxonomia
                    'field' => 'slug',
                    'terms' => $categoria_slug,
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
        <!-- Conteúdo do post do produto -->
        <div class="card-relacinados col-xl-3 col-sm-3 col-12 efeito-suave1">
                
            <a class="" href="<?php the_permalink(); ?>">
                <img src="<?php the_field('imgem_mercado'); ?>">
                <div class=""><br>
                    <h3 id="title-produtos"><?php the_title(); ?></h3>
                    
                </div>
            </a>
            
            </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Restaurar dados originais do post
        else :
            ?>
        <p>Nenhum produto encontrado nesta categoria.</p>
        <?php endif;
        ?>
    </div>
</section><br>




<!-- produtos fim-->























<?php get_footer(); ?>