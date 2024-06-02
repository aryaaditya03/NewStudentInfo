<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
				<div class="card-header">
					<h6 class="mt-2 font-weight-bold">UPDATE PROFILE</h6>
				</div>

					<div class="card-body border">
						<?php echo $this->session->flashdata('messagePr');?>
						<form action="<?= base_url('admin/setting/edit_profile') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="username">Name</label>
								<input type="text" name="username" class="form-control <?= form_error('username') ? 'invalid' : '' ?>"
								value="<?= form_error('username') ? set_value('username') : $current_user->username ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							<div class="form-group mb-4">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
								value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>

							<div>
								<button type="submit" name="save" class="btn btn-outline-info float-right">Save Update</button>
							</div>
						</form>
					</div>
			</div>
	</div>
	</div>
</div>
