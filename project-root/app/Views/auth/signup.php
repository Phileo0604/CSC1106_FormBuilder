<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Sign Up</title>
	<!-- Link Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
</head>


<body>
	<section class="h-100">
		<div class="container h-100" style="margin-top: 100px;">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Sign Up</h1>
							<form method="POST" action="<?= base_url('signup/save'); ?>" class="needs-validation" novalidate="" autocomplete="off">
								<?= csrf_field(); ?>

								<?php if(!empty(session()->getFlashdata(('fail')))) : ?>
									<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
								<?php endif ?>

								<?= csrf_field(); ?>
								<?php if(!empty(session()->getFlashdata(('success')))) : ?>
									<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
								<?php endif ?>
								

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" placeholder="Enter your email" required autofocus>
									<span class="text-danger"><?= isset($validation) ? $validation->getError('email') : ""?></span>							
								</div>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Name</label>
									<input id="name" type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" placeholder="Enter your name" required autofocus>
									<span class="text-danger"><?= isset($validation) ? $validation->getError('name') : ""?></span>							
								
								</div>
								<div class="mb-3">				
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" placeholder="Enter your password" required>
									<span class="text-danger"><?= isset($validation) ? $validation->getError('password') : ""?></span>															  
								</div>
                                <div class="mb-3">				
									<label class="mb-2 text-muted" for="confirmpassword">Confirm Password</label>
									<input id="confirmpassword" type="password" class="form-control" name="confirmpassword"value="<?= set_value('confirmpassword'); ?>" placeholder="Enter your password again" required>
									<span class="text-danger"><?= isset($validation) ? $validation->getError('confirmpassword') : ""?></span>															  
								</div>
								<button type="submit" class="btn btn-primary ms-auto">
									Sign Up
								</button>						
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Have an account? <a href="<?= site_url('signin'); ?>" class="text-dark">Sign In</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Link Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
