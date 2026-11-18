<?php include 'include/header.php'; ?>

<section class="pagetitle">
	<div class="hero-overlay"></div>
	<div class="container">
	  	<h1>Contact Us</h1>
	  	<div class="breadcrumb-custom">
    		<a href="index.php">Home</a><span class="sep">/</span><span class="current">Contact Us</span>
	  	</div>
	</div>
</section>
<section class="contact-section padd80">
	<div class="container">
		<div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
		  	<div class="row g-4 g-lg-4 g-md-4 g-sm-4 g-4">
		    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
		      <div class="form-card">
		        <div class="g_head mb-lg-4 mb-md-4 mb-sm-4 mb-4">
		        	<h2>Have a <span>Question</span>?</h2>
		        	<p>We're here to help. Get in touch with our team for any questions or assistance.</p>
		        </div>
		        <form onsubmit="return false;">
		          <div class="row g-3">
		            <div class="col-12 col-md-6">
		              <label for="name" class="form-label">Name</label>
		              <input id="name" type="text" class="form-control" placeholder="John Doe" required />
		            </div>
		            <div class="col-12 col-md-6">
		              <label for="email" class="form-label">Email Address</label>
		              <input id="email" type="email" class="form-control" placeholder="you@example.com" required />
		            </div>

		            <div class="col-12 col-md-6">
		              <label for="phone" class="form-label">Phone Number</label>
		              <input id="phone" type="tel" class="form-control" placeholder="+91 0000000000" required />
		            </div>
		            <div class="col-12 col-md-6">
		              <label for="subject" class="form-label">Subject</label>
		              <input id="subject" type="text" class="form-control" placeholder="What is this about?" required />
		            </div>

		            <div class="col-12">
		              <label for="area" class="form-label">Area</label>
		              <select id="area" class="form-select" required>
		                <option value="" selected disabled>Select your city or region</option>
		                <option>New Delhi</option>
		                <option>Mumbai</option>
		                <option>Bengaluru</option>
		                <option>Pune</option>
		                <option>Other</option>
		              </select>
		            </div>

		            <div class="col-12">
		              <label for="message" class="form-label">Message</label>
		              <textarea id="message" class="form-control" placeholder="Tell us how we can help" required></textarea>
		            </div>

		            <div class="col-12">
		              <button type="submit" class="btn btn-primary">Send Message <i class="fa-solid fa-arrow-right"></i></button>
		            </div>
		          </div>
		        </form>
		      </div>
		    </div>
		    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
		      <div class="otrwytgit">
		      	<div class="info-card h-100" >
	              <img src="assets/img/callus.png" class="img-fluid">
	              <div>
		              <label>Phone Number</label>
		              <p>+91-9212132955</p>
		          </div>
	            </div>
	            <div class="info-card h-100" >
	              <img src="assets/img/emailus.png" class="img-fluid">
		              <div>
		              <label>Email Address</label>
		              <p>info@chintamanifinlease.com</p>
		          </div>
	            </div>
	            <div class="info-card h-100">
	              <img src="assets/img/location.png" class="img-fluid">
	              <div>
		              <label>Company Address</label>
		              <p>216, Vikasdeep Building, Plot No-18, New Delhi, India</p>
		          </div>
	            </div>
	            <div class="info-card h-100" >
		              <img src="assets/img/share.png" class="img-fluid">
		              <div>
			              <label>Follow Us</label>
			              <div class="social-row">
			                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
			                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
			                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
			                <a href="#" aria-label="Twitter / X"><i class="fa-brands fa-x-twitter"></i></a>
			                <a href="#/"><i class="fa-brands fa-google-plus-g"></i></a>
			              </div>
			          </div>
		            </div>


		      </div>
		    </div>
		  	</div>
		</div>
	</div>
</section>
<section class="map-section">
    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.7024740959155!2d77.28470347587553!3d28.638677951402464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdce2cb5acab%3A0xeabf9e552554d55d!2sPersonal%20Loan-Chintamani%20Finlease%20Ltd!5e0!3m2!1sen!2sin!4v1788208084742!5m2!1sen!2sin" height="600" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</section>

<?php include 'include/cta.php'; ?>

<?php include 'include/footer.php'; ?>