
<?php 
// Template Name: home
get_header(); ?>
	<div class="content-area" >
		
			<section class="slider">

       <!-- menu --> 
	<section class="menu-area">
       <div class="container">
        <div class="row">
          <div class="col-xl-2 col-sm-2 col-4 ">
            <a href="<?php bloginfo('url'); ?>/home">
              <img id="logos" src="<?php echo get_template_directory_uri(); ?>/img/logo-tron.png"  alt="Logo">
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
          <div class=" col-xl-2 col-sm-2 col-5 d-none d-xl-block text-right">
            

              <ul>
                 <li class="imagens"><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFxYtJjSPHXuwAAAYpHkDI4vYV-9fb3yPA0SY5-_yNF6uFCbMO3G3GwTegp5TtEazyVYwR1IXtoAKqM1imlJmowTRgqrRgryOd3q635GaubvlSUA8TIvBjUutpj2aYqSmZp4yc=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ftron-solu%25C3%25A7%25C3%25B5es" target="_blank" title="Linkdin"><i class="fa-brands fa-linkedin-in"></i> </a> </li>
                 <li class="imagens"><a href="https://www.instagram.com/tronsolucoes/" target="_blank" title="Instagram"> <i class="fa-brands fa-instagram"></i> </a></li>
                 <li class="imagens"><a href="https://www.youtube.com/channel/UCvCxSDi-SqigMFm0UKrajiQ" target="_blank" title="Youtube"><i class="fa-brands fa-youtube"></i> </a> </li>    
                              
             </ul>

          </div>
        </div>
      </div> 
    </section>
    
    <!-- fim do menu -->
<section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img  src="<?php echo get_template_directory_uri(); ?>/img/slider/slider.png" class="mobile-image d-block w-100" alt="...">
     <div class="carousel-caption" id="carousel-caption">
        <h5 class="tituloh5" id="tituloh5">UMA NOVA ERA SE INICIA<br> COM TRANSFORMAÇÃO</h5>
        <p class="titulop " id="titulop">SOLUÇÕES DE TECNOLOGIA PARA O <BR>MERCADO DE HIGIENE PROFISSIONAL<BR><BR>
   
   <a href="<?php bloginfo('url'); ?>/produtos" class="btns" id="" >NOSSOS PRODUTOS</a>
   </p>
  </div>
    </div>
    <div class="carousel-item">
      <img  src="<?php echo get_template_directory_uri(); ?>/img/slider/slider.png" class="mobile-image d-block w-100" alt="...">
     <div class="carousel-caption" id="carousel-caption">
        <h5 class="tituloh5" id="tituloh5">UMA NOVA ERA SE INICIA<br> COM TRANSFORMAÇÃO</h5>
        <p class="titulop " id="titulop">SOLUÇÕES DE TECNOLOGIA PARA O <BR>MERCADO DE HIGIENE PROFISSIONAL<BR><BR>
   
   <a href="<?php bloginfo('url'); ?>/produtos" class="btns" id="" >NOSSOS PRODUTOS</a>
   </p>
  </div>
    </div>

    <div class="carousel-item">
      <img  src="<?php echo get_template_directory_uri(); ?>/img/slider/slider.png" class="mobile-image d-block w-100" alt="...">
     <div class="carousel-caption" id="carousel-caption">
        <h5 class="tituloh5" id="tituloh5">UMA NOVA ERA SE INICIA<br> COM TRANSFORMAÇÃO</h5>
        <p class="titulop " id="titulop">SOLUÇÕES DE TECNOLOGIA PARA O <BR>MERCADO DE HIGIENE PROFISSIONAL<BR><BR>
   
   <a href="<?php bloginfo('url'); ?>/produtos" class="btns" id="" >NOSSOS PRODUTOS</a>
   </p>
  </div>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="fas fa-chevron-left" id="fas" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="fas fa-chevron-right" id="fas"  aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


				
<script>
$(window).on('resize load', function () {
    if ($(window).width() < 576) {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/home-mobile.png');
    } else {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/slider/slider.png');
    } 
}); </script>

<script>
$(window).on('resize load', function () {
    if ($(window).width() < 576) {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/home-mobil.png');
    } else {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/slider/slide.png');
    } 
}); </script>
<script>
$(window).on('resize load', function () {
    if ($(window).width() < 576) {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/home-mobil.png');
    } else {
        $('.carousel-inner .mobile-image').attr('src', '<?php echo get_template_directory_uri(); ?>/img/slider/slide.png');
    } 
}); </script>

			</section>





      <!-- produtos destaque --> 
			<section class="text-center textoprodutoh5 " id="slider">

        <p class=" text-center" id="textoprodutoh55">PRODUTOS EM DESTAQUE</p>
        <div class="container">
          

           <!-- <div class="slider">
            <div class="owl-carousel ">

              <div class="slider-card">



                 <div class="d-flex justify-content-center aling-items-center mb-4">
                 <img src="<?php echo get_template_directory_uri(); ?>/lib/img/01.png"> 
                 </div>
                 <h5 class="text-cente">BOMBA ECOMINI BOMBA MANUAL PARA PIAS
                  
                 </h5>
                   <p class="text-cente-p">SAIBA MAIS</p>
               </div>



              <div class="slider-card">

                 <div class="d-flex justify-content-center aling-items-center mb-4">
                 <img src="<?php echo get_template_directory_uri(); ?>/lib/img/02.png"> 
                 </div>
                 <h5 class="text-cente">COMANDO DE AUTOMAÇÃO DE PERIFÉRICOS</h5>
                   <p class="text-cente-p">SAIBA MAIS</p>
               </div>


              <div class="slider-card">

                 <div class="d-flex justify-content-center aling-items-center mb-4">
                 <img src="<?php echo get_template_directory_uri(); ?>/lib/img/01.png"> 
                 </div>
                 <h5 class="text-cente">BOMBA ECOMINI BOMBA MANUAL PARA PIAS</h5>
                 <p class="text-cente-p">SAIBA MAIS</p>
                   
               </div>
                      
             
              
            </div>
            <div class="navegacao">
                <button id="botao_anterior" > <i class="fas fa-chevron-left apagar"></i> </button>
                <button id="botao_proximo" ><i class="fas fa-chevron-right apagar"></i></button>

              </div>

            </div>
            <div class="text-cente">
             <button id="button" ><a href="<?php bloginfo('url'); ?>/home" class=" btnss" >VER TODOS OS PRODUTOS</a></button>
             

              </div> 
          </div>-->


<div class="slider">
    <div class="owl-carousel">
        <?php
        $args = array(
            "posts_per_page" => "-1",
            "categorias" => "destaque",
            "post_type" => "produtos"
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="slider-card">
                <a href="<?php the_permalink(); ?>" class="projeto-card" data-category="<?php
                $category_detail = get_the_terms(get_the_ID(), 'categorias');
                foreach ($category_detail as $cd) {
                    echo strtolower($cd->slug);
                }
                ?>">
                    <div class="d-flex justify-content-center aling-items-center mb-4">
                        <img src="<?php the_field('imagem'); ?>" class="img-produto card-img-top">
                    </div>
                    <h5 class="text-center"><?php the_title(); ?></h5>
                    <p class="text-center-p"> SAIBA MAIS</p>
                </a>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="navegacao">
        <button id="botao_anterior"> <i class="fas fa-chevron-left apagar"></i> </button>
        <button id="botao_proximo"><i class="fas fa-chevron-right apagar"></i></button>
    </div>
    <div class="text-center"><br>
        <button id="button"><a href="<?php bloginfo('url'); ?>/produtos" class="btnss">VER TODOS OS PRODUTOS</a></button>
    </div>
</div>








            </div>
            <div class="text-cente">
             
             

              </div> 
          </div>



       
    
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
      

   
    <script type="text/javascript">
       $(document).ready(function(){

        var owl = $('.owl-carousel');

        $(document).ready(function() {
  // Seu código Owl Carousel aqui
  owl.owlCarousel({
    loop: true,
    margin: -10,
    autoplay: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    nav: false,
    navText: ['Anterior', 'Próximo'],
    center: true,
    responsive: {
      0: {
        items: 1
      },
      360: {
        items: 1
      },
      600: {
        items: 3
      },
      860: {
        items: 3
      },
    }
  });
});

        $("#botao_anterior").on('click', function(){

            owl.trigger('prev.owl.carousel');

        });

         $("#botao_proximo").on('click', function(){

            owl.trigger('next.owl.carousel');

        });

       });
    </script>

  </section>

<br>

 


            </div>
          </div>
        </div>
        </section>
      <!-- fim produtos destaque --> 




			<section class=" text-center" >

<div class="container-flui" > <br>
  <p class=" text-center" id="textoprodutoh55">MERCADOS QUE A TRON ATENDE</p>
  <div class="row" >
       
    


        <?php if(have_rows('mercado')): while(have_rows('mercado')) : the_row(); ?>

         <div class="image-container col-xl-3 col-sm-6 col-12">
            <img src=" <?php the_sub_field('foto_mercado'); ?>" alt="Imagem" class="image" >
            <div class="image-overlay">

              <h2 class="tituloh2"><?php the_sub_field('titulo_mercado'); ?><br>  </h2>
<a class="li-click" id="li-click" href="<?php the_sub_field('linsk_lavanderia'); ?>">SAIBA MAIS</a>
            </div>

          </div>


           <?php endwhile; else : endif; ?>
           </div>
 </div>
       
      </section>


      <!-- sobe--> 
			<section class="sobre" id="sobre">
        <div class="container-fluid">
        <div class="row">
          <br>

          <div class="logo col-xl-1 col-sm-0 col-12 img-fluid .d-xl-none "></div>

            <div class="logo col-xl-5 col-sm-12 col-12  ">
            <div class="centralisar">
              <h2 class="sobre-titulo-home" > <?php the_field('titulo_sobre'); ?>  </h2>
              <h3 class="sob-titulo-home" > <?php the_field('texto_sobre'); ?>  </h3>
              <br>
              <br><br>
 <button id="button"><a href="<?php bloginfo('url'); ?>/produtos" class="btnss">TODOS OS PRODUTOS</a></button></p><br><br><br>
           </div>
          </div>
          <div class="col-xl-6 col-sm-12  col-12  " id="imagem-sobre " >
            <div class="imagem-sobre img-fluid">
             <img src="<?php the_field('foto_sobre'); ?> " id="imagem-sobre">     
             </div>
          </div>    
     
        </div>
      </div>  

</content>
<!-- sobe fim-->
  

      </section>
			<section class="mapa">
  <div class="container imgem-mapa">
    <div class="row">
      <div class="col-xl-12">
        <div class="map-container" style="position: relative;">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mapas.png"  >
          <a href="#popup-brasil"> <img class="brasil" src="<?php echo get_template_directory_uri(); ?>/img/brasil.png" ></a>
         <a href="#popup-italia"> <img class="italia" src="<?php echo get_template_directory_uri(); ?>/img/italia.png"></a>
        </div>
      </div>
    </div>
  </div>
</section>
    <div id="popup-brasil" class="popup-container">
        <div class="popup-content">
            
            <div id="">
                <h2 class="text-video">Informações sobre o Brasil</h2>
  <div class="row">
        <video id="video1" width="640" height="360" controls>
            <source src="<?php the_field('video_brasil'); ?>" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
        <img id="play-button" src="<?php echo get_template_directory_uri(); ?>/img/btn-play.webp" alt="Play" onclick="playVideo()">
    </div>

    <script>
        function playVideo() {
            var video = document.getElementById('video');
            var playButton = document.getElementById('play-button');
            
            video.play();
            playButton.style.display = 'none';
        }

        
    </script>
    </div>
            <br>
            <p class="text-video">Texto de exemplo sobre o brasil.</p><br>
            <a class="btn-video" href="#" onclick="history.back(); ">Fechar</a><br>
        </div>
    </div>

    <!-- Pop-up Itália -->
    <div id="popup-italia" class="popup-container">
        <div class="popup-content">
            <h2 class="titulo-video">Informações sobre a Itália</h2>
            <!-- Conteúdo do popup para a Itália -->
            <div id="video-container">
  <div class="row ">
        <video id="video1"  controls>
            <source src="<?php the_field('video_italia'); ?>" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
        <img id="play-button" src="<?php echo get_template_directory_uri(); ?>/img/btn-play.webp" alt="Play" onclick="playVideo()">
    </div>

    <script>
        function playVideo() {
            var video = document.getElementById('video');
            var playButton = document.getElementById('play-button');
            
            video.play();
            playButton.style.display = 'none';
        }
    </script>
    </div><br>
            <p class="text-video">Texto de exemplo sobre a Itália.</p><br>
            <a class="btn-video" href="#" onclick="history.back(); ">Fechar</a><br>
        </div>
    </div>




			<section class="catalogo margem">
     
        <div class="container-fluid mx-autos">
          <div class="row cat" id="bg" >
            <div class="" >
              
              <h2 class="text">BAIXE NOSSO <br>CATÁLOGO DE PRODUTOS</h2>
              <h3 class="texts">Para fazer o download do nosso catálogo de produtos, é<br>
necessário deixar seus dados preenchendo o formulário.

<br>
<button class="btn-cata btns-cat"> FAZER DOWNLOAD  <i class="fa fa-download"></i></button>

</h3>

            </div>
          </div>
        </div>


      </section>
			<section class="novidade">

        

        <div class="container-fluid mx-autos">
          <p class=" text-left texto-not" id="texto-not">NOVIDADES TRON</p>          
            <div class="row ">
  <?php
  $args = array (
    'post_type' => 'noticias',
    'posts_per_page' => 4,
    'order' => 'ASC'
  );
  $the_query = new WP_Query ( $args );
?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-xl-3 col-sm-6 col-12 ">

    <div class="card" id="card">
      <div class="card-body" id="card-body">
        <img src="<?php the_field('foto_noticia'); ?>" class="rounded mx-auto d-block">

        
        <h5 class="" id="card-title"><?php the_title(); ?></h5>
        <h4 class=" " id="card-textos"><?php the_content(); ?></h4>

        <a href="<?php the_permalink(); ?>" class="btn btn-link " id="btncat3">Ver Mais <i class="fa fa-arrow-right"></i> </a>
      </div>
    </div><br>
  </div>
<?php endwhile; else: endif; 

 the_posts_pagination(
  array(
      'prev_text' => 'Previous',
      'next_text' => 'Next'
  )
 );

?>

           </div>
        </div>
<br><br><br>
      </section>    

		</main>
	</div>

    <section class="parallax-section" id="section1">
        <!-- Conteúdo da primeira seção -->


        
    </section>
   
    </section>
<?php get_footer(); ?>

