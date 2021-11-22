<?php get_header() ?>

<body class="common-home res layout-home5 <?php body_class() ?> ">

    <div id="wrapper" class="wrapper-full banners-effect-7">



        <!-- TopBar Container  -->
        <?php echo get_template_part( 'template_parts/top_bar' ) ?>
        <!-- //TopBar Container  -->

        <!-- Header Container  -->
        <header id="header" class="layout-boxed variantleft type_5">

            <!-- Header Top -->
            <?php echo get_template_part( 'template_parts/header/header_top' ) ?>
            <!-- //Header Top -->

            <!-- Header center -->
            <?php echo get_template_part( 'template_parts/header/header_center' ) ?>
            <!-- //Header center -->

            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">


                        <!-- Main menu -->
						<?php echo get_template_part( 'template_parts/menu/main_menu' ) ?>
                        <!-- //end Main menu -->

                    </div>
                </div>

            </div>

            <!-- Navbar switcher -->
            <!-- //end Navbar switcher -->
        </header>
        <!-- //Header Container  -->



        <!-- Main Container  -->
        <div class="main-container  layout-boxed">
            <div class="container">
                <div class="row">
					<!-- Hero Section -->
					<?php echo get_template_part( 'template_parts/hero' ) ?>
					<!--End Hero Section -->


                    <div id="content" class="clearfix">
                        <div class="col-xs-12 clearfix">
							<!-- New Arrivel -->
							<?php echo get_template_part( 'template_parts/new_arrivel' ) ?>
							<!--End New Arrivel -->
                            <div class="module ">
								<!-- Middle Baner -->
								<?php echo get_template_part( 'template_parts/middle_baner' ) ?>
								<!--End Middle Baner -->
                            </div>

                            <div class="module tab-slider titleLine no-margin">
							<!-- Lattest Product -->
							<?php echo get_template_part( 'template_parts/latest_product' ) ?>
							<!-- End Lattest Product -->
                        
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Main Container -->
        <!-- Block Spotlight2  -->
		<?php echo get_template_part( 'template_parts/block_spotlight' ) ?>
        <!-- //Block Spotlight3  -->
        <?php get_footer(  ) ?>