		<div class="digi-modal hidden">
			<button class="btn-close-modal">&times;</button>
			<h3 class="digi-modal-header">Quick Enquiry</h3>
			<form action="" class="digi-modal-form">
				<div class="form-group">
					<label>Your Name</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea rows="3" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn c-btn mt-4">Submit</button>
			</form>
		</div>
		<div class="digi-modal-overlay hidden"></div>
		
		<div class="footer-wrapper">

			<!-- Contact Consultation Section -->
			<div class="footer-section">
			<h2>Contact Us for a Free Consultation</h2>
			<div class="contact-buttons">
				<button class="btn-consultation" onclick="requestConsultation()">Request Consultation</button>
				<a href="tel:1234567890" class="btn-call">
				   Call Us: (123) 456-7890
				</a>
			</div>

			<!-- Footer Links -->
			<div class="quick-links">
				<a href="#">Quick Links</a> |
				<a href="#">Home</a> |
				<a href="#">About Us</a> |
				<a href="#">Practice Areas</a> |
				<a href="#">Attorneys</a> |
				<a href="#">Blog</a> |
				<a href="#">Privacy Policy</a> |
				<a href="#">Terms of Service</a>
			</div>
			</div>


			<div class="top-footer-wrapper">
				<a class="scroll-top">Scroll to Top</a>
			</div> <!--  .top-footer-wrapper -->

			<div class="bottom-footer-wrapper">
				<div class="container">
					<p class="footer-copyright-text">
						&copy; copyright <?php echo date('Y') . ' ' . $company; ?>. All Rights Reserved. Site Created & Maintained By <a href="http://www.digilinkers.com" target="_blank" class="creator-link">Digilinkers</a>
					</p> <!--  .footer-copyright-text -->
				</div> <!--  .container -->
			</div> <!--  .bottom-footer-wrapper -->

		</div> <!--  .footer-wrapper -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo $path; ?>js/jquery-3.7.1.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
		<script src="<?php echo $path; ?>js/bootstrap.min.js" ></script>
        
		<!-- Owl carousel -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


		<!-- aos js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
		
		<!-- Swiper JS -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		
		<!-- Theme main JS -->
		<script src="<?php echo $path; ?>js/main.js"></script>
	</body>
</html>