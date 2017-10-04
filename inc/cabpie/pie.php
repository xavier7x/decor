<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>Sobre nosotros</h3>
			<p>En <strong>Indofrad</strong> trabajamos todos los días con el unico fin de suplir las necesidades de distribución que demanda el mercado y nuestros clientes.</p>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>Menu</h3>
			<ul>
				<li><a href="<?php echo $pdet_valor['hostapp']; ?>"><?php echo $menuSys['inicio']['nombre']; ?></a></li>
                <?php
                        
                for($f=0; $f < count($vectorMenu); $f++){
                    if( count($vectorMenu[$f]['subcategorias']) > 0 ){
                        echo '<li><a href="'.$pdet_valor['hostapp'].'/'.$vectorMenu[$f]['nombre_seo'].'" >'.ucfirst(strtolower($vectorMenu[$f]['nombre'])).'</a></li>';
                    }
                }
                
                ?>
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>Servicios al cliente</h3>
			<ul>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/envio" ><?php echo $menuSys['envio']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/terminos" ><?php echo $menuSys['terminos']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/preguntas" ><?php echo $menuSys['preguntas']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/contacto" ><?php echo $menuSys['contacto']['nombre']; ?></a></li>				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
            <h3>Mi cuenta</h3>
			<ul>
				<?php if( $_SESSION['tipocliente'] != 'visitante' ){ ?>        
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/pedidos" ><?php echo $menuSys['pedidos']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/cuenta" ><?php echo $menuSys['cuenta']['nombre']; ?></a></li>
                <?php }else{ ?>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/login" ><?php echo $menuSys['login']['nombre']; ?></a></li>  
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/registro" ><?php echo $menuSys['registro']['nombre']; ?></a></li>
                <?php } ?>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/carrito" ><?php echo $menuSys['carrito']['nombre']; ?></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
                <h2>
                    <a href="<?php echo $pdet_valor['hostapp']; ?>">
                        <img src="<?php echo $pdet_valor['hostapp']; ?>/images/system/logo2.png?v=<?php echo $pdet_valor['webversion']; ?>" width="240" height="90" class="img-responsive" alt="<?php echo $pdet_valor['empresa']; ?>">
                        <span>¡Productos de calidad al mejor precio!</span>
                    </a>
                </h2>
				<p class="fo-para">Somos una entidad dedicada a la distribución y comercialización de productos de consumo masivo, que opera en todo el Ecuador.</p>
                <p class="fo-para">¡Tú distribuidor favorito!</p>
				<ul class="social-fo">
					<li><a rel="nofollow" href="https://www.facebook.com/indofrad" target="_blank" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a rel="nofollow" href="https://twitter.com/indofrad" target="_blank" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a rel="nofollow" href="https://www.instagram.com/indofrad/" target="_blank" class=" inst"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
                    <li class="mkt-cnt-whatsapp"><a rel="nofollow" href="intent://send/<?php echo $pdet_valor['whatsapp']; ?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end" target="_blank" class=" whats"><i class="fa fa-whatsapp" aria-hidden="true"></i><span></span></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i><?php echo $pdet_valor['direccionempresa']; ?></p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $pdet_valor['telefonopedidos']; ?></p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a rel="nofollow" href="mailto:<?php echo $pdet_valor['mailatencioncliente']; ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $pdet_valor['mailatencioncliente']; ?></a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p>© <?php echo date('Y'); ?> <?php echo $pdet_valor['empresa']; ?>. Derechos Reservados | Design by  <a rel="nofollow" href="http://w3layouts.com/" target="_blank"> W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- smooth scrolling -->
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"></span>
</a>
<!-- //smooth scrolling -->
<?php
    for($f=0; $f<count($varAcceso['framework']); $f++){
        switch($varAcceso['framework'][$f]){       
            case 'jquery':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery/jquery-2.2.4.min.js"></script>';
                break;
            case 'jquery-ui':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>';
                break;
            case 'bootstrap':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>';
                break;
            case 'bootstrap-datepicker':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/locales/bootstrap-datepicker.es.min.js"></script>';
                break;                    
            case 'bootboxjs':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootboxjs/bootbox.min.js"></script>';
                break;
            case 'totop':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/totop/jquery.ui.totop.min.js"></script>';
                break;
            case 'easing':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/easing/jquery.easing.1.3.js"></script>';
                break;
            case 'mycart':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery.mycart-master/jquery.mycart.min.js"></script>';
                break;
            case 'vide':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/vide/jquery.vide.min.js"></script>';
                break;
            case 'jstarbox':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jStarbox-master/jstarbox.js"></script>';
            case 'easy-responsive-tabs':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/easyResponsiveTabs/js/easyResponsiveTabs.js"></script>';
                break;
            case 'jqgrid':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/js/i18n/grid.locale-es.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/js/jquery.jqGrid.min.js"></script>';
                break;
            case 'jquery-treeview':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jzaefferer-jquery-treeview/jquery.treeview.js"></script>';
                break;
            case 'carousel':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/owl.carousel.js"></script>';
                break;
            case 'scroll':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery-scrolltofixed-min.js"></script>';
                break;
            case 'move-top':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/move-top.js"></script>';
                break;
            case 'jquery-marquee':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery.marquee.min.js"></script>';
                break;
            case 'highcharts':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Highcharts-4.2.5/js/highcharts.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Highcharts-4.2.5/js/modules/exporting.js"></script>';
                break;
        }
    }
?>

<script type="text/javascript" language="javascript" src="<?php echo $pdet_valor['hostapp']; ?>/js/cabpie/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo $pdet_valor['hostapp']; ?>/js/<?php echo $varAcceso['ventana']; ?>/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>
<!--adicion de eventos de la nueva plantilla-->
<script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds 
                items: 4,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [480, 2],
                navigation: true

            });
        });
</script>
    <script>
        $(document).ready(function() {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function(i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });
    </script>
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
</script>
<script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
<script>
        $('#myModal88').modal('show');
</script>
<script>
    $('.marquee').marquee({
        pauseOnHover: true
    });
    //@ sourceURL=pen.js
</script>    
<!--fin adicionales nueva plantilla-->
<?php
$url = $_SERVER['HTTP_HOST'];
if(
    strpos($url, 'localhost') === false &&
    strpos($url, '192.168.100.4') === false
){
?>

<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=26506228"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93807960-1', 'auto');
  ga('send', 'pageview');

</script>
<?php } ?>
</body>
</html>