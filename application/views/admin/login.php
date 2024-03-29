<body class="login">
	<div class="form-signin">
		<div class="text-center">
			<img src="<?php echo base_url('assets/img/logo.png');?>" alt="Metis Logo">
		</div>
		<hr>
		<div class="tab-content">
			<?php
			$error_msg = $this->session->flashdata('error');
				if(isset($error_msg)){ ?>
				<div class="alert alert-danger alert-dismissible">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Error!</strong> 
				  <?php echo $error_msg;?>
				</div>
			<?php } ?>
			<?php
			$success_msg = $this->session->flashdata('success');
				if(isset($success_msg)){ ?>
				<div class="alert alert-success alert-dismissible">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success!</strong> 
				  <?php echo $success_msg;?>
				</div>
			<?php } ?>


			<div id="login" class="tab-pane active">
				<form name="login" action="<?php echo base_url('velankatgo');?>" method="POST">
				    <p class="text-muted text-center">
				        Enter your username and password
				    </p>
				    <input type="email" id="Username" name="Username" placeholder="Username" class="form-control top">
				    <input type="password" id="Password" name="Password" placeholder="Password" class="form-control bottom">
				    <div class="checkbox">
						<label>
							<input id="Remember" name="Remember" type="checkbox"> Remember Me
						</label>
					</div>
					    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>
			</div>
			<div id="forgot" class="tab-pane">
				<form action="index.html">
				    <p class="text-muted text-center">Enter your valid e-mail</p>
				    <input type="email" placeholder="mail@domain.com" class="form-control">
				    <br>
				    <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
				</form>
			</div>
			<div id="signup" class="tab-pane">
				<form action="index.html">
				    <input type="text" placeholder="username" class="form-control top">
				    <input type="email" placeholder="mail@domain.com" class="form-control middle">
				    <input type="password" placeholder="password" class="form-control middle">
				    <input type="password" placeholder="re-password" class="form-control bottom">
				    <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
				</form>
			</div>
		</div>
		<hr>
		<div class="text-center">
			<ul class="list-inline">
			<!-- <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li> -->
			<li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
			<!-- <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li> -->
			</ul>
		</div>
	</div>

<script type="text/javascript">
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='login1']").validate({
    // Specify validation rules
    rules: {
      Username: {
        required: true,
        email: true
      },
      Password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      // firstname: "Please enter your firstname",
      // lastname: "Please enter your lastname",
      Password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      Username: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>