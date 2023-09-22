<?php 
// Template Name: produtos
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
			
			</div class="textoprodutoh"> Produtos
		</div>
			</div>
		
	</section>

<br>
<section>
    <div class="container">
    <div class="row heade ">
<div class="heade textopesqueisa">
            <ul class="radio-list">
  <li>
    <label class="radio-label">
      
      
    </label>
    <a class="textopesqueisa" >Pesquise por:</a>
  </li>

  <li>
    <label class="radio-label ">
      <a href="<?php bloginfo('url'); ?>/mercados">  <input type="radio"  style="pointer-events:none;"></a>
      
    </label>
    <a ><b>Mercado</b></a>
  </li>

  <li>
    <label class="radio-label">
      <a href="<?php bloginfo('url'); ?>/produtos">  <input type="radio" checked style="pointer-events:none;"></a>
      
    </label>
    <a ><b>Linha de produto</b></a>
  </li>
</ul>
        </div>

</div>
</div>
</section>

	<!-- produtos--> 
			<main class="container">
    <div class="titulo">
        <h2></h2>
    </div>


    <div class="filtragem container-interna">

        



        <nav class="menu">
        
           <ul class="categorias"><br><br>
        
        

        </ul>
<ul class="categorias" >
    <li id="btShowAll" class="item active menu">TODOS </li>
  
  
  <?php

         
            $terms = get_terms( array(
                'taxonomy' => 'categorias',
                'hide_empty' => true
            ) ); // lista categorias com atributo personalizado (data-category)

            foreach($terms as $cat) { if($cat->cat_name != 'Uncategorized') : ?>
        <li data-category="<?php echo strtolower($cat->slug); ?>"> <a class="item"> <?php echo $cat->name; ?> </a></li>
        <?php endif; } ?>
</ul>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        </nav>

    </div>
    
    <br><br><br>

    <section class="listagem-projetos" id="">

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        "posts_per_page" => -1, // Number of posts per page
        "post_type" => "produtos",
        "order" => "ASC",
        "paged" => $paged

    );
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- (carde data-category) -->
        <a href="<?php the_permalink(); ?>" class="projeto-card" data-category="<?php
        $category_detail = get_the_terms(get_the_ID(), 'categorias');
        foreach ($category_detail as $cd) {
            echo strtolower($cd->slug);
        }
        ?>">

            <div class="product-list col-xl-12 col-sm-12 col-12">
                <div class="product efeito-suave">
                    <img class="img-produto card-img-top" id="imgs" src="<?php the_field('imagem'); ?>" class="rounded mx-auto d-block">

                    <div class="card-body">
                        <h5 class="card-title" id="title-produtos"><?php the_title(); ?></h5>
                    </div>
                </div>
            </div>
        </a>
    <?php endwhile; ?>

        <!-- Pagination -->

    <?php else : ?>
        <p><?php _e('No projects found.'); ?></p>
    <?php endif; ?>

    <br><br><br>
</section>
<div class="pagination-wrapper">
    <div class="pagination-centered">
        <?php
        echo paginate_links(array(
            'total' => $the_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'prev_text' => '<', // Define o texto para o link "anterior" como vazio
            'next_text' => '>', // Define o texto para o link "próximo" como vazio
        ));
        ?>
    </div>
</div>
</div>
</main><br><br><br>

<script>
    // Selecionando os botões de cada categoria, botão "todos" e os cards dos projetos
    const categoriesList = document.querySelectorAll('.categorias li');
    const btShowAll = document.getElementById('btShowAll');
    const projectCards = document.querySelectorAll('.projeto-card');

    function showAll() {
        for (i = 0; i < projectCards.length; i++) {
            projectCards[i].classList.remove('hide');
        }
    }

    // Recebe a categoria pelo data-category do botão clicado e então mostra apenas os cards com o mesmo data-category
    function showSelectedCategory(categorias) {
        for (i = 0; i < projectCards.length; i++) {
            const cardCategories = projectCards[i].dataset.category.split(' ');
            if (!cardCategories.includes(categorias)) {
                projectCards[i].classList.add('hide');
            } else {
                projectCards[i].classList.remove('hide');
            }
        }
    }

    // Remove a classe active de todos os itens do menu e aplica apenas no elemento selecionado
    function handleActive(e) {
        btShowAll.classList.remove('active');
        for (i = 0; i < categoriesList.length; i++) {
            categoriesList[i].classList.remove('active');
        }

        e.target.classList.add('active');
    }

    btShowAll.addEventListener('click', showAll);
    btShowAll.addEventListener('click', handleActive);
    for (i = 1; i < categoriesList.length; i++) {
        categoriesList[i].addEventListener('click', function () {
            showSelectedCategory(this.dataset.category);
        });
        categoriesList[i].addEventListener('click', handleActive);
    }
</script>




<!-- produtos fim-->





















<?php get_footer(); ?>