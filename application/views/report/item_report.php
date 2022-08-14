<div class="container-fluid">
	<div class="row">
		<div class="panel-body">
			<table id="customer_view" class="table table-striped table-bordered" style="width:100%">
				<thead>
				<tr>
					<th>Item Name</th>
					<th>Category</th>
					<th>Sub Category</th>
					<th>Quantity</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($item_report as $inv){ ?>
					<tr>
						<td><?=$inv->name?></td>
						<td><?=$inv->category?></td>
						<td><?=$inv->sub_category?></td>
						<td><?=$inv->qty?></td>
					</tr>
				<?php } ?>

				</tbody>
				</table>
		</div>
	</div>
</div>


