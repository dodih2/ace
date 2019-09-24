<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('dosen/header') ?>

	<body class="no-skin">
		<?php $this->load->view('dosen/navbar') ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php $this->load->view('dosen/sidebar') ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">

						<div class="page-header">
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<h2><strong>Grafik Kehadiran Mahasiswa</strong></h2>
								<div id="graph"></div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('dosen/footer') ?>
			<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
			<script>
				Morris.Bar({
					element: 'graph',
					data: <?php echo $data;?>,
					xkey: 'kelas_nama',
					ykeys: ['hadir','alpa','izin'],
					labels: ['Hadir','Alpa','izin'],
					});
			</script>
	</body>
</html>
