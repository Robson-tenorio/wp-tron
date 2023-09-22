<?php 
// Template Name: contato
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


	<!-- sobe--> 
			<section class="sobre " id="a-tron">
        <div class="container">
        <div class="row">
          

          <div class="logo col-xl-6 col-sm-5 col-12 ">
            <div class="centralisa" id="texto-end">
            	<b>TRON Soluções Tecnológicas Ltda.</b> 
              <br><br>
              <div id="txxt">Endereço:</div> <br>
              Avenida Recife, 5000 – Areias – Recife/PE. 
              <br>
              Fone/Fax: +55 81 3455-6130 / 3082-4223 <br><br>
              <div id="txxt">Departamentos:</div> <br>
              Administração <br>
              contato@tronst.com.br <br><br>
              <div id="txxt">Diretoria</div> <br>
              direotira@tronst.com.br <br><br>
              <div id="txxt">Suporte e Manutenção</div> <br>
              suporte@tronst.com.br <br><br>
              <div id="txxt">Comercial / Vendas</div><br>
              comercial@tronst.com.br <br><br>
              <div id="txxt">Financeiro</div> <br>
              financeiro@tronst.com.br <br><br>
              <div id="txxt">Horário de funcionamento</div> <br>
              Segunda à sexta-feira - Das 08:00 às 18:00 <br>
              Sábados - Das 08:00 às 12:00
              
              
              

           </div>
          </div>
          <div class="col-xl-6 col-sm-7 col-12 " ><br>
            <div  ><?php echo do_shortcode( '[contact-form-7 id="a81fbf0" title="Formulário de contato 1"]' ); ?>
           </div>
          </div>    
     
        </div>
      </div>  

<section>
  <br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10855.03002133898!2d-34.98004657580262!3d-8.07190394638641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1c784b8bc2ef%3A0xd8b44cad7c186a3b!2sTRON%20SOLU%C3%87%C3%95ES%20TECNOL%C3%93GICAS%20LTDA.!5e0!3m2!1spt-BR!2sbr!4v1692024292830!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>


<!-- sobe fim-->



<?php get_footer(); ?>