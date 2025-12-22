<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header class="tn-header">
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar2.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

		<div class="main-cover">

			<div class="page-banner page-banner--about">
				<div class="page-banner-caption">
					<h5 class="txt-light txt-capitalize">About us</h5>
				</div>
			</div>
			
			<div class="page-nav-wrap">
				<div class="container">
					<div class="row page-nav-row">
						<div class="col-md-3">
							<div class="page-nav-section">
								<a href="#about-section1" class="page-nav-link">Vision</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="page-nav-section">
								<a href="#about-section2" class="page-nav-link">Mission</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="page-nav-section">
								<a href="#about-section3" class="page-nav-link">Quality</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="page-nav-section">
								<a href="#about-section4" class="page-nav-link">Values</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="about-page-content">
				<div class="about-section about-section1" id="about-section1">Vision</div>
				<div class="about-section about-section2" id="about-section2">Mission</div>
				<div class="about-section about-section3" id="about-section3">Quality</div>
				<div class="about-section about-section4" id="about-section4">Values</div>
			</div>

		</div>

	<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>