<div class="container-fluid">
	<div class="row">
		<div class="panel-body">
			<table id="customer_view" class="table table-striped table-bordered" style="width:100%">
				<thead>
				<tr>
					<th>Item code</th>
					<th>Item name</th>
					<th>Item category</th>
					<th>Item sub category</th>
					<th>Quantity</th>
					<th>Unit price</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($item as $item){ ?>
					<tr>
						<td><?=$item->item_code?></td>
						<td><?=$item->item_name?></td>
						<td><?=$item->category?></td>
						<td><?=$item->sub_category?></td>
						<td><?=$item->quantity?></td>
						<td><?=$item->unit_price?></td>
					</tr>
				<?php } ?>

				</tbody>
				</table>
		</div>
	</div>
</div>


