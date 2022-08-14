<!-- Content -->
<div id="content">
	<nav class="navbar navbar-default" style="margin-bottom: 0px">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
				<li class="<?=($type=='inv_report')?'active_sec':''?>">
					<a href="<?=base_url()?>invoice_report">Invoice report</a>
				</li>

				<li class="<?=($type=='inv_item_report')?'active_sec':''?>"	>
					<a href="<?=base_url()?>invoice_item_report">Invoice item report</a>
				</li>

				<li class="<?=($type=='item_report')?'active_sec':''?>"	>
					<a href="<?=base_url()?>item_report">Item report</a>
				</li>
			</ul>
		</div>
	</nav>
