

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="just login page">
	<title>Forgot Password</title>
    <?= link_tag('assets/all.css') ?>
 </head>

<body>
	<section class="h-100">
		<div class="container h-100" style="margin-top: 100px;">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Forgot Password?</h1>

							<?php if(!empty(session()->getFlashdata(('fail')))) : ?>
									<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
								<?php endif ?>
								<?= csrf_field(); ?>
							<?php if(!empty(session()->getFlashdata(('success')))) : ?>
								<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
							<?php endif ?>
								
							<form method="POST" action="<?= base_url('forgotpassword/check') ?>"  class="needs-validation" novalidate="" autocomplete="off">
								<?= csrf_field(); ?>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email" required autofocus>								
									<span class="text-danger"><?= isset($validation) ? $validation->getError('email') : ""?></span>							
								</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Enter
									</button>
									<div style="margin-top: 20px;">
										<a href="<?= site_url('signin'); ?>" class="text-dark">Sign In</a>
									</div>					
							</form>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>