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
</header>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/menu.js"></script>
                 
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
			</div class="textoprodutoh"> NOTÍCIAS</div>
			</div>
    </div>
	</section>


<div class="container"><br>
  <div class="row"><h5 id="title-noticia"><?php the_title(); ?></h5><br>
    <div class="breadcrumbs" id="breadcrumbs">
   <?php
echo '<a href="' . home_url() . '">HOME</a> / ';

if (is_category() || is_single()) {
    the_category(' / ');
    if (is_single()) {
        echo ' <a href="' . get_permalink(get_page_by_path('produtos')) . '"><!--PRODUTOS--></a>  ';
        echo '' . get_the_title() . '';
    }
} elseif (is_page()) {
    echo '<>' . get_the_title() . '</>';
}
?>
</div>
    <div class="col-xl-9 col-sm-9 col-12">
    
    <img src="<?php the_field('foto_noticia'); ?>" id="imgemss"></a>
    <h2 id="text-noticia"><?php the_content(); ?></h2>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 box-noticia">
        <p>Outras notícias</p>
        <?php
        $args = array (
          'post_type' => 'noticias',
          'posts_per_page' => 10,
          'order' => 'ASC'
        );
        $the_query = new WP_Query ( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="" id="card-titl" id="card-title" ><h2>• <?php the_title(); ?></h2></a>


        <?php endwhile; else: endif; ?>
        <h2 id="noticia_compartilhar">COMPARTILHAR</h2>
            <div class="social-sharing" id="positi">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"> <img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" ></a>
    <a href="https://www.instagram.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank">
    <img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" >
</a>
    <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>&text=<?php the_title(); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/tweet.png" ></a>
    <!--<a href="https://www.google.com/maps/place/<?php echo esc_url(get_permalink()); ?>&title=<?php the_title(); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/g+.png" ></a>-->
    <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20<?php echo esc_url(get_permalink()); ?>" target="_blank"><img class="imagen" src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" ></a>
</div>
      </div>

   </div>

</div>



<!-- noticias fim-->



<?php get_footer(); ?>