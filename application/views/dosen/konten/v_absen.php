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
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Tambah</button>
                    <div class="hr hr-18 dotted hr-double"></div>
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
                          <th>ID Absen</th>
													<th>NIK</th>
													<th>NIM</th>
													<th>KELAS</th>
													<th>JURUSAN</th>
													<th>RUANGAN</th>
													<th>MATKUL</th>
                          <th>HADIR</th>
													<th>ALPA</th>
													<th>IZIN</th>
													<th>TELAT</th>
													<th>KETERANGAN</th>
													<th>WAKTU</th>
                          <th style="width:0.5%;">Action</th>
                        </tr>
                      </thead>
                    </table>
                </div>

                <!-- Modal Add Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/dosen/absen_control/simpan' ?>" method="post">
                  <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Absen</h4>
                        </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <input type="text" name="data_id" class="form-control" placeholder="ID ABSEN" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_hadir" class="form-control" placeholder="HADIR" required>
                          </div>

													<div class="form-group">
														<input type="text" name="data_nik" class="form-control" placeholder="NIK" required>
													</div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="submit" id="add-row" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

	                <!-- Modal Update Produk -->
								<form id="add-row-form" action="<?php echo base_url().'index.php/dosen/absen_control/update' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
														<input type="radio" name="data_hadir" id="hadir1" class="ace" value="1" />
														<span class="lbl">Hadir</span>
														<input type="radio" name="data_alpa" id="alpa1" class="ace" value="1" />
														<span class="lbl">Alpa</span>
														<input type="radio" name="data_izin" id="izin1" class="ace" value="1" />
														<span class="lbl">Izin</span>
													</div>

													<div class="form-group">
														<input type="text" name="data_kettelat" class="form-control" placeholder="ket telat" >
													</div>

													<div class="form-group">
														<input type="text" name="data_keterangan" class="form-control" placeholder="keterangan" >
													</div>

													<div class="form-group">
														<input type="text" name="data_waktu" class="form-control" placeholder="waktu" >
													</div>

													<div class="form-group">
														<input type="text" name="data_nik" class="form-control" placeholder="nik" >
													</div>

													<div class="form-group">
														<input type="text" name="data_nim" class="form-control" placeholder="nim" >
													</div>

													<div class="form-group">
														<input type="text" name="data_kelasid" class="form-control" placeholder="kelas" >
													</div>

													<div class="form-group">
														<input type="text" name="data_jurusanid" class="form-control" placeholder="jurusan" >
													</div>

													<div class="form-group">
														<input type="text" name="data_ruanganid" class="form-control" placeholder="ruangan" >
													</div>

													<div class="form-group">
														<input type="text" name="data_matkul" class="form-control" placeholder="matkul" >
													</div>

													<div class="form-group">
														<input type="text" name="data_tanggal" class="form-control" placeholder="tanggal" >
													</div>

													<div class="form-group">
														<input type="text" name="data_hari" class="form-control" placeholder="Hari" >
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

      var table = $("#mytable").dataTable({
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
                    {"data": "id_absen"},
                    {"data": "nik"},
										{"data": "nim"},
										{"data": "kelas_id"},
										{"data": "jurusan_id"},
										{"data": "ruangan_id"},
										{"data": "kode_matkul"},
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
										{"data": "waktu"},
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
          // end setup datatables
          // get edit records
          $('#mytable').on('click','.edit_record',function(){
            var id=$(this).data('id_absen');
            var hadir=$(this).data('hadir');
						var alpa=$(this).data('alpa');
						var izin=$(this).data('izin');
						var ket_telat=$(this).data('ket_telat');
						var keterangan=$(this).data('keterangan');
						var waktu=$(this).data('waktu');
						var nik=$(this).data('nik');
						var nim=$(this).data('nim');
						var kelas_id=$(this).data('kelas_id');
						var jurusan_id=$(this).data('jurusan_id');
						var ruangan_id=$(this).data('ruangan_id');
						var kode_matkul=$(this).data('kode_matkul');
						var tanggal=$(this).data('tanggal');
						var hari=$(this).data('hari');
            $('#ModalUpdate').modal('show');
            $('[name="data_id"]').val(id);
            $('[name="data_hadir"]').val(hadir);
						$('[name="data_alpa"]').val(alpa);
						$('[name="data_izin"]').val(izin);
						$('[name="data_kettelat"]').val(ket_telat);
						$('[name="data_keterangan"]').val(keterangan);
						$('[name="data_waktu"]').val(waktu);
						$('[name="data_nik"]').val(nik);
						$('[name="data_nim"]').val(nim);
						$('[name="data_kelas_id"]').val(kelas_id);
						$('[name="data_jurusan_id"]').val(jurusan_id);
						$('[name="data_ruangan_id"]').val(ruangan_id);
						$('[name="data_kode_matkul"]').val(kode_matkul);
						$('[name="data_tanggal"]').val(tanggal);
						$('[name="data_hari"]').val(hari);
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
	</body>
</html>
