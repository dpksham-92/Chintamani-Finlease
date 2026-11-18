<?php include 'include/header.php'; ?>

<section class="dsalogin padd60">
	<div class="container">
		<div class="col-xxl-8 col-xl-8 col-lg-7 col-md-10 col-sm-12 col-12 mx-auto">
			<div class="dsln">
				<div class="img">
					<img src="assets/img/dsalgn.png" class="img-fluid">
				</div>
				<div class="lgnfrm">
				  <ul class="nav nav-tabs" id="myTab" role="tablist">
				    <li class="nav-item" role="presentation">
				      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
				              type="button" role="tab" aria-controls="home" aria-selected="true">
				        <i class="bi bi-box-arrow-in-right"></i> DSA Login
				      </button>
				    </li>
				    <li class="nav-item" role="presentation">
				      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
				              type="button" role="tab" aria-controls="profile" aria-selected="false">
				        <i class="bi bi-person-add"></i> DSA Registration
				      </button>
				    </li>
				  </ul>

				  <div class="tab-content" id="myTabContent">
				    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
				      <h3>Welcome Back!</h3>
				      <p>Login to your DSA account</p>

				      <form class="cmnfm" action="#" method="post">
				        <div class="form-group">
				          <input type="email" id="loginEmail" name="email" placeholder="Enter Your Email Address *"
				                 autocomplete="email" aria-label="Email address" required>
				        </div>

				        <div class="form-group">
				          <input type="password" id="loginPassword" name="password" placeholder="Enter Your Password *"
				                 autocomplete="current-password" aria-label="Password" required>
				          <span class="toggle-password" role="button" tabindex="0" aria-label="Show password">
				            <i class="bi bi-eye"></i>
				          </span>
				        </div>

				        <div class="form-group">
				          <div class="form-check">
				            <input class="form-check-input" type="checkbox" name="remember" value="1" id="rememberMe">
				            <label class="form-check-label" for="rememberMe">Remember me</label>
				          </div>
				        </div>

				        <div class="form-group">
				          <button type="submit" class="btn btn-primary w-100">
				            Login <i class="fa-solid fa-arrow-right"></i>
				          </button>
				        </div>
				      </form>

				    </div>

				    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
				    	<h3>DSA Registration</h3>

				      <form class="cmnfm" action="#" method="post">
				      	<div class="row g-2">
				      		<div class="col-lg-12 col-sm-12 col-12">
				      			<div class="form-group">
						          <input type="text"  name="email" placeholder="Username *" required>
						        </div>
				      		</div>
				      		<div class="col-lg-12 col-sm-12 col-12">
				      			<div class="form-group">
				          			<input type="email"  name="password" placeholder="User Email Address *" required>
				        		</div>
				      		</div>
				      		<div class="col-lg-6 col-sm-12 col-12">
				      			<div class="form-group">
						        	<input type="text" name="" placeholder="Phone Number *" required>
						        </div>
				      		</div>
				      		<div class="col-lg-6 col-sm-12 col-12">
				      			<div class="form-group">
						        	<input type="password" name="" placeholder="Password *" required>
						        	<span class="toggle-password" role="button" tabindex="0" aria-label="Show password">
							            <i class="bi bi-eye"></i>
							          </span>
						        </div>
				      		</div>
				      		<div class="col-lg-12 col-sm-12 col-12">
				      			<div class="form-group">
						        	<input type="text" name="" placeholder="GST Number" >
						        </div>
				      		</div>
				      		<div class="col-lg-12 col-sm-12 col-12">
				      			<div class="form-group">
						        	<input type="text" name="" placeholder="Your Address" >
						        </div>
				      		</div>
				      		<div class="col-lg-12 col-sm-12 col-12">
				      			<button type="submit" class="btn btn-primary mt-3 w-100">
						            Submit <i class="fa-solid fa-arrow-right"></i>
						          </button>
				      		</div>
				      	</div>
				      </form>


				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'include/footer.php'; ?>