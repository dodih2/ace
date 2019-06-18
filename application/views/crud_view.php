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
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
								<!-- PAGE CONTENT BEGINS -->
                <div class="col-xs-12">
                  <h2>Produk List</h2>
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                    <table class="table table-striped" id="mytable">
                      <thead>
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
                </div>

                <!-- Modal Add Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/crud/simpan' ?>" method="post">
                  <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Add New</h4>
                        </div>
                        <div class="modal-body">

                          <div class="form-group">
                            <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                          </div>

                          <div class="form-group">
                            <select class="form-control" name="kategori" placeholder="Kode Barang" required>
                              <?php foreach ($kategori->result() as $row): ?>
                                <option value="<?php echo $row->kategori_id; ?>"><?php echo $row->kategori_nama; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <input type="text" name="harga" class="form-control" placeholder="Harga" required>
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

                <!-- Modal Update Produk -->
                <form id="add-row-form" action="<?php echo base_url().'index.php/crud/update' ?>" method="post">
                  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Update Produk</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
                          </div>

                          <div class="form-group">
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                          </div>

                          <div class="form-group">
                            <select class="form-control" name="kategori" placeholder="Kode Barang" required>
                              <?php foreach ($kategori->result() as $row): ?>
                                <option value="<?php echo $row->kategori_id; ?>"><?php echo $row->kategori_nama; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="text" name="harga" class="form-control" placeholder="Harga" required>
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
                <form id="add-row-form" action="<?php echo base_url().'index.php/crud/delete' ?>" method="post">
                  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                          <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
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
              sProcessing: "loading..."
        },
            processing: true,
            serverSide: true,
            ajax: {"url": "<?php echo base_url().'index.php/crud/get_produck_json' ?>", "type": "POST"},
                  columns: [
                    {"data": "barang_kode"},
                    {"data": "barang_nama"},
                    //render harga dengan format angka
                    {"data": "barang_harga", render: $.fn.dataTable.render.number(',','.','')},
                    {"data": "kategori_nama"},
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
            var kode=$(this).data('kode');
            var nama=$(this).data('nama');
            var harga=$(this).data('harga');
            var kategori=$(this).data('kategori');
            $('#ModalUpdate').modal('show');
            $('[name="kode_barang"]').val(kode);
            $('[name="nama_barang"]').val(nama);
            $('[name="harga"]').val(harga);
            $('[name="kategori"]').val(kategori);
          });
          // End Edit Records
          // get Hapus Records
          $('#mytable').on('click','.hapus_record', function(){
            var kode=$(this).data('kode');
            $('#ModalHapus').modal('show');
            $('[name="kode_barang"]').val(kode);
          });
          // End Hapus Records
    });
    </script>
	</body>
</html>
