

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login Page</title>
    <link rel="stylesheet" href="../css/all.css">
 </head>

<body>
	<section class="h-100">
		<div class="container h-100" style="margin-top: 100px;">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>

							<?php if(!empty(session()->getFlashdata(('fail')))) : ?>
									<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
								<?php endif ?>
								<?= csrf_field(); ?>


							<?php if(!empty(session()->getFlashdata(('success')))) : ?>
								<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
							<?php endif ?>

							<?php if(!empty(session()->getFlashdata(('update')))) : ?>
								<div class="alert alert-success"><?= session()->getFlashdata('update'); ?></div>
							<?php endif ?>
								

							<form method="POST" action="<?= base_url('signin/check') ?>"  class="needs-validation" novalidate="" autocomplete="off">
								<?= csrf_field(); ?>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email" required autofocus>								
									<span class="text-danger"><?= isset($validation) ? $validation->getError('email') : ""?></span>							
								</div>
								<div class="mb-3">				
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Enter your password" required>								  
									<span class="text-danger"><?= isset($validation) ? $validation->getError('password') : ""?></span>															  
								</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>						
							</form>
						</div>
						<div class="card-footer py-3 border-0">
						<div class="text-center" >
							<div>
							Don't have an account? <a href="<?= site_url('signup'); ?>" class="text-dark">Create One</a>
							</div>
							<div style="margin-left: 10px;">
							<a href="<?= base_url('forgotpassword'); ?>" class="text-dark">Forgot Password?</a>
							</div>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>