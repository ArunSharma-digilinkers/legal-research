<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header class="tns2-header">
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar3.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

		<div class="main-cover">

			<div class="page-banner page-banner--contact">
				<div class="page-banner-caption">
					<h5 class="txt-light txt-capitalize">Contact us</h5>
				</div>
			</div>

			<section class="section section-entry contact-wrapper">
				<div class="container">

					<div class="row">

						<div class="col-lg-8 col-md-12">
							<div class="contact-form-wrap">
								<div class="section-title">
									<h1>Get in Touch</h1>
								</div>
								<div class="mrb30">
									<p>
										Please fill out this quick form and we will be in touch with you.
									</p>
								</div>

								<div class="row">
									<div class="col-lg-10 col-md-12">
										<form class="contact-form" action="mail/mail.php" method="POST">
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputName">Your Name</label>
												<input type="text" class="form-control contact-form__input" id="inputName" name="name" placeholder="Enter your name">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMail">Your Email</label>
												<input type="email" class="form-control contact-form__input" id="inputMail" name="email" placeholder="Enter email">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputPhone">Mobile Number</label>
												<input type="text" class="form-control contact-form__input" id="inputPhone" name="phone" placeholder="Enter your mobile">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMsg">Your Message</label>
												<textarea class="form-control contact-form__textarea" id="inputMsg" name="message" placeholder="Write your message" rows="5"></textarea>
											</div>
											<div class="contact-form__button">
												<button type="submit" class="btn c-btn" name="contact_submit">Submit</button>
											</div>
										</form>
									</div> 
								</div>

							</div>
						</div> 

						<div class="col-lg-4 col-md-12">
							<div class="contact-section">

								<div class="row">

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Connect with us:</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit tempore ducimus.</p>
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Talk to us:</h5>
											<p>
												Call us at +91-1111100000
											</p>
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Social Presence</h5>
											<p>
												Find us at:
											</p>
											<ul class="social-list">
												<li>
													<a href=""><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-linkedin-in"></i></a>
												</li>
											</ul> 
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Office Address:</h5>
											<p>
												<?php echo $company; ?>
												<br />
												Address Here
											</p>
										</div>
									</div> 

								</div> 

							</div> 
						</div> 

					</div>

				</div>
			</section>
			
			<section class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5362188571066!2d77.0853073!3d28.613687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e4b3b5c3a1%3A0x7dac887432b854cf!2sDigilinkers%20-%20Best%20Digital%20Marketing%20Agency%20in%20Delhi%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1738940998370!5m2!1sen!2sin" width="1920" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>

		</div>

	<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>