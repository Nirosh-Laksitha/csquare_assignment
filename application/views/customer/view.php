<div class="container-fluid">
	<div class="row">
		<div class="panel-body">
			<table id="customer_view" class="table table-striped table-bordered" style="width:100%">
				<thead>
				<tr>
					<th>Title</th>
					<th>First name</th>
					<th>Middle name</th>
					<th>Last name</th>
					<th>Contact number</th>
					<th>District</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($customer as $cus){ ?>
					<tr>
						<td><?=$cus->title?></td>
						<td><?=$cus->first_name?></td>
						<td><?=$cus->middle_name?></td>
						<td><?=$cus->last_name?></td>
						<td><?=$cus->contact_no?></td>
						<td><?=$cus->district?></td>
					</tr>
				<?php } ?>
				</tbody>
				</table>
		</div>
	</div>
</div>


