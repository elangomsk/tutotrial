<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<?php if($display == 'view'){ ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="box">
							<header>
								<div class="icons"><i class="fa fa-table"></i></div>
								<h5>CMS Pages</h5>
							</header>
							<div id="collapse4" class="body">
								<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Title</th>
											<th>cms_messages</th>
											<th>updated at</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i= 1;
										foreach($result as $row){ ?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['title']; ?></td>
											<td><?php echo $row['cmessage']; ?></td>
											<td><?php echo $row['created_at']; ?></td>
											<td><a href="<?php echo admin_url('cms/'.$row["link"]); ?>"><i class="fa fa-edit"></i></a></td>
										</tr>
									<?php $i++;} ?>
									</tbody>
				                </table>
							</div>
						</div>
					</div>
				</div>
			<?php }elseif ($display == 'edit') { ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="box">
							<header>
								<div class="icons">
									<i class="fa fa-edit"></i>
								</div>
								<h5><?php echo ucfirst(str_replace('_', ' ', $result->link));?></h5>
								<!-- .toolbar -->
								<div class="toolbar">
									<nav style="padding: 8px;">
										<a href="javascript:;" class="btn btn-default btn-xs collapse-box">
											<i class="fa fa-minus"></i>
										</a>
										<a href="javascript:;" class="btn btn-default btn-xs full-box">
											<i class="fa fa-expand"></i>
										</a>
									</nav>
								</div>
							</header>
							<div class="body" id="colorPickerBlock">
								<form class="form-horizontal" id="cms_settings" name="cms_settings" method="POST" action="<?php echo admin_url('cms');?>">
									<div class="form-group">
										<label for="cp1" class="control-label col-lg-4">Link</label>
										<div class="col-lg-3">
											<input type="text" class="form-control" value="<?php echo $result->link; ?>" id="link" name="link" readonly>
										</div>
									</div>
									<div class="form-group">
										<label for="cp1" class="control-label col-lg-4">Title</label>
										<div class="col-lg-3">
											<input type="text" class="form-control" value="<?php echo $result->title; ?>" id="title" name="title">
										</div>
									</div>
									<div class="form-group">
										<label for="cp3" class="control-label col-lg-4">Mesage</label>
										<div class="col-lg-6">
											<textarea id="cms_messages" name="cms_messages" required><?php echo $result->message ?></textarea>
											<label id="cms_messages-error" class="error" for="cms_messages"></label>
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
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<script type="text/javascript">
		CKEDITOR.replace( 'cms_messages' );

$("#cms_settings").validate({
	// ignore: [],
	rules: {
		title:{
			required : true,
		},
		// cms_messages:{
		// 	required: true,
		// }
		 cms_messages: {required: true,},
	},

	messages:{
		title:{
			required : "Please enter the title.",
		}
	},

    submitHandler: function(form) {
      form.submit();
    }
});
</script>