<div class="container-fluid">
	<div class="row">
		<div class="panel-body">
			<form class="form-horizontal" action="<?=base_url()?>invoice_report" METHOD="post">
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
					<th>Customer district</th>
					<th>Item count</th>
					<th>Invoice amount</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($invoice_report as $inv){ ?>
					<tr>
						<td><?=$inv->invoice_no?></td>
						<td><?=$inv->date?></td>
						<td><?=$inv->first_name?></td>
						<td><?=$inv->district?></td>
						<td><?=$inv->item_count?></td>
						<td><?=$inv->amount?></td>
					</tr>
				<?php } ?>

				</tbody>
				</table>
		</div>
	</div>
</div>


