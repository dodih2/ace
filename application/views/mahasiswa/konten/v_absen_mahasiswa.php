<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Mahasiswa</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url('assets/template/back') ?>/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url('assets/template/back') ?>/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url('assets/template/back') ?>/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url('assets/template/back') ?>/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="page-header">
							<h1>Presensi Mahasiswa</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<a href="<?php echo base_url('index.php/mahasiswa/body_control') ?>">
									<button class="btn btn-danger btn-sm">
																					<i class="ace-icon fa fa-reply icon-only"></i>
																				</button>

								</a>
								<form id="add-row-form" action="<?php echo base_url().'index.php/mahasiswa/absen_control/simpan' ?>" method="post">
													<div class="form-group">
														<label>
															<span class="ace input-lg lbl bigger-100"> Mata Kuliah: </span>
																	<?php foreach ($jadwal->result() as $row): ?>
															<input name="data_nama" type="textarea" class="ace input-lg" value="<?php echo $row->nama_matkul; ?>" readonly required />
															<?php endforeach; ?>
														</label>
													</div>

													<div class="form-group center" >
														<span class="tab">&emsp;</span>
														<input type="radio" name="data_hadir" id="hadir1" class="ace input-lg" value="0" />
														<span class="ace lbl bigger-120"> Hadir</span>
														<span class="tab">&emsp;</span><span class="tab">&emsp;</span>
														<span class="tab">&emsp;</span><span class="tab">&emsp;</span>
														<input type="radio" name="data_izin" id="izin1" class="ace input-lg" value="0" />
														<span class="lbl bigger-120">Izin</span>
													</div>

													<div class="form-group">
														<label>
															<span class="ace input-lg lbl bigger-100"> Keterangan : </span>
															<input  name="data_keterangan" id="form-field-11" type="textarea"  class="limited ace input-lg"/>
														</label>
													</div>
													<div class="form-group" hidden>
													<select class="form-control" name="data_nik">
														<?php foreach ($jadwal->result() as $row): ?>
															<option value="<?php echo $row->nik_id; ?>"><?php echo $row->nik_id; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												<div class="form-group" hidden>
													<select class="form-control" name="data_matkul">
														<?php foreach ($jadwal->result() as $row): ?>
															<option value="<?php echo $row->id_matkul; ?>"><?php echo $row->id_matkul; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												<div class="form-group center">
																										<button type="submit" id="add-row" class="btn btn-success">ABSEN</button>
												</div>

								</form>

								<div class="col-xs-12">
										<div class="center">
										<br>
										<div class="center">
										</div>
										<table class="table table-striped" id="mytable2">
											<thead>
												<tr>
													<th></th>
													<th></th>
												</tr>
											</thead>
										</table>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url('assets/template/back') ?>/js/jquery-2.1.4.min.js"></script>

				<!-- page specific plugin scripts -->
				<script src="<?php echo base_url('assets/template/back') ?>/js/jquery.dataTables.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/jquery.dataTables.bootstrap.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/dataTables.buttons.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/buttons.flash.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/buttons.html5.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/buttons.print.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/buttons.colVis.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/dataTables.select.min.js"></script>

				<!-- ace scripts -->
				<script src="<?php echo base_url('assets/template/back') ?>/js/ace-elements.min.js"></script>
				<script src="<?php echo base_url('assets/template/back') ?>/js/ace.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url('assets/template/back') ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/template/back') ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url('assets/template/back') ?>/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?php echo base_url('assets/template/back') ?>/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url('assets/template/back') ?>/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-change-style').on(ace.click_event, function() {
					var toggler = $('#menu-toggler');
					var fixed = toggler.hasClass('fixed');
					var display = toggler.hasClass('display');

					if(toggler.closest('.navbar').length == 1) {
						$('#menu-toggler').remove();
						toggler = $('#sidebar').before('<a id="menu-toggler" data-target="#sidebar" class="menu-toggler" href="#">\
							<span class="sr-only">Toggle sidebar</span>\
							<span class="toggler-text"></span>\
						 </a>').prev();

						 var ace_sidebar = $('#sidebar').ace_sidebar('ref');
						 ace_sidebar.set('mobile_style', 2);

						 var icon = $(this).children().detach();
						 $(this).text('Hide older Ace toggle button').prepend(icon);

						 $('#id-push-content').closest('div').hide();
						 $('#id-push-content').removeAttr('checked');
						 $('.sidebar').removeClass('push_away');
					 } else {
						$('#menu-toggler').remove();
						toggler = $('.navbar-brand').before('<button data-target="#sidebar" id="menu-toggler" class="three-bars pull-left menu-toggler navbar-toggle" type="button">\
							<span class="sr-only">Toggle sidebar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>\
						</button>').prev();

						 var ace_sidebar = $('#sidebar').ace_sidebar('ref');
						 ace_sidebar.set('mobile_style', 1);

						var icon = $(this).children().detach();
						$(this).text('Show older Ace toggle button').prepend(icon);

						$('#id-push-content').closest('div').show();
					 }

					 if(fixed) toggler.addClass('fixed');
					 if(display) toggler.addClass('display');

					 $('.sidebar[data-sidebar-hover=true]').ace_sidebar_hover('reset');
					 $('.sidebar[data-sidebar-scroll=true]').ace_sidebar_scroll('reset');

					 return false;
				});

				$('#id-push-content').removeAttr('checked').on('click', function() {
					$('.sidebar').toggleClass('push_away');
				});
			});
		</script>
		<script>
		    $(document).ready(function(){
		        $("#hadir1").click(function(){
		        	var radioValue = $("input[name='data_hadir']:checked").val();
		            if(radioValue){
		               $("input[name='data_hadir']").val(1);
									 document.getElementById("izin1").checked = false;
		            }
		        });
						$("#izin1").click(function(){
							var radioValue = $("input[name='data_izin']:checked").val();
								if(radioValue){
									 $("input[name='data_izin']").val(1);
									 document.getElementById("hadir1").checked = false;
								}
						});

		    });
		</script>

		<script>
		$(document).ready(function(){
			// setup datatable
			$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
			{
				return {
					"iStart": oSettings._iDisplayStart,
					"iEnd" : oSettings.fnDisplayEnd(),
					"iLength": oSettings._iDisplayLength,
					"iTotal": oSettings.fnRecordsTotal(),
					"iFilteredTotal": oSettings.fnRecordsDisplay(),
					"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
					"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
				};
			};

			var tablel = $("#mytable2").DataTable({
				initComplete: function(){
					var api = this.api();
					$('#mytable2_filter input')
						.off('.DT')
						.on('input.DT', function(){
							api.search(this.value).draw();
						});
				},
						oLanguage: {
							sLengthMenu		: "Tampilkan _MENU_ data per halaman",
							sProcessing		: "Memuat...",
							sInfo					: "Tampilkan data _START_ sampai _END_ dari _TOTAL_ data",
							sEmptyTable		: "Tidak ada Data yang tersedia pada tabel ini",
							sInfoEmpty		: "Tampilkan data 0 sampai 0 dari 0 data",
							sSearch				: "Cari Data:",
							sInfoFiltered	: "(disaring dari _MAX_ entri keseluruhan)",
							sZeroRecords	:  "Tidak ditemukan data yang sesuai",
							oPaginate			: {
								"sPrevious": "Sebelumnya",
								"sNext"		 : "Selanjutnya"}
				},
				paging : false,
				info : false,
				searching : false,
						processing: true,
						serverSide: true,
						"aLengthMenu": [[30, 50, 60, -1], [30, 50, 60, "All"]],
"iDisplayLength": 30,
						ajax: {"url": "<?php echo base_url().'index.php/mahasiswa/absen_control/get_absen_jsonn' ?>", "type": "POST"},
									columns: [
										{"data": "tanggal"},
										{"data": "absen_konfirmasi",
										render : function (data, type, row){
											switch (data) {
												case '0':	return '<span class="badge badge-success"><label class="glyphicon glyphicon-ok">Konfirmasi</label></span>'; break;
												case '1':	return '<span class="badge badge-success"><label class="glyphicon glyphicon-ok">Konfirmasi</label></span>'; break;
												default:

											}

										}
									}
									],

						order: [[0, 'desc']],
						rowCallback: function(row, data, iDisplayIndex){
							var info = this.fnPagingInfo();
							var page = info.iPage;
							var length = info.iLength;
							$('td:eq(0)', row).html();
						}
			});
			$('#table2-filter').on('change', function(){
			table.search(this.value).draw();
			});
					// end setup datatables
					// get edit records
					$('#mytable2').on('click','.edit_absen',function(){
						var id=$(this).data('id_absen');
						var keterangan=$(this).data('keterangan');
						var nik=$(this).data('nik');
						var nim=$(this).data('nim');
						var nama=$(this).data('nama');
						var kelas_id=$(this).data('kelas');
						var jadwal_id=$(this).data('jadwal');
						$('#ModalUpdate2').modal('show');
						$('[name="data_id"]').val(id);
						$('[name="data_keterangan"]').val(keterangan);
						$('[name="data_nik"]').val(nik);
						$('[name="data_nim"]').val(nim);
						$('[name="data_nama"]').val(nama);
						$('[name="data_kelas"]').val(kelas_id);
						$('[name="data_jadwal"]').val(jadwal_id);
					});
					// End Edit Records
		});
		</script>
	</body>
</html>
