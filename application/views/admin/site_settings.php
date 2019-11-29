<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="row">
				<!-- .col-lg-6 -->
				<div class="col-lg-12">
					<!-- .box -->
					<div class="box">
						<header>
							<div class="icons">
								<i class="fa fa-edit"></i>
							</div>
							<h5>Site settings</h5>
							<!-- .toolbar -->
							<div class="toolbar">
								<nav style="padding: 8px;">
									<a href="javascript:;" class="btn btn-default btn-xs collapse-box">
										<i class="fa fa-minus"></i>
									</a>
									<a href="javascript:;" class="btn btn-default btn-xs full-box">
										<i class="fa fa-expand"></i>
									</a>
									<!-- <a href="javascript:;" class="btn btn-danger btn-xs close-box">
										<i class="fa fa-times"></i>
									</a> -->
								</nav>
								</div>                <!-- /.toolbar -->
							</header>
							<!-- .BODY -->
							<div class="body" id="colorPickerBlock">
								<form class="form-horizontal" id="site_settings" name="site_settings" method="POST" action="<?php echo admin_url('site_settings');?>">
									<div class="form-group">
										<label for="cp1" class="control-label col-lg-4">Site username</label>
										<div class="col-lg-3">
											<input type="text" class="form-control" value="<?php echo ""; ?>" id="username" name="username">
										</div>
									</div>
									<div class="form-group">
										<label for="cp1" class="control-label col-lg-4">Site undermaintance</label>
										<div class="col-lg-3">
											 <input class="make-switch" type="checkbox" data-size="small" id="site_undermaintance" name="site_undermaintance">
										</div>
									</div>
									<div id="footer_div" class="form-group" style="display: none;">
										<label for="cp3" class="control-label col-lg-4">Undermaintance reason</label>
										<div class="col-lg-6">
											<textarea id="site_und_content" name="site_und_content" required></textarea>
											<!-- <label id="site_und_content-error" class="error" for="site_und_content"></label> -->
										</div>
										
									</div>
									<div class="form-group">
										<label for="cp3" class="control-label col-lg-4"></label>
										<div class="col-lg-6">
											<button type="submit" class="btn btn-metis-6">Submit</button>
										</div>
										
									</div>
								</form>
							</div>
							<!-- /.BODY -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col-lg-12 -->
					<div class="col-lg-12">
						<div class="box">
							<header>
								<div class="icons">
									<i class="fa fa-edit"></i>
								</div>
								<h5>SMTP Configuration</h5>
								<!-- .toolbar -->
								<div class="toolbar">
									<nav style="padding: 8px;">
										<a href="javascript:;" class="btn btn-default btn-xs collapse-box">
											<i class="fa fa-minus"></i>
										</a>
										<a href="javascript:;" class="btn btn-default btn-xs full-box">
											<i class="fa fa-expand"></i>
										</a>
										<a href="javascript:;" class="btn btn-danger btn-xs close-box">
											<i class="fa fa-times"></i>
										</a>
									</nav>
									</div>                <!-- /.toolbar -->
								</header>
								<!-- .BODY -->
								<div class="body" id="colorPickerBlock">
									<form class="form-horizontal" id="site_settings" name="site_settings" method="POST" action="<?php //echo admin_url('site_settings');?>">
										<div class="form-group">
											<label for="cp1" class="control-label col-lg-4">SMTP host</label>
											<div class="col-lg-3">
												<input type="text" class="form-control" value="<?php echo ""; ?>" id="smtp_host" name="smtp_host" readonly data-color="rgb(255, 146, 180)">
											</div>
										</div>
										<div class="form-group">
											<label for="cp1" class="control-label col-lg-4">SMTP port</label>
											<div class="col-lg-3">
												<input type="text" class="form-control" value="<?php echo ""; ?>" id="smtp_port" name="smtp_port" readonly data-color="rgb(255, 146, 180)">
											</div>
										</div>
										<div class="form-group">
											<label for="cp1" class="control-label col-lg-4">SMTP username</label>
											<div class="col-lg-3">
												<input type="text" class="form-control" value="<?php echo ""; ?>" id="smtp_username" name="smtp_username" readonly data-color="rgb(255, 146, 180)">
											</div>
										</div>
										<div class="form-group">
											<label for="cp1" class="control-label col-lg-4">SMTP passworld</label>
											<div class="col-lg-3">
												<input type="text" class="form-control" value="<?php echo ""; ?>" id="smtp_password" name="smtp_password" readonly data-color="rgb(255, 146, 180)">
											</div>
										</div>
									</form>
								</div>
								<!-- /.BODY -->
							</div>
						<!-- /.box -->
					</div>
				</div>
				</div>
				<!-- /.row -->
				<!-- END COLOR PICKER -->
				<!-- BEGIN DATE PICKER -->
				
				<!-- /.outer -->
			</div>
		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>
<script type="text/javascript">
		CKEDITOR.replace( 'site_und_content' );



 var ckbox = $('#site_undermaintance');

$('input').on('click',function () {
    if (ckbox.is(':checked')) {
    	$("#footer_div").css('display','block');
    	// $('#site_settings').validate();
     //    $('#site_und_content').rules('add',  { required: true });
    } else {
    	$("#footer_div").css('display','none');
    	// $('#site_und_content').rules('remove',  'required')
    	// $('#site_und_content-error').html('');
    }
});

$("#site_settings").validate({
	ignore: [],
	rules: {
		username:{
			required : true,
		},
		// site_und_content:{
		// 	required: true,
		// }
		 site_und_content: {required: true,},
	},

	messages:{
		username:{
			required : "Please enter username.",
		}
	},

    submitHandler: function(form) {
      form.submit();
    }
});
</script>