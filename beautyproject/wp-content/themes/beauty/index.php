
<?php get_header() ?>

<body class="loaded">


	<!-- BEGIN BODY -->

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">
            <!-- BEGIN MAIN BLOCK -->
                <?php get_template_part( 'template_parts/banner' ) ?>
            <!-- END MAIN BLOCK -->
			<!-- BEGIN TRENDING -->
            <?php get_template_part( 'template_parts/trending' ) ?>
			<!-- TRENDING EOF   -->
			<!-- BEGIN LOGOS -->
            <?php get_template_part( 'template_parts/logos' ) ?>
			<!-- LOGOS EOF   -->
			<!-- BEGIN DISCOUNT -->
            <?php get_template_part( 'template_parts/discount' ) ?>
			<!-- DISCOUNT EOF   -->
			<!-- BEGIN ADVANTAGES -->
            <?php get_template_part( 'template_parts/advantage' ) ?>
			<!-- ADVANTAGES EOF   -->
			<!-- BEGIN TOP CATEGORIES -->
            <?php get_template_part( 'template_parts/top_categories' ) ?>
			<!-- TOP CATEGORIES EOF   -->
			<!-- BEGIN INFO BLOCKS New Collection-->
            <?php get_template_part( 'template_parts/info_block_new_categories' ) ?>
			<!-- INFO BLOCKS EOF   New Collection-->
			<!-- BEGIN NEW ARRIVALS -->
            <?php get_template_part( 'template_parts/new_arrivals' ) ?>
          
			<!-- NEW ARRIVALS EOF   -->
			<!-- BEGIN LATEST NEWS -->
            <?php get_template_part( 'template_parts/latest_news' ) ?>
			<!-- LATEST NEWS EOF   -->
			<!-- BEGIN SUBSCRIBE -->
            <?php get_template_part( 'template_parts/subscribe' ) ?>
			<!-- SUBSCRIBE EOF   -->
			<!-- BEGIN INSTA PHOTOS -->
            <?php get_template_part( 'template_parts/insta_photo' ) ?>
			<!-- INSTA PHOTOS EOF   -->

		</main>

		<!-- CONTENT EOF   -->

		<!-- BEGIN HEADER -->

		<?php get_template_part( 'template_parts/nav_header' ) ?>
		<!-- HEADER EOF   -->

<?php get_footer() ?>