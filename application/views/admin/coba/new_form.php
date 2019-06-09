
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
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <div class="card mb-3">
                  <div class="card-header">
                    <a href="<?php echo site_url('admin/test/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                  </div>
                  <div class="card-body">

                    <form action="<?php base_url('admin/test/add') ?>" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="nik">Nik*</label>
                        <input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
                         type="text" name="nik" placeholder="Nik" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nik') ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nama">Nama*</label>
                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                         type="text" name="nama" placeholder="Nama" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nama') ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="password">Password*</label>
                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                         type="text" name="password" placeholder="Password" />
                        <div class="invalid-feedback">
                          <?php echo form_error('password') ?>
                        </div>
                      </div>


                      <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>

                  </div>

                  <div class="card-footer small text-muted">
                    * required fields
                  </div>


                </div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/footer') ?>
	</body>
</html>
