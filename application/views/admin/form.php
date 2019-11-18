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
							<h5>Color Picker</h5>
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
								<form class="form-horizontal">
									<div class="form-group">
										<label for="cp1" class="control-label col-lg-4">Field with hex format</label>
										<div class="col-lg-3">
											<input type="text" class="form-control" value="#8fff00" id="cp1">
										</div>
									</div>
									<div class="form-group">
										<label for="cp2" class="control-label col-lg-4">Field with the rgba format</label>
										<div class="col-lg-3">
											<input type="text" class="form-control" value="rgb(0,194,255,0.78)" id="cp2"
											data-color-format="rgba">
										</div>
									</div>
									<div class="form-group">
										<label for="cp3" class="control-label col-lg-4">As component</label>
										<div class="col-lg-3">
											<div class="input-group color">
												<input type="text" class="form-control" readonly data-color="rgb(255, 146, 180)"
												data-color-format="rgb" id="cp3">
												<span class="input-group-addon" style="background-color: rgb(255, 146, 180)"><i
												class="fa fa-home"></i></span>
											</div>
											<!-- /input-group -->
										</div>
									</div>
									<div class="form-group">
										<label for="cp3" class="control-label col-lg-4">Using events to work with the color</label>
										<div class="col-lg-3">
											<a href="#" class="btn btn-danger" id="cp4" data-color-format="hex"
											data-color="rgb(255, 255, 255)">Change background color</a>
										</div>
									</div>
								</form>
							</div>
							<!-- /.BODY -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col-lg-12 -->
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