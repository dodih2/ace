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

	<body class="login-layout">
		<div class="main-container ace-save-state" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12 col-sm-offset-1">
								<!-- PAGE CONTENT BEGINS -->
								<div class="login-container">
									<div style="padding:2%;" class="center">
										<span style="padding:5%;"></span>
										<ul class="clearfix">
											<li>
												<a href="#" data-rel="colorbox">
													<img width="150" height="150" alt="150x150" src="<?php echo base_url('assets/') ?>/images/data/login.png" />
												</a>
											</li>
									</ul>
								</div>
									<div class="center">
										<h2>
											<strong>
											<span class="blue">Absensi</span>
											<span class="blue">Mahasiswa</span>
											</strong>
										</h2>
									</div>

									<div class="space-6"></div>

									<div class="position-relative">
										<div id="login-box" class="login-box visible widget-box no-border">
											<div class="widget-body">
												<div class="widget-main">
													<div class="space-6"></div>
													<form action="<?php echo site_url('login/auth'); ?>" method="post">
														<?php echo $this->session->flashdata('msg'); ?>
														<fieldset>
															<label for="nik" class="block clearfix">
																<span class="block input-icon input-icon-right">
																	<input type="text" name="nik" class="form-control" placeholder="NIK atau EMAIL" required autofocus />
																	<i class="ace-icon fa fa-user"></i>
																</span>
															</label>

															<label for="password" class="block clearfix">
																<span class="block input-icon input-icon-right">
																	<input type="password" name="password" class="form-control" placeholder="PASSWORD" required />
																	<i class="ace-icon fa fa-lock"></i>
																</span>
															</label>

															<div class="space"></div>

															<div class="clearfix">
																<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
																	<i class="ace-icon fa fa-key"></i>
																	<span class="bigger-110">Masuk</span>
																</button>
															</div>

															<div class="space-4"></div>
														</fieldset>
													</form>

												</div><!-- /.widget-main -->

												<div class="toolbar clearfix">
												</div>
											</div><!-- /.widget-body -->
										</div><!-- /.login-box -->


									</div><!-- /.position-relative -->

									<!-- <div class="navbar-fixed-top align-right">
										<br />
										&nbsp;
										<a id="btn-login-dark" href="#">Dark</a>
										&nbsp;
										<span class="blue">/</span>
										&nbsp;
										<a id="btn-login-blur" href="#">Blur</a>
										&nbsp;
										<span class="blue">/</span>
										&nbsp;
										<a id="btn-login-light" href="#">Light</a>
										&nbsp; &nbsp; &nbsp;
									</div> -->
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
	</body>
</html>
