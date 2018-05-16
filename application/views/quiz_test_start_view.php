<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
<style type="text/css">

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
.btn-register {
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
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}
h2{
  text-align:center;
  margin:60px 0px 40px 0px;}
.col-center-block {
    float: none;
    display: block;
    margin: 0 auto;
    /* margin-left: auto; margin-right: auto; */
}
body{
      background-color:#e7e5e4;
  background-repeat: no-repeat;
  background-attachment:fixed;
    background-size: cover;
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
</style>
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
<h2 id='temp' style="margin-top:100px;">Total Number of Questions: <b>30</b></h2>
<h2 id="temp1">Total Time: <b>900 s</b></h2>
<form id="register-form" action="<?php echo base_url(); ?>index.php/chat/test" method="post" role="form">
  <div class="form-group">
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-4 col-center-block">
        <input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Start Test">
      </div>
    </div>
  </div>
</form>
</body>
<html>