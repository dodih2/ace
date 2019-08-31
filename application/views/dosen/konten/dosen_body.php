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
								<?php
										if(!empty($data)){
											foreach($data as $data){
													$nama[] = $data->kelas_nama;
													$hadir[] = (float) $data->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Mahasiswa</h2>
								<canvas id="canvas" width="1000" height="280"></canvas>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('dosen/footer') ?>
			<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
			<script>
								var lineChartData = {
										labels : <?php echo json_encode($nama);?>,
										datasets : [
												{
														fillColor: "rgba(60,141,188,0.9)",
														strokeColor: "rgba(60,141,188,0.8)",
														pointColor: "#3b8bba",
														pointStrokeColor: "#fff",
														pointHighlightFill: "#fff",
														pointHighlightStroke: "rgba(152,235,239,1)",
														data : <?php echo json_encode($hadir);?>
												}
										]
								}
						var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
				</script>

	</body>
</html>
