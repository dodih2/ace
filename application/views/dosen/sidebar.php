<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<strong>
				<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo site_url('dosen/dosen_control') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								List Mahasiswa
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control') ?>">
									<i class="menu-icon glyphicon glyphicon-minus "></i>
									Semua Mahasiswa
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control/index1') ?>">
									<i class="menu-icon glyphicon glyphicon-minus "></i>
									D3 T. Informatika
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control/index2') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									D3 T. Mesin
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control/index3') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									D3 T. Pendingin
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control/index4') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									D4 T. RPL
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/list_mahasiswa_control/index5') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									D4 T. Manufaktur
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Managemen Data </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/jadwal_control') ?>">
									<i class="menu-icon glyphicon glyphicon-minus "></i>
									Jadwal
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/absen_control') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									Presensi
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('index.php/dosen/matkul_control') ?>">
									<i class="menu-icon glyphicon glyphicon-minus"></i>
									Mata Kuliah
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="<?php echo base_url('index.php/laporanpdf') ?>">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">Cetak Absensi</span>
						</a>
					</li>

				</ul><!-- /.nav-list -->
</strong>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
