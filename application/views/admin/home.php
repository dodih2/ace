
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/header') ?>

	<body class="no-skin">
		<?php $this->load->view('admin/navbar') ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php $this->load->view('admin/sidebar') ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="card mb-3">
									<div class="card-header">
										<a href="<?php echo site_url('admin/test/add') ?>"><i class="fas fa-plus"></i> Add New</a>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($user_dosen as $user): ?>
													<tr>
														<td width="150">
															<?php echo $user->nama ?>
														</td>
														<td>
															<?php echo $user->j_k ?>
														</td>

														<td width="250">
															<a href="<?php echo site_url('admin/test/edit/'.$user->nik) ?>"
															 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
															<a onclick="deleteConfirm('<?php echo site_url('admin/test/delete/'.$user->nik) ?>')"
															 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
														</td>
													</tr>
													<?php endforeach; ?>

												</tbody>
											</table>
										</div>
									</div>
								</div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php $this->load->view("admin/coba/modal.php") ?>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
			<?php $this->load->view('admin/footer') ?>

	</body>
</html>
