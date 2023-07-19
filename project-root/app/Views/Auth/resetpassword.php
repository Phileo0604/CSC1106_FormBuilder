

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="just login page">
	<title>Reset Password</title>
    <?= link_tag('assets/all.css') ?>
 </head>

<body>
	<section class="h-100">
		<div class="container h-100" style="margin-top: 100px;">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>

							<?php if(isset($error)) : ?>
									<div class="alert alert-danger"><?= $error ?></div>
							<?php endif ?>


							<?= csrf_field(); ?>

                            <?php if(!isset($error)) : ?>
                                <form method="POST" action="<?= base_url('update/' . $token) ?>"  class="needs-validation" novalidate="" autocomplete="off">
								<?= csrf_field(); ?>

                                <div class="mb-3">				
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" placeholder="Enter new password" required>
								</div>
                                <div class="mb-3">				
									<label class="mb-2 text-muted" for="confirmpassword">Confirm Password</label>
									<input id="confirmpassword" type="password" class="form-control" name="confirmpassword"value="<?= set_value('confirmpassword'); ?>" placeholder="Enter new password again" required>
								
                                <button type="submit" class="btn btn-primary ms-auto" style="margin-top: 20px;">
                                    Enter
                                </button>						
							</form>
                    
                            <?php endif ?>

						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>