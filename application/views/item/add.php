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
				<form class="form-horizontal" action="<?=base_url()?>item_store" METHOD="post">
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="item_code">Item code :</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="item_code" name="item_code" placeholder="CS6656">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="item_name">Item name :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="item_name" name="item_name" placeholder="Nirosh">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="category">Item category :</label>
						<div class="col-sm-4">
							<select class="form-control" name="category">
								<?php
									foreach ($category as $cat){
										echo '<option value="'.$cat->id.'">'.$cat->category.'</option>';
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="sub_category">Item sub category :</label>
						<div class="col-sm-4">
							<select class="form-control" name="sub_category">
								<?php
								foreach ($subcategory as $subcat){
									echo '<option value="'.$subcat->id.'">'.$subcat->sub_category.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="quantity">Quantity :</label>
						<div class="col-sm-3">
							<input type="number" class="form-control" id="quantity" name="quantity" placeholder="2">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-2" for="unit_price">Unit price :</label>
						<div class="col-sm-3">
							<input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="10.25">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-4">
							<input type="submit" class="btn btn-success" value="Save">
							<input type="reset" class="btn btn-warning" value="Clear">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
