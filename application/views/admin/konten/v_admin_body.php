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
								<?php
										if(!empty($data)){
											foreach($data as $data){
													$nama[] = $data->kelas_nama;
													$hadir[] = (float) $data->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Teknik Informatika</h2>
								<canvas id="canvas" width="1000" height="280"></canvas>

								<?php
										if(!empty($data2)){
											foreach($data2 as $data2){
													$nama2[] = $data2->kelas_nama;
													$hadir2[] = (float) $data2->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Teknik Mesin</h2>
								<canvas id="canvas2" width="1000" height="280"></canvas>

								<?php
										if(!empty($data3)){
											foreach($data3 as $data3){
													$nama3[] = $data3->kelas_nama;
													$hadir3[] = (float) $data3->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Teknik Pendingin</h2>
								<canvas id="canvas3" width="1000" height="280"></canvas>

								<?php
										if(!empty($data4)){
											foreach($data4 as $data4){
													$nama4[] = $data4->kelas_nama;
													$hadir4[] = (float) $data4->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Teknik Rekayasa Perangkat Lunak</h2>
								<canvas id="canvas4" width="1000" height="280"></canvas>

								<?php
										if(!empty($data5)){
											foreach($data5 as $data5){
													$nama5[] = $data5->kelas_nama;
													$hadir5[] = (float) $data5->hadir;
											}
										}
									?>
								<h2>Grafik Kehadiran Teknik Manufaktur</h2>
								<canvas id="canvas5" width="1000" height="280"></canvas>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/footer') ?>
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

				<script>
									var lineChartData = {
											labels : <?php echo json_encode($nama2); ?>,
											datasets : [
													{
															fillColor: "rgba(60,141,188,0.9)",
															strokeColor: "rgba(60,141,188,0.8)",
															pointColor: "#3b8bba",
															pointStrokeColor: "#fff",
															pointHighlightFill: "#fff",
															pointHighlightStroke: "rgba(152,235,239,1)",
															data : <?php echo json_encode($hadir2);?>
													}
											]
									}
							var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Line(lineChartData);
					</script>

					<script>
										var lineChartData = {
												labels : <?php echo json_encode($nama3); ?>,
												datasets : [
														{
																fillColor: "rgba(60,141,188,0.9)",
																strokeColor: "rgba(60,141,188,0.8)",
																pointColor: "#3b8bba",
																pointStrokeColor: "#fff",
																pointHighlightFill: "#fff",
																pointHighlightStroke: "rgba(152,235,239,1)",
																data : <?php echo json_encode($hadir3);?>
														}
												]
										}
								var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Line(lineChartData);
						</script>

						<script>
											var lineChartData = {
													labels : <?php echo json_encode($nama4);?>,
													datasets : [
															{
																	fillColor: "rgba(60,141,188,0.9)",
																	strokeColor: "rgba(60,141,188,0.8)",
																	pointColor: "#3b8bba",
																	pointStrokeColor: "#fff",
																	pointHighlightFill: "#fff",
																	pointHighlightStroke: "rgba(152,235,239,1)",
																	data : <?php echo json_encode($hadir4);?>
															}
													]
											}
									var myLine = new Chart(document.getElementById("canvas4").getContext("2d")).Line(lineChartData);
							</script>

							<script>
												var lineChartData = {
														labels : <?php echo json_encode($nama5);?>,
														datasets : [
																{
																		fillColor: "rgba(60,141,188,0.9)",
																		strokeColor: "rgba(60,141,188,0.8)",
																		pointColor: "#3b8bba",
																		pointStrokeColor: "#fff",
																		pointHighlightFill: "#fff",
																		pointHighlightStroke: "rgba(152,235,239,1)",
																		data : <?php echo json_encode($hadir5);?>
																}
														]
												}
										var myLine = new Chart(document.getElementById("canvas5").getContext("2d")).Line(lineChartData);
								</script>
	</body>
</html>
