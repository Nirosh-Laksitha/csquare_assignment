<div class="container-fluid">
	<div class="row">
		<div class="panel-body">
			<form class="form-horizontal" action="<?=base_url()?>invoice_item_report" METHOD="post">
				<div class="row">
					<div class="col col-md-12" style="margin-bottom: 10px">
						<b>Search By date</b>
					</div>
					<div class="col col-md-4">
						<input type="date" class="form form-control" id="startDate" name="startDate" required>
					</div>
					<div class="col col-md-4">
						<input type="date" class="form form-control" id="endDate" name="endDate" required>
					</div>
					<div class="col col-md-4">
						<input type="submit" class="btn btn-primary" value="Search">
					</div>
				</div>
			</form>
			<br>
			<table id="customer_view" class="table table-striped table-bordered" style="width:100%">
				<thead>
				<tr>
					<th>Invoice number</th>
					<th>Date</th>
					<th>Customer</th>
					<th>Item Name - Code</th>
					<th>Category</th>
					<th>Unit Price</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($invoice_item_report as $inv){ ?>
					<tr>
						<td><?=$inv->invoice_no?></td>
						<td><?=$inv->date?></td>
						<td><?=$inv->customer_name?></td>
						<td><?=$inv->item?></td>
						<td><?=$inv->category?></td>
						<td><?=$inv->unit_price?></td>
					</tr>
				<?php } ?>

				</tbody>
				</table>
		</div>
	</div>
</div>


