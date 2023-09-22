<?php 
// Template Name: sobre
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
             
             <header id="header">
<nav id="nav">
    
    <ul id="menu" role="menu">
      
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/home">HOME</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/a-tron">A TRON</a> </li>
      <li> <a id="aa" href="<?php bloginfo('url'); ?>/produtos">PRODUTOS</a> </li>
      <!--<li> <a id="aa" href="<?php bloginfo('url'); ?>/servicoa">SERVIÇOS</a> </li>-->
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
		<div class="container" >
		<div class="row col-xl-12">
			
			</div class="textoprodutoh"> Sobre a TRON
		</div>
			</div>
		
	</section>
<br>

	<!-- sobe--> 
			<section class="sobre " id="a-tron">
        <div class="container" >
        <div class="row">
         

          <div class="logo col-xl-6 col-sm-12 col-12 ">
            <div class="centralisa">
            	<img src="<?php the_field('foto_a_tron'); ?>" class="rounded " id=""> 
              
              
              

           </div>
          </div>
          <div class="col-xl-6 col-sm-12 col-12  " id="imagem-sobre">
            <div class="imagem-sobre img-fluid"><br><br> 
                 <h2 class="sobre-tituloa text-left" > <?php the_field('titulo_a_tron'); ?>  </h2>
              <h3 class="sobre-titulo-sb" > <?php the_field('texto_a_tron'); ?>  </h3>
             </div>
          </div>    
     
        </div>
      </div>  

</content>
<!-- sobe fim-->
<section>
  <div class="container">
<div id="video-container">
  <div class="row">
        <video id="video" width="640" height="360" controls>
            <source src="<?php the_field('video_tron'); ?>" type="video/mp4">
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
    </div>
			<div class="row">         

		<!--	<img src="<?php the_field('video_tro'); ?>" id="video-full">
				<div class="logo col-xl-12 col-sm-12 col-12 img-fluid " >
					<div class="embed-responsive embed-responsive-16by9" >
						<iframe class="embed-responsive-item" src="<?php the_field('video_tron'); ?>" allowfullscreen ></iframe>
						-->
					</div>
				</div> 
			
				</div> 
			</div>

</content>
<!-- video fim-->

<!-- missao visao--> 
<section >

<div class="container " id="espaco">
  <div class="row mx-autos">
    
  
  <ul id="accordion">
    <li>
      <label   for="first"><p class="undr">MISSÃO</p> <br><i class="fa fa-chevron-up" aria-hidden="true"></i></label>
      <input type="radio" name="accordion" id="first" checked>
      
      <div class="contente"><br>
        <p>Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself." Lorem ipsum presents the sample font and orientation of writing on web pages and other software applications where content is not the main concern of the developer.</p>
      </div>
    </li>

    <li>
      <label for="second"><p class="undr">VISÃO</p> <br><i class="fa fa-chevron-up" aria-hidden="true"></i></label>
      <input type="radio" name="accordion" id="second" >
      
      <div class="contente"><br>
        <p>Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself." Lorem ipsum presents the sample font and orientation of writing on web pages and other software applications where content is not the main concern of the developer.</p>
      </div>
    </li>

    <li>
      <label for="third"><p class="undr">VALORES</p> <br><i class="fa fa-chevron-up" aria-hidden="true"></i></label>
      <input type="radio" name="accordion" id="third" >
      
      <div class="contente alin"><br>
        <p>Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself." Lorem ipsum presents the sample font and orientation of writing on web pages and other software applications where content is not the main concern of the developer.</p>
      </div>
    </li>

    <li>
      <label for="fourth"> <p class="undr">POLÍTICA DE QUALIDADE</p><br><i class="fa fa-chevron-up" aria-hidden="true"></i></label>
      <input type="radio" name="accordion" id="fourth" >
      
      <div class="contente"><br>
        <p>Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself." Lorem ipsum presents the sample font and orientation of writing on web pages and other software applications where content is not the main concern of the developer.</p>
      </div>
    </li>

  </ul>
  <script>
  // Obtém todos os elementos de seta
  var arrowIcons = document.querySelectorAll('.fa-chevron-up');

  // Adiciona um ouvinte de evento de clique a cada elemento de seta
  arrowIcons.forEach(function (arrowIcon) {
    arrowIcon.addEventListener('click', function () {
      // Alterna a classe 'rotate' quando a seta é clicada
      this.classList.toggle('rotate');
    });
  });
</script>
</div>
</div>

</section>
		

<section id="bg1">
	<div class="container">
		<div class="row">
			<p class="texto-1">
			Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself." Lorem ipsum presents the sample font and orientation of writing on web pages and other software applications where content is not the main concern of the developer.</p>

		</div><p class="text-right" id="auto"><b>Oswaldo Redig,</b> Diretor da TRON Brasil</p>
	</div>

</section>

<br><br>

<section>


<section class="" id="slider">
    <p class="text-center" id="textoprodutoh55">Nossa Equipe</p>
    <div class="container">
        <div class="slide">
            <div class="owl-carousel">
                <div class="slider-car">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ellipse.png"
                        class="equipe-imagem"
                        data-nome="Nome da Pessoa"
                        data-email="email@exemplo.com"
                        data-fone="81 9 9999-9999">
                    </div>
                </div>

               
               

                <!-- Adicione mais imagens e informações aqui -->
            </div>
            <div class="navegac">
                <button id="botao_anteriors"> <i class="fas fa-chevron-left "></i> </button>
                <button id="botao_proximos"><i class="fas fa-chevron-right "></i></button>
            </div>
        </div>
    </div>

    <!-- Janela Popup -->
    <div class="popups" id="team-popup">
        <div class="popup-contents" id="popup-contents">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <img class="tmg"  id="popup-image" src="" alt="Imagem da Equipe">
            <ul class="ajustetexto">
             <li class="textoname" id="popup-name"></li>
             <li class="textoemail" id="popup-email"></li>
             <li class="textofone" id="popup-fone"></li>
            </ul>
            
            
            
        </div>
    </div>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var owl = $('.owl-carousel');
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
                        items: 3
                    },
                    730: {
                        items: 5
                    },
                    860: {
                        items: 7
                    },
                }
            });

            $("#botao_anteriors").on('click', function () {
                owl.trigger('prev.owl.carousel');
            });

            $("#botao_proximos").on('click', function () {
                owl.trigger('next.owl.carousel');
            });
        });

$(document).ready(function () {
    // ...

    // Quando uma imagem da equipe for clicada
    $(".equipe-imagem").on('click', function () {
        var nome = $(this).data("nome");
        var email = $(this).data("email");
        var fone = $(this).data("fone");

        // Preencha as informações do popover
        $("#popup-image").attr("src", $(this).attr("src"));
        $("#popup-name").text(nome);
        $("#popup-email").text(email);
        $("#popup-fone").text(fone);
        

        // Abra o popover
        openPopup();
    });

    // Função para abrir o popover
    function openPopup() {
        $("#team-popup").css("display", "block");
    }

    // Função para fechar o popover
    function closePopup() {
        $("#team-popup").css("display", "none");
    }

    // Quando o botão de fechamento for clicado
    $(".close-button").on('click', function () {
        closePopup(); // Certifique-se de que a função closePopup() seja chamada
    });

    // ...

});


    </script>
</section>



<?php get_footer(); ?>