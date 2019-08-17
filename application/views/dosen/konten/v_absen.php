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
								<a href="#">Akademik</a>
							</li>
							<li class="active">Absen</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">


						<div class="page-header">
						</div><!-- /.page-header -->

						<div class="row">
								<!-- PAGE CONTENT BEGINS -->
                <div class="col-xs-12">
										<div class="center">
<h3>DAFTAR ABSEN MAHASISWA</h3>
										</div>
										<div id="pesan">

										</div>
										
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
													<th>NIM</th>
													<th>NAMA</th>
													<th>KELAS</th>
                          <th style="width:0.5%;">Action</th>
                        </tr>
                      </thead>
                    </table>
										<br>
										<div class="center">
										<h3>DAFTAR MAHASISWA YANG SUDAH ABSEN</h3>
										</div>
										<table class="table table-striped" id="mytable2">
											<thead>
												<tr>
													<th>NIK</th>
													<th>NAMA</th>
													<th>KELAS</th>
													<th>HADIR</th>
													<th>ALPA</th>
													<th>IZIN</th>
													<th>TELAT</th>
													<th>KETERANGAN</th>
													<th>TANGGAL</th>
													<th style="width:0.5%;">Action</th>
												</tr>
											</thead>
										</table>
                </div>

	                <!-- Modal Update Produk -->
								<form id="add-row-form" action="<?php echo base_url().'index.php/dosen/absen_control/simpan' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Update Absen</h4>
                        </div>
                        <div class="modal-body">
                          <!-- <div class="form-group">
                            <input type="text" name="data_id" class="form-control" placeholder="ID Absen" required>
                          </div>

													<div class="form-group">
														<input type="radio" name="data_hadir" id="hadir1" class="ace" value="1" />
														<span class="lbl">Hadir</span>
														<input type="radio" name="data_alpa" id="alpa1" class="ace" value="1" />
														<span class="lbl">Alpa</span>
														<input type="radio" name="data_izin" id="izin1" class="ace" value="1" />
														<span class="lbl">Izin</span>
													</div>


													<div class="form-group">
														<input type="text" name="data_keterangan" class="form-control" placeholder="keterangan" >
													</div>


													<div class="form-group">
														<input type="text" name="data_nik" class="form-control" placeholder="nik" value="" >
													</div>

													<div class="form-group">
														<input type="text" name="data_nim" class="form-control" placeholder="nim" >
													</div>

													<div class="form-group">
														<input type="text" name="data_kelas" class="form-control" placeholder="kelas" >
													</div>

													<div class="form-group">
														<input type="text" name="data_jadwal" class="form-control" placeholder="jadwal" >
													</div> -->

													<div class="form-group">
														<label>
															<span class="ace input-lg lbl bigger-100"> Nama &emsp;&emsp;&ensp;: </span>
															<input name="data_nama" type="text" class="ace input-lg" readonly />
														</label>
													</div>

													<div class="form-group">
														<span class="tab">&emsp;</span>
														<input type="radio" name="data_hadir" id="hadir1" class="ace input-lg" value="0" />
														<span class="ace lbl bigger-120"> Hadir</span>
														<span class="tab">&emsp;</span><span class="tab">&emsp;</span>
														<input type="radio" name="data_alpa" id="alpa1" class="ace input-lg" value="0" />
														<span class="lbl bigger-120">Alpa</span>
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

													<div class="form-group" hidden="true">
														<input type="text" name="data_nim" class="form-control" placeholder="nim" >
													</div>

													<div class="form-group" hidden="true">
														<input type="text" name="data_kelas" class="form-control" placeholder="kelas" >
													</div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="add-row" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

								<form id="add-row-form" action="<?php echo base_url().'index.php/dosen/absen_control/simpan2' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Update Absen</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="text" name="data_id" class="form-control" placeholder="ID Absen" required>
                          </div>

													<div class="form-group">
														<input type="text" name="data_keterangan" class="form-control" placeholder="Keterangan">
													</div>

													<div class="control-group">
														<div class="radio">
															<label>
																<input name="data_hadir2" id="hadir2" type="radio" class="ace input-lg" value="1" />
																<span class="lbl bigger-120"> Hadir</span>
															</label>
															<label>
																<input name="data_alpa2" id="alpa2" type="radio" class="ace input-lg" value="1" />
																<span class="lbl bigger-120"> Alpa</span>
															</label>
															<label>
																<input name="data_izin2" id="izin2" type="radio" class="ace input-lg" value="1" />
																<span class="lbl bigger-120"> Izin</span>
															</label>
														</div>
												</div>
                    	</div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="add-row" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Modal Hapus Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/dosen/absen_control/delete' ?>" method="post">
                  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Absen</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="data_id" class="form-control" placeholder="ID Absen" required>
                          <strong>Anda yakin mau menghapus ABSEN ini?</strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
								<!-- PAGE CONTENT ENDS -->
					</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>
					</div>
				</div>
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url('assets/template/back') ?>/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url('assets/template/back') ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/template/back') ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url('assets/template/back') ?>/js/bootstrap.min.js"></script>

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

      var table = $("#mytable").DataTable({
        initComplete: function(){
          var api = this.api();
          $('#mytable_filter input')
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
            processing: true,
            serverSide: true,
						"aLengthMenu": [[30, 50, 60, -1], [30, 50, 60, "All"]],
"iDisplayLength": 30,
            ajax: {"url": "<?php echo base_url().'index.php/dosen/absen_control/get_absen_json' ?>", "type": "POST"},
                  columns: [
                  //   {"data": "id_absen"},
                  //   {"data": "nik_id_id"},
									// 	{"data": "nama"},
									// 	{"data": "kelas_nama"},
									// 	{"data": "hadir",
									// 	render : function (data, type, row){
									// 		return data == '1' ? '<span class="badge badge-success"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
									// 	}
									// },
									// 	{"data": "alpa",
									// 	render : function (data, type, row){
									// 		return data == '1' ? '<span class="badge badge-danger"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
									// 	}
									//
									// },
									// 	{"data": "izin",
									// 	render : function (data, type, row){
									// 		return data == '1' ? '<span class="badge badge-info"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
									// 	}
									//
									// },
									// 	{"data": "keterangan"},
									// 	{"data": "nama_hari"},
                  //   {"data": "view"}
									{"data": "nim"},
									{"data": "nama"},
									{"data": "kelas_nama"},
									{"data": "view"}
                  ],

            order: [[0, 'asc']],
            rowCallback: function(row, data, iDisplayIndex){
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
            }
      });
			$('#table-filter').on('change', function(){
 			table.search(this.value).draw();
			});
          // end setup datatables
          // get edit records
          $('#mytable').on('click','.edit_record',function(){
            // var id=$(this).data('id_absen');
            // var hadir=$(this).data('hadir');
						// var alpa=$(this).data('alpa');
						// var izin=$(this).data('izin');
						// var keterangan=$(this).data('keterangan');
						// var nik=$(this).data('nik');
						// var nim=$(this).data('nim');
						// var kelas_id=$(this).data('kelas');
						// var jadwal_id=$(this).data('jadwal');
            // $('#ModalUpdate').modal('show');
            // $('[name="data_id"]').val(id);
            // $('[name="data_hadir"]').val(hadir);
						// $('[name="data_alpa"]').val(alpa);
						// $('[name="data_izin"]').val(izin);
						// $('[name="data_keterangan"]').val(keterangan);
						// $('[name="data_nik"]').val(nik);
						// $('[name="data_nim"]').val(nim);
						// $('[name="data_kelas"]').val(kelas_id);
						// $('[name="data_jadwal"]').val(jadwal_id);
						var nim=$(this).data('nim');
						var nama=$(this).data('nama');
						var kelas=$(this).data('kelas');
						 $('#ModalUpdate').modal('show');
						$('[name="data_nim"]').val(nim);
						$('[name="data_nama"]').val(nama);
						$('[name="data_kelas"]').val(kelas);
          });
          // End Edit Records
          // get Hapus Records
          $('#mytable').on('click','.hapus_record', function(){
            var id=$(this).data('id_absen');
            $('#ModalHapus').modal('show');
            $('[name="data_id"]').val(id);
          });
          // End Hapus Records
    });
		</script>
		<script>
		    $(document).ready(function(){
		        $("#hadir1").click(function(){
		        	var radioValue = $("input[name='data_hadir']:checked").val();
		            if(radioValue){
		               $("input[name='data_hadir']").val(1);
									 document.getElementById("alpa1").checked = false;
									 document.getElementById("izin1").checked = false;
		            }
		        });
						$("#alpa1").click(function(){
							var radioValue = $("input[name='data_alpa']:checked").val();
								if(radioValue){
									 $("input[name='data_alpa']").val(1);
									 document.getElementById("hadir1").checked = false;
									 document.getElementById("izin1").checked = false;
								}
						});
						$("#izin1").click(function(){
							var radioValue = $("input[name='data_izin']:checked").val();
								if(radioValue){
									 $("input[name='data_izin']").val(1);
									 document.getElementById("hadir1").checked = false;
									 document.getElementById("alpa1").checked = false;
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
						processing: true,
						serverSide: true,
						"aLengthMenu": [[30, 50, 60, -1], [30, 50, 60, "All"]],
"iDisplayLength": 30,
						ajax: {"url": "<?php echo base_url().'index.php/dosen/absen_control/get_absen_jsonn' ?>", "type": "POST"},
									columns: [
									  {"data": "nik_id_id"},
										{"data": "nama"},
										{"data": "kelas_nama"},
										{"data": "hadir",
										render : function (data, type, row){
											return data == '1' ? '<span class="badge badge-success"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
										}
									},
										{"data": "alpa",
										render : function (data, type, row){
											return data == '1' ? '<span class="badge badge-danger"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
										}

									},
										{"data": "izin",
										render : function (data, type, row){
											return data == '1' ? '<span class="badge badge-info"><label class="glyphicon glyphicon-ok"></label></span>' : '<span></span>'
										}

									},
										{"data": "ket_telat"},
										{"data": "keterangan"},
										{"data": "tanggal"},
										{"data": "view"}
									],

						order: [[0, 'asc']],
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
						var kelas_id=$(this).data('kelas');
						var jadwal_id=$(this).data('jadwal');
						$('#ModalUpdate2').modal('show');
						$('[name="data_id"]').val(id);
						$('[name="data_keterangan"]').val(keterangan);
						$('[name="data_nik"]').val(nik);
						$('[name="data_nim"]').val(nim);
						$('[name="data_kelas"]').val(kelas_id);
						$('[name="data_jadwal"]').val(jadwal_id);
					});
					// End Edit Records
		});
		</script>

		<script>
				$(document).ready(function(){
						$("#hadir2").click(function(){
							var radioValue = $("input[name='data_hadir2']:checked").val();
								if(radioValue){
									 $("input[name='data_hadir2']").val(1);
									 document.getElementById("alpa2").checked = false;
									 document.getElementById("izin2").checked = false;
								}
						});
						$("#alpa2").click(function(){
							var radioValue = $("input[name='data_alpa2']:checked").val();
								if(radioValue){
									 $("input[name='data_alpa2']").val(1);
									 document.getElementById("hadir2").checked = false;
									 document.getElementById("izin2").checked = false;
								}
						});
						$("#izin2").click(function(){
							var radioValue = $("input[name='data_izin2']:checked").val();
								if(radioValue){
									 $("input[name='data_izin2']").val(1);
									 document.getElementById("hadir2").checked = false;
									 document.getElementById("alpa2").checked = false;
								}
						});

				});
		</script>
		<script>
		<?php foreach ($jadwal->result() as $row): ?>
			var jammulai = "<?php echo $row->jam_mulai; ?>";
			var a = jammulai.split(':');
			var seconds = (+a[0]) * 60 * 60 + (a[1]) * 60 + (+a[2]);

			var jamselesai = "<?php echo $row->jam_selesai; ?>";
			var b = jamselesai.split(':');
			var seconds2 = (+b[0]) * 60 * 60 + (b[1]) * 60 + (+b[2]);

			var totalwaktu = seconds2 - seconds;

		<?php endforeach; ?>
			var url = "<?php echo base_url().'index.php/dosen/absen_control/simpan_otomatis' ?>";
			var count = seconds;
			function countDown(){
				if (count > 0) {
					count--;
					var waktu = count + 1;
					$('#pesan').html('anda akan pergi ke' + url + 'dalam' + waktu + 'detik.');
					setTimeout("countDown()", 1000);
				} else{
					window.location.href = url;
				}
			}
			countDown();
		</script>
	</body>
</html>
