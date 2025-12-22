<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">
	
		<?php include_once(TEMPLATE_FRONT . DS . "carousel.php"); ?>
		<div class="mrb-large"></div>

		<!-- Swiper carousel cube effect with background images -->
		<div class="container">
			<h2 class="mrb30">Swiper carousel cube effect with background images</h2>
		</div>
		<?php include_once(TEMPLATE_FRONT . DS . "carousel-swiper-cube.php"); ?>
		<div class="mrb-large"></div>

		<!-- Swiper carousel flip effect with images -->
		<div class="container">
			<h2 class="mrb30">Swiper carousel flip effect with images</h2>
		</div>
		<?php include_once(TEMPLATE_FRONT . DS . "carousel-swiper-flip.php"); ?>
		<div class="mrb-large"></div>

		<div class="main-cover">
	
			<div class="section section-entry" id="3-col-layout2">
				<div class="container">
					<h2>Three column card layout 2</h2>
					<?php include_once('components/three-column-card-layout-2.php'); ?>
				</div>
			</div>
	
		</div>
	
	</div> 
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>

