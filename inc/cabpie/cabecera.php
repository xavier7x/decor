<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <!-- Title
    Entre 10 y 70 carateres y sera lo que se mostrara en google
    -->
    <title><?php echo ucfirst(strtolower($varAcceso['nombre'])); ?> | <?php echo $pdet_valor['empresa']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="google-site-verification" content="E6EbZNZHTInv3_xwF1qEXghhp9G5YUo0cjkhbfwcZK8" />
    <meta name="msvalidate.01" content="B8933CDE0C76736CF865DAC3EE3CB460" />
    <meta name="keywords" content="<?php echo $varAcceso['meta_keywords']; ?>">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Description
    La descripcion que se vera en el motor de busqueda, entre 70 y 160 caracteres
    -->    
    <meta name="description" content="<?php echo $varAcceso['meta_description']; ?>">
    <meta name='author' content='indofrad.com'>
    <meta name='owner' content='Lcdo. Xavier Moreno Aviles'>
    <meta name="robots" content="index, follow">
    <!--adicion de la nueva plantilla-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <!-- banner slider -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="js/owl.carousel.js"></script>
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
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
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
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
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
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/bootstrap.js"></script>
    <!--hasta aqui nueva plantilla-->
    <link href="<?php echo $pdet_valor['hostapp']; ?>/images/system/favicon.ico?v=<?php echo $pdet_valor['webversion']; ?>" rel="icon" type="image/x-icon"/>
    
    <?php
        for($f=0; $f<count($varAcceso['framework']); $f++){
            switch($varAcceso['framework'][$f]){ 
                case 'jquery-ui':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.min.css" rel="stylesheet" type="text/css"/>';
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>';
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'bootstrap':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>';
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'bootstrap-datepicker':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'jqgrid':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/css/ui.jqgrid-bootstrap.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'jquery-treeview':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jzaefferer-jquery-treeview/jquery.treeview.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'font-awesome':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'jstarbox':
                    echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jStarbox-master/css/jstarbox.css" rel="stylesheet" type="text/css"/>';
                    break;
            }
        }
    ?>
    
    
    <link href="<?php echo $pdet_valor['hostapp']; ?>/css/<?php echo $varAcceso['ventana']; ?>/style.css?v=<?php echo $pdet_valor['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $pdet_valor['hostapp']; ?>/css/cabpie/style.css?v=<?php echo $pdet_valor['webversion']; ?>" rel="stylesheet" type="text/css"/>
    
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <!-- Parametros de sesion de la aplicacion -->
    <input type="hidden" id="session_usuario" value="<?php echo $_SESSION['usuario']; ?>">
    <input type="hidden" id="session_tipocliente" value="<?php echo $_SESSION['tipocliente']; ?>">
    <input type="hidden" id="session_idsector" value="<?php echo $_SESSION['idsector']; ?>">
    <!-- Parametros de la aplicacion -->
    <input type="hidden" id="param_hostapp" value="<?php echo $pdet_valor['hostapp']; ?>">
    <input type="hidden" id="param_totalvistaproductos" value="<?php echo $pdet_valor['totalvistaproductos']; ?>">
    <input type="hidden" id="param_timeout" value="<?php echo $pdet_valor['timeout']; ?>">
    <input type="hidden" id="param_paginacion" value="<?php echo $pdet_valor['paginacion']; ?>">
    <input type="hidden" id="param_webversion" value="<?php echo $pdet_valor['webversion']; ?>">
    <input type="hidden" id="param_empresa" value="<?php echo $pdet_valor['empresa']; ?>">
    <input type="hidden" id="param_pagostranscuenta" value="<?php echo $pdet_valor['pagostranscuenta']; ?>">
    <input type="hidden" id="param_pagostransdocumento" value="<?php echo $pdet_valor['pagostransdocumento']; ?>">
    <input type="hidden" id="param_pagostransentidad" value="<?php echo $pdet_valor['pagostransentidad']; ?>">
    <input type="hidden" id="param_pagostransmail" value="<?php echo $pdet_valor['pagostransmail']; ?>">
    <input type="hidden" id="param_pagostransnombre" value="<?php echo $pdet_valor['pagostransnombre']; ?>">
    <input type="hidden" id="param_pagostranstipocuenta" value="<?php echo $pdet_valor['pagostranstipocuenta']; ?>">
    <!-- Parametros del servidor de la aplicacion -->
    <input type="hidden" id="fecha_servidor" value="<?php echo date('r') ?>">
<!--modal de la nueva plantilla-->
<div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h4>
                </div>
                <div class="modal-body modal-body-sub">
                    <h5>Select your delivery location </h5>
                    <select class="form-control bfh-states" data-country="US" data-state="CA">
						<option value="">Select Your location</option>
						<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas<option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
					</select>
                    <input type="text" name="Name" placeholder="Enter your area / Landmark / Pincode" required="">
                    <button type="button" class="close2" data-dismiss="modal" aria-hidden="true">Skip & Explore</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myModal88').modal('show');
    </script>
    <!-- header -->
<!-- fin modal nueva plantilla-->
<!-- Modal Peligro -->
<div class="modal fade" id="myModalDanger" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalDangerTitle">Peligro</h4>
            </div>
            <div class="modal-body text-center" id="myModalDangerBody"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Advertencia -->
<div class="modal fade" id="myModalWarning" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content panel-warning">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalWarningTitle">Advertencia</h4>
            </div>
            <div class="modal-body text-center" id="myModalWarningBody"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Exito -->
<div class="modal fade" id="myModalSuccess" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content panel-success">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalSuccessTitle">Éxito</h4>
            </div>
            <div class="modal-body text-center" id="myModalSuccessBody"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--header de la nueva plantilla-->
<div class="header">
        <div class="w3ls-header">
            <!--header-one-->
            <div class="w3ls-header-left">
                <p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
            </div>
            <div class="w3ls-header-right">
                <ul>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.html">Login </a></li>
                            <li><a href="signup.html">Sign Up</a></li>
                            <li><a href="login.html">My Orders</a></li>
                            <li><a href="login.html">Wallet</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="offers.html">Cash Back Offers</a></li>
                            <li><a href="offers.html">Product Discounts</a></li>
                            <li><a href="offers.html">Special Offers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="offers.html">Product Gift card</a></li>
                            <li><a href="offers.html">Occasions Register</a></li>
                            <li><a href="offers.html">View Balance</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-two">
            <!-- header-two -->
            <div class="container">
                <div style="max-width: 30%;" class="header-logo">
                    <h1 ><a href="index.html"><span><img class="responsive-img" src="images/decohogar.jpg"></span>
                        </a>
                    </h1>
                </div>
                <div class="header-search">
                    <form action="#" method="post">
                        <input type="search" name="Search" placeholder="Search for a Product..." required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
                    </form>
                </div>
                <div class="header-cart">
                    <div class="my-account">
                        <a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
                    </div>
                    <div class="cart">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header-two -->
        <div class="header-three">
            <!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="#0">Store Categories</a>
                        <nav class="cd-dropdown">
                            <a href="#0" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">
                                <li><a href="offers.html">Today's Offers</a></li>
                                <li class="has-children">
                                    <a href="#">Electronics</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products.html">All Electronics</a></li>
                                        <li class="has-children">
                                            <a href="#">MOBILE PHONES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics</a></li>
                                                <li class="has-children">
                                                    <a href="#0">SmartPhones</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#"> </a>
                                                        </li>
                                                        <li><a href="products.html">Android</a></li>
                                                        <li><a href="products.html">Windows</a></li>
                                                        <li><a href="products.html">Black berry</a></li>
                                                    </ul>
                                                </li>
                                                <li> <a href="products.html">IPhones</a> </li>
                                                <li><a href="products.html">Tablets</a></li>
                                                <li><a href="products.html">IPad</a></li>
                                                <li><a href="products.html">Feature Phones</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">LARGE APPLIANCES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics </a></li>
                                                <li><a href="products.html">Refrigerators</a></li>
                                                <li><a href="products.html">Washing Machine</a></li>
                                                <li><a href="products.html">Office Technology</a></li>
                                                <li><a href="products.html">Air conditioner</a></li>
                                                <li><a href="products.html">Home Automation</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">ENTERTAINMENT</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics</a></li>
                                                <li><a href="products.html">Tv & Accessories</a></li>
                                                <li><a href="products.html">Digital Camera</a></li>
                                                <li><a href="products.html">Gaming</a></li>
                                                <li><a href="products.html">Home Audio & Theater</a></li>
                                                <li class="has-children">
                                                    <a href="#">Computer</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#"> </a>
                                                        </li>
                                                        <li><a href="products.html">Laptop </a></li>
                                                        <li><a href="products.html">Gaming PC</a></li>
                                                        <li><a href="products.html">Monitors</a></li>
                                                        <li><a href="products.html">Networking</a></li>
                                                        <li><a href="products.html">Printers & Supplies</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">HOME APPLIANCES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li class="has-children"><a href="#">Kitchen appliances</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#0"> </a>
                                                        </li>
                                                        <li><a href="products.html">Rice Cookers</a></li>
                                                        <li><a href="products.html">Mixer Juicer</a></li>
                                                        <li><a href="products.html">Grinder</a></li>
                                                        <li><a href="products.html">Blenders & Choppers</a></li>
                                                        <li><a href="products.html">Microwave Oven</a></li>
                                                        <li><a href="products.html">Food Processors</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products.html">Purifiers</a></li>
                                                <li><a href="products.html">Geysers</a></li>
                                                <li><a href="products.html">Gas Stove</a></li>
                                                <li><a href="products.html">Vacuum Cleaner</a></li>
                                                <li><a href="products.html">Sewing Machine</a></li>
                                                <li><a href="products.html">Heaters & Fans</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">SMALL DEVICES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li><a href="products.html">Wifi Dongle</a></li>
                                                <li><a href="products.html">Router & Modem</a></li>
                                                <li class="has-children"><a href="#">Storage Devices</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#0"> </a>
                                                        </li>
                                                        <li><a href="products.html">Cloud Storage</a></li>
                                                        <li><a href="products.html">Hard Disk</a></li>
                                                        <li><a href="products.html">SSD</a></li>
                                                        <li><a href="products.html">Pen Drive</a></li>
                                                        <li><a href="products.html">Memory card</a></li>
                                                        <li><a href="products.html">Security Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products.html">Office Supplies</a></li>
                                                <li><a href="products.html">Cut the Cable</a></li>
                                                <li><a href="products.html">Auto Electronics</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">PERSONAL CARE</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li><a href="products.html">Epilator</a></li>
                                                <li><a href="products.html">Hair Styler</a></li>
                                                <li><a href="products.html">Trimmer & Shaver</a></li>
                                                <li><a href="products.html">Health Care</a></li>
                                                <li><a href="products.html">cables</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Fashion Store</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products1.html">All Fashion Stores</a></li>
                                        <li class="has-children">
                                            <a href="#">GIRLS' CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Ethnic wear </a></li>
                                                <li><a href="products1.html">Maternity wear</a></li>
                                                <li><a href="products1.html">inner & nightwear </a></li>
                                                <li><a href="products1.html">casual wear </a></li>
                                                <li><a href="products1.html">formal wear</a></li>
                                                <li><a href="products1.html">Sports wear</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">BOYS' CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Jeans</a></li>
                                                <li><a href="products1.html">Casual wear</a></li>
                                                <li><a href="products1.html">Shorts</a></li>
                                                <li><a href="products1.html">T-Shirts & Polos</a></li>
                                                <li><a href="products1.html">Trousers & Chinos</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">JACKETS</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Blazers</a></li>
                                                <li><a href="products1.html">Bomber jackets</a></li>
                                                <li><a href="products1.html">Denim Jackets</a></li>
                                                <li><a href="products1.html">Duffle Coats</a></li>
                                                <li><a href="products1.html">Leather Jackets</a></li>
                                                <li><a href="products1.html">Parkas</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">ACCESSORIES </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Watches </a></li>
                                                <li><a href="products1.html">Eyewear </a></li>
                                                <li><a href="products1.html">Jewellery </a></li>
                                                <li class="has-children">
                                                    <a href="#">Footwear </a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#"> </a>
                                                        </li>
                                                        <li><a href="products1.html">Ethnic</a></li>
                                                        <li><a href="products1.html">Casual wear</a></li>
                                                        <li><a href="products1.html">Sports Shoes</a></li>
                                                        <li><a href="products1.html">Boots</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products1.html">Stoles & Scarves</a></li>
                                                <li><a href="products1.html">Handbags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">BEAUTY</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Perfumes & Deos</a></li>
                                                <li><a href="products1.html">Lipsticks & Nail Polish</a></li>
                                                <li><a href="products1.html">Beauty Gift Hampers</a></li>
                                                <li><a href="products1.html">Personal Grooming</a></li>
                                                <li><a href="products1.html">Travel bags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="products1.html">PERSONAL CARE</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Face Care</a></li>
                                                <li><a href="products1.html">Nail Care</a></li>
                                                <li><a href="products1.html">Hair Care</a></li>
                                                <li><a href="products1.html">Body Care</a></li>
                                                <li><a href="products1.html">Bath & Spa</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="products2.html">Kids Fashion & Toys</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products2.html">All Kids Fashions</a></li>
                                        <li class="has-children">
                                            <a href="products2.html">KIDS CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Ethnic wear </a></li>
                                                <li><a href="products2.html">inner & Sleepwear </a></li>
                                                <li><a href="products2.html">Dresses & Frocks </a></li>
                                                <li><a href="products2.html">Winter wear</a></li>
                                                <li><a href="products2.html">Diaper & Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children"><a href="#">KIDS FASHION</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Footwear</a></li>
                                                <li><a href="products2.html">Sunglasses </a></li>
                                                <li><a href="products2.html">School & Stationery</a></li>
                                                <li><a href="products2.html">Jewellery</a></li>
                                                <li><a href="products2.html">Hair bands & Clips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children"><a href="#">Baby Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Lotions, Oil & Powder </a></li>
                                                <li><a href="products2.html">Soaps, Shampoo </a></li>
                                                <li><a href="products2.html">Bath Towels</a></li>
                                                <li class="has-children">
                                                    <a href="#">Feeding</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#"> </a>
                                                        </li>
                                                        <li><a href="products2.html">Baby Food </a></li>
                                                        <li><a href="products2.html">Bottle Feeding </a></li>
                                                        <li><a href="products2.html">Breast Feeding</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products2.html">Toddlers' Rooms</a></li>
                                            </ul>
                                            <!-- .cd-secondary-dropdown -->
                                        </li>
                                        <!-- .has-children -->
                                        <li class="has-children"><a href="#">TOYS & GAMES </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Art & Crafts</a></li>
                                                <li><a href="products2.html">Educational Toys </a></li>
                                                <li><a href="products2.html">Baby Toys</a></li>
                                                <li><a href="products2.html">Outdoor Play </a></li>
                                                <li><a href="products2.html">Musical Instruments</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Toy Tips & Trends</a></li>
                                                <li><a href="products2.html">Preschool Toys</a></li>
                                                <li><a href="products2.html">Musical Instruments</a></li>
                                                <li><a href="products2.html">Bikes & Ride-Ons</a></li>
                                                <li><a href="products2.html">Video Games</a></li>
                                                <li><a href="products2.html">PC & Digital Gaming</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Home, Furniture & Patio</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products3.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Kitchen Uses</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products3.html">Dinner Sets </a></li>
                                                <li><a href="products3.html">Cookware & Bakeware </a></li>
                                                <li><a href="products3.html">Containers & Jars </a></li>
                                                <li><a href="products3.html">Kitchen Tools </a></li>
                                                <li><a href="products3.html">Food Storage</a></li>
                                                <li><a href="products3.html">Casseroles</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Furniture </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products3.html">Bedroom </a></li>
                                                <li><a href="products3.html">Dining Room </a></li>
                                                <li><a href="products3.html">Kids' Furniture </a></li>
                                                <li><a href="products3.html">Living Room</a></li>
                                                <li><a href="products3.html">Office</a></li>
                                                <li><a href="products3.html">Mattresses</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Home Decor </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products3.html">Lighting</a></li>
                                                <li><a href="products3.html">Painting</a></li>
                                                <li><a href="products3.html">Curtains & Blinds</a></li>
                                                <li><a href="products3.html">Patio Furniture</a></li>
                                                <li><a href="products3.html">Wardrobes & Cabinets</a></li>
                                                <li><a href="products3.html">Mattresses</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gardening & Lawn </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"> </a>
                                                </li>
                                                <li><a href="products3.html">Gardening </a></li>
                                                <li><a href="products3.html">Landscaping </a></li>
                                                <li><a href="products3.html">Sheds</a></li>
                                                <li><a href="products3.html">Outdoor Storage  </a></li>
                                                <li><a href="products3.html">Garden & Ideas </a></li>
                                                <li><a href="products3.html">Patio Tips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Garage Storage</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products3.html">Baskets & Bins </a></li>
                                                <li><a href="products3.html">Garage Door Openers</a></li>
                                                <li><a href="products3.html">Free Standing Shelves </a></li>
                                                <li><a href="products3.html">Floor cleaning</a></li>
                                                <li><a href="products3.html">Tool Kits</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Sports, Fitness & Outdoor</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products4.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Single Sports </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html">Bikes </a></li>
                                                <li><a href="products4.html">Fishing  </a></li>
                                                <li><a href="products4.html">Cycling </a></li>
                                                <li><a href="products4.html">Musical Instruments</a></li>
                                                <li><a href="products4.html">Archery </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Team Sports</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html">Cricket </a></li>
                                                <li><a href="products4.html">Badminton </a></li>
                                                <li><a href="products4.html">Swimming Gear </a></li>
                                                <li><a href="products4.html">Sports Apparel </a></li>
                                                <li><a href="products4.html">Indoor games</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Fitness </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html">Fitness Accessories </a></li>
                                                <li><a href="products4.html">Exercise Machines </a></li>
                                                <li><a href="products4.html">Ellipticals </a></li>
                                                <li><a href="products4.html">Home Gyms</a></li>
                                                <li><a href="products4.html">Exercise Bikes</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Camping </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html"> Airbeds</a></li>
                                                <li><a href="products4.html">Tents </a></li>
                                                <li><a href="products4.html">Gazebo's & Shelters</a></li>
                                                <li><a href="products4.html">Coolers </a></li>
                                                <li><a href="products4.html">Canopies</a></li>
                                                <li><a href="products4.html">Sleeping Bags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Camping Tools</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html">Shooting </a></li>
                                                <li><a href="products4.html">Knives & Tools </a></li>
                                                <li><a href="products4.html">Optics & Binoculars </a></li>
                                                <li><a href="products4.html">Lights & Lanterns </a></li>
                                                <li><a href="products4.html">Hunting Clothing </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Other</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products4.html">Riding Gears & More </a></li>
                                                <li><a href="products4.html">Body Massagers </a></li>
                                                <li><a href="products4.html">Health Monitors </a></li>
                                                <li><a href="products4.html">Health Drinks </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Grocery store</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products5.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Veggies & Fruits </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Vegetables </a></li>
                                                <li><a href="products5.html">Fruits </a></li>
                                                <li><a href="products5.html">Dry Fruits</a></li>
                                                <li><a href="products5.html">Snacks & Cookies </a></li>
                                                <li><a href="products5.html">Breakfast & Cereal</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Packet Food</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Beverages </a></li>
                                                <li><a href="products5.html">Baking </a></li>
                                                <li><a href="products5.html">Emergency Food </a></li>
                                                <li><a href="products5.html">Candy & Gum </a></li>
                                                <li><a href="products5.html">Meals & Pasta </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Shop All Pets </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Dogs </a></li>
                                                <li><a href="products5.html">Fish </a></li>
                                                <li><a href="products5.html">Cats</a></li>
                                                <li><a href="products5.html">Birds </a></li>
                                                <li><a href="products5.html">Pet Food </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Household Essentials </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Laundry Room </a></li>
                                                <li><a href="products5.html">Paper & Plastic</a></li>
                                                <li><a href="products5.html">Pest Control </a></li>
                                                <li><a href="products5.html">Batteries </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Food Shops </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Fresh Food</a></li>
                                                <li><a href="products5.html">Food Gifts </a></li>
                                                <li><a href="products5.html">Frozen Food </a></li>
                                                <li><a href="products5.html">Organic </a></li>
                                                <li><a href="products5.html">Gluten Free </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Tips </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products5.html">Pets Growth</a></li>
                                                <li><a href="products5.html">Recipes </a></li>
                                                <li><a href="products5.html">Snacks</a></li>
                                                <li><a href="products5.html">Nutrition</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Photo, Gifts & Office Supplies</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products6.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Trending Now </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Best Priced</a></li>
                                                <li><a href="products6.html">Chocolates </a></li>
                                                <li><a href="products6.html">Gift Cards </a></li>
                                                <li><a href="products6.html">Fashion & Accessories </a></li>
                                                <li><a href="products6.html">Decorative Plants </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Photos </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Shelf animation </a></li>
                                                <li><a href="products6.html">3D-rendered </a></li>
                                                <li><a href="products6.html">gift builder </a></li>
                                                <li><a href="products6.html">Frames</a></li>
                                                <li><a href="products6.html">Wall Decor</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gifts </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Personalized Gifts </a></li>
                                                <li><a href="products6.html">Flowers </a></li>
                                                <li><a href="products6.html">Cards & Toys</a></li>
                                                <li><a href="products6.html">Show pieces </a></li>
                                                <li><a href="products6.html">Photo Books</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Favourite Brands </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Archies </a></li>
                                                <li><a href="products6.html">Jewel Fuel </a></li>
                                                <li><a href="products6.html">Ferns N Petals </a></li>
                                                <li><a href="products6.html">Happily Unmarried</a></li>
                                                <li><a href="products6.html">Chumbak</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Office</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Calendars</a></li>
                                                <li><a href="products6.html">Mousepads</a></li>
                                                <li><a href="products6.html">Phone Cases</a></li>
                                                <li><a href="products6.html">Tablet & Laptop Cases</a></li>
                                                <li><a href="products6.html">Mounted Photos</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Combos </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products6.html">Chocolates </a></li>
                                                <li><a href="products6.html">Dry Fruits</a></li>
                                                <li><a href="products6.html">Sweets</a></li>
                                                <li><a href="products6.html">Snacks</a></li>
                                                <li><a href="products6.html">Cakes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Health, Beauty & Pharmacy</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products7.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Health</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products7.html">Home Health Care </a></li>
                                                <li><a href="products7.html">Sports Nutrition </a></li>
                                                <li><a href="products7.html">Vision </a></li>
                                                <li><a href="products7.html">Vitamins </a></li>
                                                <li><a href="products7.html">Diet & Nutrition </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Health Tips</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products7.html">Diet</a></li>
                                                <li><a href="products7.html">Exercise Tips  </a></li>
                                                <li><a href="products7.html">Vitamin Balance</a></li>
                                                <li><a href="products7.html">Health Insurance</a></li>
                                                <li><a href="products7.html">Funeral</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Beauty </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products7.html">Massage & Spa </a></li>
                                                <li><a href="products7.html">Face Wash</a></li>
                                                <li><a href="products7.html">Facial Cleanser</a></li>
                                                <li><a href="products7.html">Makeup </a></li>
                                                <li><a href="products7.html">Beauty Tips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Pharmacy </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products7.html">Home Delivery </a></li>
                                                <li><a href="products7.html">History & Reports </a></li>
                                                <li><a href="products7.html">Transfer Prescriptions </a></li>
                                                <li><a href="products7.html">Health CheckUp</a></li>
                                                <li><a href="products7.html">Mobile App</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Pharmacy Center </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products7.html">Diabetes Shop </a></li>
                                                <li><a href="products7.html">Medicine Cabinet </a></li>
                                                <li><a href="products7.html">Vitamin Selector</a></li>
                                                <li><a href="products7.html">Pharmacy Help</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Automotive</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products8.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">All Motors </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Bikes </a></li>
                                                <li><a href="products8.html">Yachts </a></li>
                                                <li><a href="products8.html">Scooters </a></li>
                                                <li><a href="products8.html">Autos</a></li>
                                                <li><a href="products8.html">Bus</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Accessories </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Vehicle Electronics</a></li>
                                                <li><a href="products8.html">Stereos & Monitors</a></li>
                                                <li><a href="products8.html">Bluetooth Devices</a></li>
                                                <li><a href="products8.html">GPS Navigation</a></li>
                                                <li><a href="products8.html">Speakers & Tweeters</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Safety & Security </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Anti-Theft Devices </a></li>
                                                <li><a href="products8.html">Helmets</a></li>
                                                <li><a href="products8.html">Sensors</a></li>
                                                <li><a href="products8.html">Auto Repair Tools </a></li>
                                                <li><a href="products8.html">Antifreeze & Coolants </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Car Interiors</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Stereos </a></li>
                                                <li><a href="products8.html">Floor Mats </a></li>
                                                <li><a href="products8.html">Seat Covers</a></li>
                                                <li><a href="products8.html">Chargers </a></li>
                                                <li><a href="products8.html">Audio Finder </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Exterior Accessories </a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Wheel covers </a></li>
                                                <li><a href="products8.html">Car Lighting </a></li>
                                                <li><a href="products8.html">Polish & Waxes</a></li>
                                                <li><a href="products8.html">Cargo Management</a></li>
                                                <li><a href="products8.html">Car Decoration </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Car Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products8.html">Auto Tips & Advice </a></li>
                                                <li><a href="products8.html">Car Washes & Cleaners </a></li>
                                                <li><a href="products8.html">Car Wax & Polish</a></li>
                                                <li><a href="products8.html">Cleaning Tools</a></li>
                                                <li><a href="products8.html">Detailing Kits </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Books, Music & Movies</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products9.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Books</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li class="has-children"><a href="#">Exam books </a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back">
                                                            <a href="#"> </a>
                                                        </li>
                                                        <li><a href="products9.html">CAT/MAT/XAT</a></li>
                                                        <li><a href="products9.html">Civil Services</a></li>
                                                        <li><a href="products9.html">AFCAT</a></li>
                                                        <li><a href="products9.html">New Releases</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products9.html">Academic Text </a></li>
                                                <li><a href="products9.html">Romance Books </a></li>
                                                <li><a href="products9.html">Journals </a></li>
                                                <li><a href="products9.html">Children's & Teen Books </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Music</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products9.html">New Releases </a></li>
                                                <li><a href="products9.html">Country Music </a></li>
                                                <li><a href="products9.html">Musical Instruments </a></li>
                                                <li><a href="products9.html">Collections</a></li>
                                                <li><a href="products9.html">Boxed Sets </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Music Combo</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products9.html">Pop </a></li>
                                                <li><a href="products9.html">Preorders </a></li>
                                                <li><a href="products9.html">Album Songs</a></li>
                                                <li><a href="products9.html">Top 50 CDs </a></li>
                                                <li><a href="products9.html">Music DVDs </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Movies</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products9.html">New Releases </a></li>
                                                <li><a href="products9.html">Children & Family </a></li>
                                                <li><a href="products9.html">Action</a></li>
                                                <li><a href="products9.html">Classic Movies </a></li>
                                                <li><a href="products9.html">Bollywood Movies </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Movies Combo</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products9.html">Hollywood Movies </a></li>
                                                <li><a href="products9.html">Digital Movies </a></li>
                                                <li><a href="products9.html">Boxed Sets</a></li>
                                                <li><a href="products9.html">Animated</a></li>
                                                <li><a href="products9.html">Adventure</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">TV Shows</a>
                                            <ul class="is-hidden">
                                                <li class="go-back">
                                                    <a href="#"></a>
                                                </li>
                                                <li><a href="products9.html">Serials</a></li>
                                                <li><a href="products9.html">Best Programs</a></li>
                                                <li><a href="products9.html">Celebrations</a></li>
                                                <li><a href="products9.html">Top Shows</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li><a href="sitemap.html">Full Site Directory </a></li>
                            </ul>
                            <!-- .cd-dropdown-content -->
                        </nav>
                        <!-- .cd-dropdown -->
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </div>
                <div class="move-text">
                    <div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
                    <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
                    <script>
                        $('.marquee').marquee({
                            pauseOnHover: true
                        });
                        //@ sourceURL=pen.js
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->
<!--fin header de la neuva plantilla-->
<!--- HEADER -->
    <a href="<?php echo $pdet_valor['hostapp']; ?>/alimentos-y-bebidas/bebidas-hidratantes">
        <img src="<?php echo $pdet_valor['hostapp']; ?>/images/system/ofertas.png?v=<?php echo $pdet_valor['webversion']; ?>" class="img-head" alt="Ofertas">
    </a>
    <div class="header">
        <div class="container">
            <div class="logo">
                <h1>
                    <a href="<?php echo $pdet_valor['hostapp']; ?>">
                        <img src="<?php echo $pdet_valor['hostapp']; ?>/images/system/logo.png?v=<?php echo $pdet_valor['webversion']; ?>" width="240" height="90" class="img-responsive" alt="<?php echo $pdet_valor['empresa']; ?>">
                        <span>¡Productos de calidad al mejor precio!</span>
                    </a>
                </h1>
            </div>
            <div class="head-t">
                <ul class="card">                
                    <?php if( $_SESSION['tipocliente'] != 'visitante' ){ ?>            
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/pedidos" ><i class="fa fa-file-text-o" aria-hidden="true"></i><?php echo $menuSys['pedidos']['nombre']; ?></a></li>
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/cuenta" ><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $menuSys['cuenta']['nombre']; ?></a></li>
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/util/system/logoutSession.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar sesión</a></li>
                    <?php }else{ ?>
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/registro" ><i class="fa fa-user" aria-hidden="true"></i><?php echo $menuSys['registro']['nombre']; ?></a></li>   
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/login" ><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo $menuSys['login']['nombre']; ?></a></li>             
                    <?php } ?>
                    <li><a href="<?php echo $pdet_valor['hostapp']; ?>/carrito" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo $menuSys['carrito']['nombre']; ?></a></li>  
                </ul>	
            </div>
            <div class="header-ri">
                <ul class="social-top">
                    <li><a rel="nofollow" href="https://www.facebook.com/indofrad" target="_blank" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a rel="nofollow" href="https://twitter.com/indofrad" target="_blank" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a rel="nofollow" href="https://www.instagram.com/indofrad/" target="_blank" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
                    <li class="mkt-cnt-whatsapp"><a rel="nofollow" href="intent://send/<?php echo $pdet_valor['whatsapp']; ?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end" target="_blank" class="icon whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i><span></span></a></li>
                </ul>	
            </div>
            <div class="nav-top">
                <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo ( $varAcceso['ventana'] == 'inicio' ? "active" : "" ); ?>"><a href="<?php echo $pdet_valor['hostapp']; ?>" class="hyper"><span><?php echo $menuSys['inicio']['nombre']; ?></span></a></li>
                        <?php
                        
                        for($f=0; $f < count($vectorMenu); $f++){
                            $menuCatAct = ''; 
                            $menuCatInt = '';                            
                            $subDiv = (int)ceil(count($vectorMenu[$f]['subcategorias']) / 3);                            
                            
                            // Validar si el menu seleccionado
                            if( 
                                count($globalCategoria) > 0 && 
                                $vectorMenu[$f]['nombre_seo'] == $globalCategoria['nombre_seo'] 
                            ){
                                $menuCatAct = 'active'; 
                            }
                            
                            $cntCatInt = 1;
                            $flaSubAbierta = false;
                            $columnasAbi = 0;
                            
                            for($i=0; $i < count($vectorMenu[$f]['subcategorias']); $i++){
                                
                                // Si esta cerrada abrirla
                                if($flaSubAbierta == false){
                                    $menuCatInt .= '<div class="col-sm-3">';
                                    $menuCatInt .= '<ul class="multi-column-dropdown">';
                                    
                                    $columnasAbi++;
                                    $flaSubAbierta = true;
                                }
                                
                                // Escribir el item
                                $menuCatInt .= '<li><a href="'.$pdet_valor['hostapp'].'/'.$vectorMenu[$f]['nombre_seo'].'/'.$vectorMenu[$f]['subcategorias'][$i]['nombre_seo'].'">';
                                $menuCatInt .= '<i class="fa fa-angle-right" aria-hidden="true">';
                                $menuCatInt .= '</i>'.$vectorMenu[$f]['subcategorias'][$i]['nombre'].'</a></li>';
                                
                                // si esta abierta y solo contine un item o ya tiene el tamaño cerrarlo
                                if(
                                    $flaSubAbierta == true && (                                    
                                        ( $i + 1 ) == count($vectorMenu[$f]['subcategorias']) || 
                                        $cntCatInt == $subDiv
                                    )
                                ){
                                    $menuCatInt .= '</ul>';
                                    $menuCatInt .= '</div>';
                                    
                                    $cntCatInt = 1;
                                    $flaSubAbierta = false;
                                }else{
                                    $cntCatInt++;
                                }
                                
                                // Añadir las columnas que faltaron de 3
                                if( ( $i + 1 ) == count($vectorMenu[$f]['subcategorias']) ){
                                    for( $c=$columnasAbi ; $c < 3; $c++ ){
                                        $menuCatInt .= '<div class="col-sm-3"></div>';
                                    }
                                }
                                
                            }
                            
                            if( !empty($menuCatInt) ){
                                $menuCatInt .= '<div class="col-sm-3 w3l">';
                                $menuCatInt .= '<a href="'.$pdet_valor['hostapp'].'/'.$vectorMenu[$f]['nombre_seo'].'"><img src="'.$pdet_valor['hostapp'].'/images/categorias/'.$vectorMenu[$f]['nombre_seo'].'.png?v='.$pdet_valor['webversion'].'" class="img-responsive" alt="'.$vectorMenu[$f]['nombre'].'"></a>';
                                $menuCatInt .= '</div>';
                            }
                            
                            $menuCat = '<li class="dropdown '.$menuCatAct.'">';
                            $menuCat .= '<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>';
                            $menuCat .= ucfirst(strtolower($vectorMenu[$f]['nombre']));
                            $menuCat .= '<b class="caret"></b></span></a>';
                            $menuCat .= '<ul class="dropdown-menu multi">';
                            $menuCat .= '<div class="row">';
                            $menuCat .= $menuCatInt;
                            $menuCat .= '<div class="clearfix"></div>';
                            $menuCat .= '</div>';
                            $menuCat .= '</ul>';
                            $menuCat .= '</li>';
                            
                            // Imprimir la categoria solo si tiene subcategorias                            
                            if( !empty($menuCatInt) ){
                                echo $menuCat;
                            }
                                                        
                        } 
                        
                        ?>
                        <li class="<?php echo ( $varAcceso['ventana'] == 'contacto' ? "active" : "" ); ?>"><a href="<?php echo $pdet_valor['hostapp']; ?>/contacto" class="hyper"><span><?php echo $menuSys['contacto']['nombre']; ?></span></a></li>
                    </ul>
                </div>
                </nav>
                <div class="cart">
                    <a href="<?php echo $pdet_valor['hostapp']; ?>/carrito" >
                        <span class="fa fa-shopping-cart my-cart-icon"><span id="mkt-total-productos" class="badge badge-notify my-cart-badge">
                            <?php
                            $resultadoCabTotal = $conexion->DBConsulta("
                                SELECT IFNULL(SUM(cantidad),0) AS total
                                FROM cli_carrito_detalle 
                                WHERE usuario = '".$_SESSION['usuario']."'
                            ");

                            foreach($resultadoCabTotal as $filaCabTotal){
                                echo $filaCabTotal['total'];
                            }
                            ?>
                        </span></span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>			
    </div>    
<!-- END HEADER -->