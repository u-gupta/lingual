<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<style type="text/css">
body {
    
}
.panel-dict {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-dict>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-dict>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-dict>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-dict>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-dict input[type="text"],.panel-dict input[type="email"],.panel-dict input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-dict input:hover,
.panel-dict input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-dict {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-dict:hover,
.btn-dict:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-quiz {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-quiz:hover,
.btn-quiz:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

.navbar-brand{
  position: absolute;
  left: 47.25%;
}
.navbar-collapse{
  padding-left:12px;
}
.container-fluid{
  padding-left:5px;
}
.active1, .dropdown, .random{
  padding-right:25px;
  padding-right:10px;
}
.navbar{
	margin-bottom: 90px;
}
.container{
	padding:0px 50px;
}
.sticky{
  position:fixed;
    top: 0;
    width: 100%;
  z-index:999;
}
body{
      background-color:#e7e5e4;
  background-repeat: no-repeat;
  background-attachment:fixed;
    background-size: cover;
}
</style>
<script>
$(function() {

    $('#dict-form-link').click(function(e) {
		$("#dict-form").delay(100).fadeIn(100);
 		$("#quiz-form").fadeOut(100);
		$('#quiz-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#quiz-form-link').click(function(e) {
		$("#quiz-form").delay(100).fadeIn(100);
 		$("#dict-form").fadeOut(100);
		$('#dict-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>
</head>
<body>
<nav class="navbar navbar-inverse sticky" style="border-radius:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" style="pointer-events: none; cursor: default;">Linguals</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active1"><a href="<?php echo base_url();?>index.php/chat"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a class="random" href="<?php echo base_url(); ?>index.php/chat/random">Random</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quiz
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/chat/test_start">Test</a></li>
          <li><a href="<?php echo base_url();?>index.php/chat/practice">Practice</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Essay
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/chat/essay_read">Read</a></li>
           <?php if(!($this->session->userdata('logged_in'))){} else{ ?>
          <li><a href="<?php echo base_url();?>index.php/chat/essay_write">Write</a></li><?php } ?>
        </ul>
      </li>
    </ul>
      <?php if(!($this->session->userdata('logged_in'))){ ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url();?>index.php/chat/login"><span class="glyphicon glyphicon-log-in"></span> Login | <span class="glyphicon glyphicon-user"></span> Register</a></li>
      <?php
    }
    else{ ?>
    <ul class="nav navbar-nav navbar-right">
      <?php if($this->session->userdata('admin')==1)
      {?>
      <li><a href="<?php echo base_url();?>index.php/chat/insert"><span class="glyphicon glyphicon-edit"></span> Insert</a></li>
      <?php 
      } ?>
      <li><a href="<?php echo base_url();?>index.php/chat/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    <?php
    } ?>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:100px;">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-dict">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="dict-form-link">Insert Essay</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php if(!empty($errors)){ ?>
								<div class="alert alert-danger">
								<?php echo $errors; ?>
								</div><?php }?>
								<?php if(!empty($success)){ ?>
								<div class="alert alert-success">
								<?php echo $success; ?>
								</div><?php }?>
								<form id="essay-form" action="<?php echo base_url(); ?>index.php/chat/save_essay_entry" method="post" role="form">
									<div class="form-group">
										<input type="text" name="title" id="title" tabindex="1" class="form-control" placeholder="Title" value="">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="body" tabindex="2" placeholder="Body" rows="15" id="body"></textarea>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="quiz-submit" tabindex="4" class="form-control btn btn-quiz" value="Insert">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>