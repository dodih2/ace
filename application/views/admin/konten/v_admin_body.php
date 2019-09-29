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
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">

						<div class="page-header">
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<h3><strong>Grafik Kehadiran Mahasiswa TI</strong></h3>
								<div id="graph"></div>

								<h3><strong>Grafik Kehadiran Mahasiswa TM</strong></h3>
								<div id="graph2"></div>

								<h3><strong>Grafik Kehadiran Mahasiswa TP</strong></h3>
								<div id="graph3"></div>

								<h3><strong>Grafik Kehadiran Mahasiswa RPL</strong></h3>
								<div id="graph4"></div>

								<h3><strong>Grafik Kehadiran Mahasiswa Manufaktur</strong></h3>
								<div id="graph5"></div>
							<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<?php $this->load->view('admin/footer') ?>
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
			<script>
			Morris.Bar({
				element: 'graph2',
				data: <?php echo $data2;?>,
				xkey: 'kelas_nama',
				ykeys: ['hadir','alpa','izin'	],
				labels: ['Hadir','Alpa','izin'],
				});
			</script>
			<script>
			Morris.Bar({
				element: 'graph3',
				data: <?php echo $data3;?>,
				xkey: 'kelas_nama',
				ykeys: ['hadir','alpa','izin'],
				labels: ['Hadir','Alpa','izin'],
				});
			</script>
			<script>
			Morris.Bar({
				element: 'graph4',
				data: <?php echo $data4;?>,
				xkey: 'kelas_nama',
				ykeys: ['hadir','alpa','izin'],
				labels: ['Hadir','Alpa','izin'],
				});
			</script>
			<script>
			Morris.Bar({
				element: 'graph5',
				data: <?php echo $data5;?>,
				xkey: 'kelas_nama',
				ykeys: ['hadir','alpa','izin'],
				labels: ['Hadir','Alpa','izin'],
				});
			</script>
	</body>
</html>
