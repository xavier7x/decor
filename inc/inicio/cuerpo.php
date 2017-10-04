<div data-vide-bg="<?php echo $pdet_valor['hostapp']; ?>/videos/vide/video">
    <div class="container">
		<div class="banner-info">
			<h3>Consulta nuestras secciones o utiliza el buscador para encontrar los productos que necesitas</h3>	
			<div class="search-form">
				<form id="consulta-producto">
					<input type="text" id="search_products_text" placeholder="Buscar..." required>
					<input type="submit" value=" ">
				</form>
			</div>		
		</div>	
    </div>
</div>
<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Categorias populares</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
                        <?php
                        
                        $inicioCategorias = array();
                        
                        ?>
                        <li class="active"><a href="#tab1" data-toggle="tab">Esponjas, fibras y estropajos</a></li>
                        <li class=""><a href="#tab2" data-toggle="tab">Cepillos, Escobas y Trapeadores</a></li> 
                        <li class=""><a href="#tab3" data-toggle="tab">Mermeladas</a></li>  
                        <li class=""><a href="#tab4" data-toggle="tab">Insecticidas y Aromatizantes</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
                            <?php
                            
                            $claseProducto = new Producto();

                            $resultadoSubca = $conexion->DBConsulta("
                                SELECT a.idproducto, a.nombre, a.nombre_seo, a.precio, a.precio_anterior, a.descripcion_corta, a.descripcion_larga,
                                b.stock, e.valor
                                FROM productos AS a
                                INNER JOIN productos_stock AS b ON (a.idproducto = b.idproducto)
                                INNER JOIN bodegas_zonas AS c ON (b.idbodega = c.idbodega)
                                INNER JOIN sectores AS d ON (c.idzona = d.idzona)
                                INNER JOIN impuestos AS e ON ( a.idimpuesto = e.idimpuesto )
                                WHERE a.estado = 'ACTIVO'
                                AND d.idsector = '".$_SESSION['idsector']."'
                                AND b.stock > 0
                                AND a.idsubcategoria = '7'
                                ORDER BY RAND()
                                LIMIT 4
                            ", 2);
                            
                            $cuerpoProductos = '';

                            foreach($resultadoSubca as $filaSubca){
                                // Validar que exista la imagen o colocar la de error
                                $imagenProducto = $pdet_valor['hostapp'].'/images/productos/0/320x320/error.png?v='.$pdet_valor['webversion'];
                                if(file_exists('images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png')){
                                    $imagenProducto = $pdet_valor['hostapp'].'/images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png?v='.$pdet_valor['webversion'];                        
                                }

                                //******************************

                                $cuerpoProductos .= $claseProducto->graficarProductoModal(
                                    'm-wthree' ,
                                    $globalCntModal ,
                                    $pdet_valor['hostapp'] ,
                                    $imagenProducto ,
                                    $filaSubca['idproducto'],
                                    $filaSubca['nombre'] ,
                                    $filaSubca['nombre_seo'] ,
                                    $filaSubca['descripcion_larga'] ,
                                    $filaSubca['descripcion_corta'] ,   
                                    $filaSubca['precio_anterior'] ,
                                    $filaSubca['precio'] ,
                                    $filaSubca['valor']
                                );

                                //******************************

                                $globalCntModal++;
                            }

                            echo $cuerpoProductos;

                            ?>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php

                            $resultadoSubca = $conexion->DBConsulta("
                                SELECT a.idproducto, a.nombre, a.nombre_seo, a.precio, a.precio_anterior, a.descripcion_corta, a.descripcion_larga,
                                b.stock, e.valor
                                FROM productos AS a
                                INNER JOIN productos_stock AS b ON (a.idproducto = b.idproducto)
                                INNER JOIN bodegas_zonas AS c ON (b.idbodega = c.idbodega)
                                INNER JOIN sectores AS d ON (c.idzona = d.idzona)
                                INNER JOIN impuestos AS e ON ( a.idimpuesto = e.idimpuesto )
                                WHERE a.estado = 'ACTIVO'
                                AND d.idsector = '".$_SESSION['idsector']."'
                                AND b.stock > 0
                                AND a.idsubcategoria = '9'
                                ORDER BY RAND()
                                LIMIT 4
                            ", 2);
                            
                            $cuerpoProductos = '';

                            foreach($resultadoSubca as $filaSubca){
                                // Validar que exista la imagen o colocar la de error
                                $imagenProducto = $pdet_valor['hostapp'].'/images/productos/0/320x320/error.png?v='.$pdet_valor['webversion'];
                                if(file_exists('images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png')){
                                    $imagenProducto = $pdet_valor['hostapp'].'/images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png?v='.$pdet_valor['webversion'];                        
                                }

                                //******************************

                                $cuerpoProductos .= $claseProducto->graficarProductoModal(
                                    'm-wthree' ,
                                    $globalCntModal ,
                                    $pdet_valor['hostapp'] ,
                                    $imagenProducto ,
                                    $filaSubca['idproducto'],
                                    $filaSubca['nombre'] ,
                                    $filaSubca['nombre_seo'] ,
                                    $filaSubca['descripcion_larga'] ,
                                    $filaSubca['descripcion_corta'] ,   
                                    $filaSubca['precio_anterior'] ,
                                    $filaSubca['precio'] ,
                                    $filaSubca['valor']
                                );

                                //******************************

                                $globalCntModal++;
                            }

                            echo $cuerpoProductos;

                            ?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<?php

                            $resultadoSubca = $conexion->DBConsulta("
                                SELECT a.idproducto, a.nombre, a.nombre_seo, a.precio, a.precio_anterior, a.descripcion_corta, a.descripcion_larga,
                                b.stock, e.valor
                                FROM productos AS a
                                INNER JOIN productos_stock AS b ON (a.idproducto = b.idproducto)
                                INNER JOIN bodegas_zonas AS c ON (b.idbodega = c.idbodega)
                                INNER JOIN sectores AS d ON (c.idzona = d.idzona)
                                INNER JOIN impuestos AS e ON ( a.idimpuesto = e.idimpuesto )
                                WHERE a.estado = 'ACTIVO'
                                AND d.idsector = '".$_SESSION['idsector']."'
                                AND b.stock > 0
                                AND a.idsubcategoria = '16'
                                ORDER BY RAND()
                                LIMIT 4
                            ", 2);
                            
                            $cuerpoProductos = '';

                            foreach($resultadoSubca as $filaSubca){
                                // Validar que exista la imagen o colocar la de error
                                $imagenProducto = $pdet_valor['hostapp'].'/images/productos/0/320x320/error.png?v='.$pdet_valor['webversion'];
                                if(file_exists('images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png')){
                                    $imagenProducto = $pdet_valor['hostapp'].'/images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png?v='.$pdet_valor['webversion'];                        
                                }

                                //******************************

                                $cuerpoProductos .= $claseProducto->graficarProductoModal(
                                    'm-wthree' ,
                                    $globalCntModal ,
                                    $pdet_valor['hostapp'] ,
                                    $imagenProducto ,
                                    $filaSubca['idproducto'],
                                    $filaSubca['nombre'] ,
                                    $filaSubca['nombre_seo'] ,
                                    $filaSubca['descripcion_larga'] ,
                                    $filaSubca['descripcion_corta'] ,   
                                    $filaSubca['precio_anterior'] ,
                                    $filaSubca['precio'] ,
                                    $filaSubca['valor'] 
                                );

                                //******************************

                                $globalCntModal++;
                            }

                            echo $cuerpoProductos;

                            ?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane text-style" id="tab4">
				        <div class=" con-w3l">
							<?php

                            $resultadoSubca = $conexion->DBConsulta("
                                SELECT a.idproducto, a.nombre, a.nombre_seo, a.precio, a.precio_anterior, a.descripcion_corta, a.descripcion_larga,
                                b.stock, e.valor
                                FROM productos AS a
                                INNER JOIN productos_stock AS b ON (a.idproducto = b.idproducto)
                                INNER JOIN bodegas_zonas AS c ON (b.idbodega = c.idbodega)
                                INNER JOIN sectores AS d ON (c.idzona = d.idzona)
                                INNER JOIN impuestos AS e ON ( a.idimpuesto = e.idimpuesto )
                                WHERE a.estado = 'ACTIVO'
                                AND d.idsector = '".$_SESSION['idsector']."'
                                AND b.stock > 0
                                AND a.idsubcategoria = '12'
                                ORDER BY RAND()
                                LIMIT 4
                            ", 2);
                            
                            $cuerpoProductos = '';

                            foreach($resultadoSubca as $filaSubca){
                                // Validar que exista la imagen o colocar la de error
                                $imagenProducto = $pdet_valor['hostapp'].'/images/productos/0/320x320/error.png?v='.$pdet_valor['webversion'];
                                if(file_exists('images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png')){
                                    $imagenProducto = $pdet_valor['hostapp'].'/images/productos/'.$filaSubca['idproducto'].'/320x320/'.$filaSubca['nombre_seo'].'.png?v='.$pdet_valor['webversion'];                        
                                }

                                //******************************

                                $cuerpoProductos .= $claseProducto->graficarProductoModal(
                                    'm-wthree' ,
                                    $globalCntModal ,
                                    $pdet_valor['hostapp'] ,
                                    $imagenProducto ,
                                    $filaSubca['idproducto'],
                                    $filaSubca['nombre'] ,
                                    $filaSubca['nombre_seo'] ,
                                    $filaSubca['descripcion_larga'] ,
                                    $filaSubca['descripcion_corta'] ,   
                                    $filaSubca['precio_anterior'] ,
                                    $filaSubca['precio'] ,
                                    $filaSubca['valor'] 
                                );

                                //******************************

                                $globalCntModal++;
                            }

                            echo $cuerpoProductos;

                            ?>
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>
			</div>
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="<?php echo $pdet_valor['hostapp']; ?>/alimentos-y-conservas/mermeladas">
					<img src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/mermelada.png?v=<?php echo $pdet_valor['webversion']; ?>" class="img-responsive img" alt="Enlatados">
					<div class="big-sa">
						<h6>Nuevas categorías</h6>
						<h3>Merme<span>ladas</span></h3>
						<p>Empieza bien tu día</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="<?php echo $pdet_valor['hostapp']; ?>/alimentos-y-conservas/enlatados-instantaneos">
					<img src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/enlatados.png?v=<?php echo $pdet_valor['webversion']; ?>" class="img-responsive img" alt="Snacks">
					<div class="big-sale">
						<div class="big-sale1">
							<h3><span>Enlatados</span></h3>
                            <p>Del frasco a la mesa</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="<?php echo $pdet_valor['hostapp']; ?>/alimentos-y-conservas/aceitunas-y-champinones">
					<img src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/aceitunas-y-champinones.png?v=<?php echo $pdet_valor['webversion']; ?>" class="img-responsive img1" alt="aceitunas y champiñones">
					<div class="big-sale2">
						<h3><span>Aceitunas</span> y Champiñones</h3>	
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="<?php echo $pdet_valor['hostapp']; ?>/alimentos-y-bebidas/arroz">
					<img src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/arroz.png?v=<?php echo $pdet_valor['webversion']; ?>" class="img-responsive img1" alt="Arroz">
					<div class="big-sale3">
						<h3>Arr<span>oz</span></h3>
						<p>Para tu día a día</p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <a href="<?php echo $pdet_valor['hostapp']; ?>/limpieza-y-hogar/esponjas-fibras-estropajos"><img class="first-slide" src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/esponjas-fibras-estropajos.png?v=<?php echo $pdet_valor['webversion']; ?>" alt="Cuidado personal"></a>
    </div>
    <div class="item">
     <a href="<?php echo $pdet_valor['hostapp']; ?>/limpieza-y-hogar"><img class="second-slide " src="<?php echo $pdet_valor['hostapp']; ?>/images/banner/limpieza-y-hogar.png?v=<?php echo $pdet_valor['webversion']; ?>" alt="Limpieza y hogar"></a>
    </div>
  </div>
</div>
<!-- /.carousel -->

<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Ofertas especiales</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>

        <div class="con-w3l">                
            <?php

            $resultadoInicio = $conexion->DBConsulta("
                SELECT a.idproducto, a.nombre, a.nombre_seo, a.precio, a.precio_anterior, a.descripcion_corta, a.descripcion_larga,
                b.stock, e.valor
                FROM productos AS a
                INNER JOIN productos_stock AS b ON (a.idproducto = b.idproducto)
                INNER JOIN bodegas_zonas AS c ON (b.idbodega = c.idbodega)
                INNER JOIN sectores AS d ON (c.idzona = d.idzona)
                INNER JOIN impuestos AS e ON ( a.idimpuesto = e.idimpuesto )
                WHERE a.estado = 'ACTIVO'
                AND a.precio_anterior IS NOT NULL
                AND a.precio < IFNULL(a.precio_anterior, 0)
                AND d.idsector = '".$_SESSION['idsector']."'
                AND b.stock > 0
                ORDER BY RAND()
                LIMIT 8
            ", 2);

            $cuerpoProductos = '';

            foreach($resultadoInicio as $filaInicio){
                // Validar que exista la imagen o colocar la de error
                $imagenProducto = $pdet_valor['hostapp'].'/images/productos/0/320x320/error.png?v='.$pdet_valor['webversion'];
                if(file_exists('images/productos/'.$filaInicio['idproducto'].'/320x320/'.$filaInicio['nombre_seo'].'.png')){
                    $imagenProducto = $pdet_valor['hostapp'].'/images/productos/'.$filaInicio['idproducto'].'/320x320/'.$filaInicio['nombre_seo'].'.png?v='.$pdet_valor['webversion'];                        
                }

                //******************************

                $cuerpoProductos .= $claseProducto->graficarProductoModal(
                    'pro-1' ,
                    $globalCntModal ,
                    $pdet_valor['hostapp'] ,
                    $imagenProducto ,
                    $filaInicio['idproducto'],
                    $filaInicio['nombre'] ,
                    $filaInicio['nombre_seo'] ,
                    $filaInicio['descripcion_larga'] ,
                    $filaInicio['descripcion_corta'] ,   
                    $filaInicio['precio_anterior'] ,
                    $filaInicio['precio'] ,
                    $filaInicio['valor']
                );

                //******************************

                $globalCntModal++;
            }

            echo $cuerpoProductos;

            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>