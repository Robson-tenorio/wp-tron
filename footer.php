
  <section class="catalogo " id="catalogo">
     
        <div class="container mx-autos" >
          <div class="row cat" >
            
          <div class="logo col-xl-4 col-sm-6 col-12 ">
            <h2 class="text01">RECEBA NOSSA<br>NEWSLETTER</h2>
            
          </div>
          <div class="  col-xl-5 col-sm-6 col-12">
             <h2 class="text02">Inscreva-se para receba nossos informativos <br>
             em seu email. Obrigado pelo interesse.</h2>
          </div>                
          <div class="social-media-icons col-xl-3 col-sm-12 col-12 ">

            <input type="text inpt-new" id="usr" placeholder="Seu E-Mail *">
          </div>
        </div>
          </div>
        </div>


      </section>




	

 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/55?text=Olá%20posso%20ajudar" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>

    
<footer  id="footer" >
		<div class="container mx-autos "  >
				<div class="row alinhar" >

					<div class="logo col-xl-3 col-sm-8 col-12 alinha" ><br>
						<a href="<?php bloginfo('url'); ?>/home">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logotron-footer.png" class="d-block img-footer" alt="Logo">
						</a>
						<h3 class="texto-end">TRON Soluções Tecnológicas LTDA.</h3>
						<h3 class="texto-end-light"><a href="https://goo.gl/maps/nL4WuyFPv4x5ueug6">Rua Poeta Carlos Drummond de Andrade, 327.<br>
						Galpão A - Várzea - Recife - PE.  CEP. 50.950-060.</a><br>
						<b class="telefon">Telefone.:</b><b class=" "><a href="tel:(81) 4042 5692"><b id="">(81) 4042 5692</b></a><br>
						<a  href="mailto:comercial@tronst.com.br"><h2 id="emai">comercial@tronst.com.br</h2></a></b></h3>
						
					</div>
									
					<div class="col-xl-2 col-sm-3 col-12  " >
					<br>
						<p class="titulo-footer">PÁGINAS</p>
						<ul class="" id="line">
							<li><a class="nav-link " href="<?php bloginfo('url'); ?>/home" id="prod">• HOME</a></li>
							<li><a class="nav-link" href="<?php bloginfo('url'); ?>/a-tron" id="prod">• A TRON</a></li>
							<li><a class="nav-link" href="<?php bloginfo('url'); ?>/produtos" id="prod">• PRODUTOS</a></li>
							<li><a class="nav-link" href="<?php bloginfo('url'); ?>/servicos" id="prod">• SERVIÇOS</a></li>
							<li><a class="nav-link" href="<?php bloginfo('url'); ?>/baixe-o-catalogo" id="prod">• CATÁLOGO</a></li>
							<li><a class="nav-link" href="<?php bloginfo('url'); ?>/fale-conosco" id="prod">• CONTATOS</a></li>
						</ul>
						

					</div>
					<div class="col-xl-3 col-sm-6 col-12  "><br>
						<p id="titulo-footer">PRODUTOS</p>

						<ul class="two-column-list" id="prod">
<?php
$args = array(
    'post_type' => 'produtos', // Substitua pelo nome do seu tipo de post personalizado
    
    'posts_per_page' => 4,
);


$products = new WP_Query($args);

if ($products->have_posts()) {
    while ($products->have_posts()) {
        $products->the_post();

        $product_link = get_permalink(); // Obtém o link para a página individual do produto
        $product_title = get_the_title(); // Obtém o título do produto

        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url($product_link) . '">• ' . esc_html($product_title) . '</a></li><br>';
    }
    wp_reset_postdata();
}
?>
							
							
						</ul>
						
					</div>	



						<div class="col-xl-4 col-sm-6 col-12  "><br>
						<p id="titulo-footer">LINHAS DE MERCADO</p>

						<ul class="two-column-list" id="prod">
<?php
$args = array(
    'post_type' => 'mercado', // Substitua pelo nome do seu tipo de post personalizado
    'posts_per_page' => 4,
);


$products = new WP_Query($args);

if ($products->have_posts()) {
    while ($products->have_posts()) {
        $products->the_post();

        $product_link = get_permalink(); // Obtém o link para a página individual do produto
        $product_title = get_the_title(); // Obtém o título do produto

        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url($product_link) . '">• ' . esc_html($product_title) . '</a></li><br>';
    }
    wp_reset_postdata();
}
?>
							
							
						</ul>
						
					</div>




				</div>
			</div>		
			
	

	</footer>




	  
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->
	
    


  
	
</body>
</html>