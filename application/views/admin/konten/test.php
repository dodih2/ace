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
								<a href="#">Managemen Data</a>
							</li>
							<li class="active">Jadwal</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
								Jadwal
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									List Jadwal
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
								<!-- PAGE CONTENT BEGINS -->
                <div class="col-xs-12">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Tambah jadwal</button>
                    <div class="hr hr-18 dotted hr-double"></div>
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
                          <th style="width:0.5%;">ID Hari</th>
                          <th style="width:0.5%;">Nama Hari</th>
                          <th style="width:0.5%;">Kode Matkul</th>
                          <th style="width:0.5%;">Kelas</th>
                          <th style="width:0.5%;">Semester</th>
                          <th style="width:0.5%;">Nik</th>
                          <th style="width:0.5%;">Jam Mulai</th>
													<th style="width:0.5%;">Jam Selesai</th>
													<th style="width:0.5%;">Jam Istirahat</th>
													<th style="width:0.5%;">Ruangan</th>
													<th style="width:0.5%;">Jurusan</th>
                          <th style="width:0.5%;">Action</th>
                        </tr>
                      </thead>
                    </table>
                </div>

                <!-- Modal Add Dosen -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/jadwal_control/simpan' ?>" method="post">
                  <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Add New</h4>
                        </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <input type="text" name="data_id" class="form-control" placeholder="Id Hari" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_nama" class="form-control" placeholder="Nama Hari" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_kode" class="form-control" placeholder="kode matkul" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_kelas" class="form-control" placeholder="kelas" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_semester" class="form-control" placeholder="semester" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_nik" class="form-control" placeholder="nik" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jamm" class="form-control" placeholder="jam mulai" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jams" class="form-control" placeholder="jam selesai" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jami" class="form-control" placeholder="jam istirahat" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_ruang" class="form-control" placeholder="Ruangan" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jurusan" class="form-control" placeholder="Jurusan" required>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="add-row" class="btn btn-success">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

								<!-- Modal Add Admin -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/jadwal_control/simpan' ?>" method="post">
                  <div class="modal fade" id="myModalAdd2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Add New</h4>
                        </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <input type="text" name="data_nik" class="form-control" placeholder="Nik" required>
                          </div>

													<div hidden="true" class="form-group">
														<input type="text" name="data_level" class="form-control" placeholder="Level" value="1" required>
													</div>

                          <div class="form-group">
                            <select class="form-control" name="data_jurusan" placeholder="Jurusan" required>

                              <option value="1">Teknik Informatika</option>
                              <option value="2">Teknik Pendingin</option>
                              <option value="3">Teknik Mesin</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_password" class="form-control" placeholder="Password" required>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="add-row" class="btn btn-success">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Modal Update Dosen -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/jadwal_control/update' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Update Dosen</h4>
                        </div>
                        <div class="modal-body">
													<div class="form-group">
                            <input type="text" name="data_id" class="form-control" placeholder="Id Hari" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_nama" class="form-control" placeholder="Nama Hari" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_kode" class="form-control" placeholder="kode matkul" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_kelas" class="form-control" placeholder="kelas" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_semester" class="form-control" placeholder="semester" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_nik" class="form-control" placeholder="nik" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jamm" class="form-control" placeholder="jam mulai" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jams" class="form-control" placeholder="jam selesai" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jami" class="form-control" placeholder="jam istirahat" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_ruang" class="form-control" placeholder="Ruangan" required>
                          </div>

													<div class="form-group">
                            <input type="text" name="data_jurusan" class="form-control" placeholder="Jurusan" required>
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

                <!-- Modal Hapus Dosen -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/jadwal_control/delete' ?>" method="post">
                  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Dosen</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="data_id" class="form-control" placeholder="Id hari" required>
                          <strong>Anda yakin mau menghapus record ini?</strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
							<span class="blue bolder">Presensi</span>
							&copy; 2019
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
							sEmptyTable		: "Tidak ada Data yang ditampilkan",
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

            ajax: {"url": "<?php echo base_url().'index.php/admin/jadwal_control/get_jadwal_json' ?>", "type": "POST"},
                  columns: [
                    {"data": "id_hari"},
                    {"data": "nama_hari"},
                    {"data": "kode_matkul"},
                    {"data": "kelas"},
                    {"data": "semester"},
                    {"data": "nik"},
                    {"data": "jam_mulai"},
										{"data": "jam_selesai"},
										{"data": "jam_istirahat"},
										{"data": "id_ruangan"},
										{"data": "id_jurusan"},
                    {"data": "view"}
                  ],

            order: [[1, 'asc']],

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
            var id=$(this).data('id_hari');
            var nama=$(this).data('nama_hari');
            var kode=$(this).data('kode_matkul');
            var kelas=$(this).data('kelas');
            var semester=$(this).data('semester');
            var nik=$(this).data('nik');
            var jamm=$(this).data('jam_mulai');
						var jams=$(this).data('jam_selesai');
						var jami=$(this).data('jam_istirahat');
						var ruang=$(this).data('id_ruangan');
						var jurusan=$(this).data('id_jurusan');
            $('#ModalUpdate').modal('show');
            $('[name="data_id"]').val(nik);
            $('[name="data_nama"]').val(nama);
            $('[name="data_kode"]').val(kode);
            $('[name="data_kelas"]').val(kelas);
            $('[name="data_semester"]').val(semester);
            $('[name="data_nik"]').val(nik);
            $('[name="data_jamm"]').val(jamm);
						$('[name="data_jams"]').val(jams);
						$('[name="data_jami"]').val(jami);
						$('[name="data_ruang"]').val(ruang);
						$('[name="data_jurusan"]').val(jurusan);
          });
          // End Edit Records
          // get Hapus Records
          $('#mytable').on('click','.hapus_record', function(){
            var id=$(this).data('id_hari');
            $('#ModalHapus').modal('show');
            $('[name="data_id"]').val(id);
          });
          // End Hapus Records
    });
    </script>
	</body>
</html>
