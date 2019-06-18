<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo base_url('index.php/admin/admin_control')  ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Managemen	User
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('index.php/admin/list_dosen_control') ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Dosen
								</a>
							</li>
							<li class="">
								<!-- <a href="#" class="dropdown-toggle"> -->
									<a href="<?php echo base_url('index.php/admin/list_mahasiswa_control') ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Mahasiswa
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon glyphicon glyphicon-minus "></i>
											Teknik Informatika
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="#">
											<i class="menu-icon glyphicon glyphicon-minus"></i>
											Teknik Mesin
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="#">
											<i class="menu-icon glyphicon glyphicon-minus"></i>
											Teknik Pendingin
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
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
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> forms </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
					</li>


				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
