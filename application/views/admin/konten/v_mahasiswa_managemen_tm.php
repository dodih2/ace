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
								<a href="#">Managemen User</a>
							</li>
							<li class="active">Mahasiswa</li>
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
                          <th style="width:0.5%;">Nim</th>
                          <th style="width:0.5%;">Nama</th>
                          <th style="width:0.5%;">Jenis Kelamin</th>
                          <th style="width:0.5%;">Kelas</th>
													<th style="width:0.5%;">Semester</th>
                          <th style="width:25%;">Alamat</th>
                          <th style="width:0.5%;">Jurusan</th>
                          <th style="width:0.5%;">Email</th>
                          <th style="width:0.5%;">Action</th>
                        </tr>
                      </thead>
                    </table>
                </div>

                <!-- Modal Add Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/list_mahasiswa_control/simpantm' ?>" method="post">
                  <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Mahasiswa</h4>
                        </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <input type="number" name="data_nim" class="form-control" placeholder="NIM" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_nama" class="form-control" placeholder="Nama Lengkap" required>
                          </div>

													<div class="form-group">
														<select class="form-control" name="data_jk" placeholder="Jenis Kelamin" required>
																<option value="1" selected>Laki-laki</option>
																<option value="2">Perempuan</option>
														</select>
													</div>


													<div class="form-group">
                            <select class="form-control" name="kelas" placeholder="Kelas" required>

                              <?php foreach ($kelas->result() as $row): ?>
                                <option value="<?php echo $row->kelas_id; ?>"><?php echo $row->kelas_nama; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="number" name="data_semester" class="form-control" placeholder="Semester" required>
                          </div>

													<div class="form-group">
														<input type="text" name="data_alamat" class="form-control" placeholder="Alamat" required>
													</div>

                          <div class="form-group">
                            <input type="text" name="data_email" class="form-control" placeholder="Email" required>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" id="add-row" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Modal Update Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/list_mahasiswa_control/updatetm' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Update Produk</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <input disabled type="number" name="data_nim" class="form-control" placeholder="NIM" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_nama" class="form-control" placeholder="Nama Lengkap" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="data_jk" class="form-control" placeholder="Jenis Kelamin" required>
                          </div>

													<div class="form-group">
														<select class="form-control" name="jurusan" placeholder="Jurusan" required>
															<?php foreach ($jurusan->result() as $row): ?>
																<option value="<?php echo $row->id_jurusan; ?>"><?php echo $row->nama_jurusan; ?></option>
															<?php endforeach; ?>
														</select>
													</div>

													<div class="form-group">
                            <select class="form-control" name="kelas" placeholder="Kelas" required>
                              <?php foreach ($kelas->result() as $row): ?>
                                <option value="<?php echo $row->kelas_id; ?>"><?php echo $row->kelas_nama; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
													<div class="form-group">
                            <input type="number" name="data_semester" class="form-control" placeholder="Semester" required>
                          </div>
                          <div class="form-group">
                            <input type="text" name="data_alamat" class="form-control" placeholder="Alamat" required>
                          </div>



                          <div class="form-group">
                            <input type="text" name="data_email" class="form-control" placeholder="Email" required>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <button type="submit" id="add-row" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Modal Hapus Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/admin/list_mahasiswa_control/deletetm' ?>" method="post">
                  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="data_nim" class="form-control" placeholder="NIM" required>
                          <strong>Anda yakin mau menghapus record ini?</strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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
							<span class="blue bolder">Absensi</span>
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
            ajax: {"url": "<?php echo base_url().'index.php/admin/list_mahasiswa_control/get_mahasiswa_tm_json' ?>", "type": "POST"},
                  columns: [
                    {"data": "nim"},
                    {"data": "nama"},
                    {"data": "jenis_kelamin"},
                    {"data": "kelas_nama"},
										{"data": "semester"},
                    {"data": "alamat"},
                    {"data": "nama_jurusan"},
                    {"data": "email"},
                    {"data": "view"}
                  ],

            order: [[6, 'asc'],[0, 'asc'],[4, 'asc'],[3, 'asc'],[1, 'asc']],
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
            var nim=$(this).data('nim');
            var nama=$(this).data('nama');
						var semester=$(this).data('semester');
            var jk=$(this).data('jk');
            var alamat=$(this).data('alamat');
						var kelas=$(this).data('kelas');
            var jurusan=$(this).data('jurusan');
            var email=$(this).data('email');
            $('#ModalUpdate').modal('show');
            $('[name="data_nim"]').val(nim);
            $('[name="data_nama"]').val(nama);
						$('[name="data_semester"]').val(semester);
            $('[name="data_jk"]').val(jk);
            $('[name="data_alamat"]').val(alamat);
						$('[name="kelas"]').val(kelas);
            $('[name="jurusan"]').val(jurusan);
            $('[name="data_email"]').val(email);
          });
          // End Edit Records
          // get Hapus Records
          $('#mytable').on('click','.hapus_record', function(){
            var nim=$(this).data('nim');
            $('#ModalHapus').modal('show');
            $('[name="data_nim"]').val(nim);
          });
          // End Hapus Records
    });
    </script>
	</body>
</html>
