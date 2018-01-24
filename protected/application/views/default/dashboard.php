<div class="container-fluid">
	<div class="row ">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-body bg-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					A aperiam cupiditate dolore facere magnam, rerum sint velit 
					voluptate voluptates. <br>A assumenda consequuntur debitis eaque 
					est in ipsam iure molestiae quam consequuntur debitis eaque.
				</div>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Statistik (dalam pengembangan)</div>
				<div class="card-body p-0">
					<div class="p-4">
						<canvas id="line-chart" width="100%" height="20"></canvas>
					</div>

					<div class="justify-content-around mt-4 p-4 bg-light d-flex border-top d-md-down-none">
						<div class="text-center">
							<div class="text-muted small">Total Users</div>
							<div><?=$this->dante_model->count_row('users')?> users</div>
						</div>

						<div class="text-center">
							<div class="text-muted small">Total Group</div>
							<div><?=$this->dante_model->count_row('groups')?> group</div>													
						</div>
						
						<div class="text-center">
							<div class="text-muted small">Login Attempt</div>
							<div><?=$this->dante_model->count_row('login_attempts')?> records</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>