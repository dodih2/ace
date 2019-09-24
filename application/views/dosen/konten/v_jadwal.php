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
								<a href="#">Managemen Data</a>
							</li>
							<li class="active">Jadwal</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">


						<div class="page-header">
						</div><!-- /.page-header -->

						<div class="row">
								<!-- PAGE CONTENT BEGINS -->

                <div class="col-xs-12">
									<h2><strong>Jadwal Perkuliahan</strong></h2>
                    <div class="hr hr-18 dotted hr-double"></div>
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
                          <th style="width:0.5%;">Nama Hari</th>
                          <th style="width:0.5%;">Kode Matkul</th>
                          <th style="width:0.5%;">Kelas</th>
                          <th style="width:0.5%;">Jam Mulai</th>
													<th style="width:0.5%;">Jam Selesai</th>
													<th style="width:0.5%;">Toleransi</th>
													<th style="width:0.5%;">Ruangan</th>
													<th style="width:0.5%;">Jurusan</th>
													<th style="width:0.5%;">Aksi</th>
                        </tr>
                      </thead>
                    </table>

										<!-- Modal Update Jadwal -->
										<form id="add-row-form" action="<?php echo base_url().'index.php/dosen/jadwal_control/update' ?>" method="post">
											<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
															<h4 class="modal-title" id="myModalLabel">Toleransi</h4>
														</div>
														<div class="modal-body">
															<div class="form-group" hidden="true">
																<input type="text" name="data_id" class="form-control" placeholder="Id Hari" required>
															</div>

															<div class="form-group">
																<input type="time" name="toleransi" class="form-control" required>
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

                </div>
								<!-- PAGE CONTENT ENDS -->
					</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Absensi Mahasiswa</span>
							&copy; <?php echo date('Y'); ?>
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

            ajax: {"url": "<?php echo base_url().'index.php/dosen/jadwal_control/get_jadwal_json' ?>", "type": "POST"},
                  columns: [
                    {"data": "nama_hari",
										render : function (data, type, row){
											switch(data) {
					               case 'Mon' : return 'Senin'; break;
												 case 'Tue' : return 'Selasa'; break;
												 case 'Wed' : return 'Rabu'; break;
												 case 'Thu' : return 'Kamis'; break;
												 case 'Fri' : return 'Jumat'; break;
					               default  : return 'N/A';
					            }
										}
									},
                    {"data": "kode_matkul"},
                    {"data": "kelas_nama"},
                    {"data": "jam_mulai"},
										{"data": "jam_selesai"},
										{"data": "toleransi"},
										{"data": "nama_ruangan"},
										{"data": "nama_jurusan"},
										{"data": "view"}
                  ],

            order: [[3, 'asc']],

            rowCallback: function(row, data, iDisplayIndex){
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
            }
      });
          // end setup datatables
					$('#mytable').on('click','.edit_record',function(){
						var id=$(this).data('id_jadwal');
						var toleransi=$(this).data('toleransi');
						$('#ModalUpdate').modal('show');
						$('[name="data_id"]').val(id);
						$('[name="toleransi"]').val(toleransi);
					});

    });
    </script>
	</body>
</html>
