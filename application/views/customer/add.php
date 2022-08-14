<div class="container-fluid">
	<div class="row">
			<div class="panel-body">
				<?php
				if (empty(validation_errors()) && isset($status)){
					echo $status;
				}else{
					echo validation_errors('<div class="alert alert-danger">','</div>');
				}
				?>
				<form class="form-horizontal" action="<?=base_url()?>customer_register" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="title">Title :</label>
						<div class="col-sm-2">
							<select class="form-control" id="title" name="title">
								<option>Mr</option>
								<option>Mrs</option>
								<option>Miss</option>
								<option>Dr</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="first_name">First name :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Saman ">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="middle_name">Middle name :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Shantha ">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="last_name">Last name :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Kumara ">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="number">Contact number :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="number" name="number" placeholder="0772085695">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="district">District :</label>
						<div class="col-sm-2">
							<select class="form-control" id="district" name="district">
								<?php foreach ($district as $district){
								echo '<option value="'.$district->id.'">'.$district->district.'</option>';
								 } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-4">
							<input type="submit" class="btn btn-success" value="Register">
							<input type="reset" class="btn btn-warning" value="Clear">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
