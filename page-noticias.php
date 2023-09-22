<?php 
// Template Name: noticias
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
			
			</div class="textoprodutoh"> Fale Conosco
		</div>
			</div>
		
	</section>


	<!-- noticia--> 



<div class="contaner">
  
  <div class="row">
    

  </div>
</div>

  

<section class="sobre " id="a-tron">
        <div class="container ">
                   
            <div class="row">
<?php
  $args = array (
    'post_type' => 'noticias',
    'posts_per_page' => 2,
    'order' => 'ASC'
  );
  $the_query = new WP_Query ( $args );
?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-xl-6 col-sm-6 col-1 ">

    <div class="card" id="card">
      <div class="card-body">
        <img src="<?php the_field('foto_noticia'); ?>" class="rounded mx-auto d-block">

        
        <h5 class="card-title" id="card-title"><?php the_title(); ?></h5>
        <p class="card-text " id="card-text"><?php the_content(); ?></p>

        <a href="<?php the_permalink(); ?>" class="btn btn-link " id="btncat3">Ver Mais <i class="fa fa-arrow-right"></i> </a>
      </div>
    </div><br><br>
  </div>

  
<?php endwhile; ?>

<?php else: endif; ?>

<div class="blog-pagination">
  <?php next_posts_link( 'Mais Antigo' ); ?> <?php previous_posts_link( 'Mais Novo' ); ?>

</div>

</div>
</div>
</section>		


<!-- noticias fim-->



<?php get_footer(); ?>