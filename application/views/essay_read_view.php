<html>
<head>
	<title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<style type="text/css">
	 *{
  margin:0;
  padding:0;

}
#username, #password {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
#button {
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#button{
  text-decoration:none;
  
}
form{
  text-align:center;
  
  
}
body{
      background-color:#e7e5e4;
  background-repeat: no-repeat;
  background-attachment:fixed;
    background-size: cover;
}

h4{
  margin-top: 10px;
  color:blue;
}
h2{
  color:#000;
  padding:0;
  margin:0;
}
h5{
  color:black;

}
h1{
  color: #131313;
  text-align:center;
  margin-top: 65px;
  margin-bottom: 35px;
  text-shadow: 
      1px -1px 0 rgba(0,0,0,0.7),   
      -2px 2px 1px rgba(0,0,0,0.2);
}
p{
  margin-bottom:20px;
  color:#101010 ;
}
#word_search{
  margin-top:10%;
  margin-left:25%;
  width:50%;
  
}
nav{
  margin:0;
  padding:0;
  margin-bottom: 20px;
}
.glyphicon{
  height: -2%;
}
.exploring{
  padding:10px 2px;
  text-align: center;
  cursor:default;
}
#search{
  width:75%;
  margin-left:12.5%;
}
#links{
  text-align:right;
}
.swap{
  border:2px solid rgba(0,0,0,0);
  transition : all 0.5s;
  padding:10px 15px;
  display: inline-block;
}
.swap:hover, .swap:active{
  text-decoration:none;
  color:#1d6baf;
  background-color: rgba(51,115,183,0.2);
  border-color:rgba(51,115,183,0.4);
  transition: all 0.5s;
}
.filler{
  color:#c7c5c4;
  display: inline-block;
  cursor:default;
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
#myicon{
  padding:3px 0px;
}

.panel-login {
  padding:0px 50px;
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login hr{
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
      <a class="navbar-brand" style="pointer-events: none; cursor: default;" href="#">Linguals</a>
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
<div id="footer" style="margin-top:100px;">
	<form role="search" action='<?php echo base_url(); ?>index.php/chat/essay_search' id='myform' method='POST'>
  
 <div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" name="choice">
                      <li><a href="#title" id="title">Title</a></li>
                      <li><a href="#author" id="author">Author</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="search" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="mysubmit" style="padding:9px 12px;"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
  </div>
</div>
	</form>
  <script>
  $('#title').on('click',function(){
    $('#search_param').val('title');
    $('#search_concept').text('Title');
  });
  $('#author').on('click',function(){
    $('#search_param').val('author');
    $('#search_concept').text('Author');
  });
  $("#mysubmit").bind('click', function(event) {
   $("#myform").submit();
});
  </script>

  <?php if(!(is_array($results1) || is_object($results1)||$results1=='')){?>
                <div class="alert alert-danger" style="text-align: center;">
                <?php echo $results1; ?>
                </div>
  <?php }

  ?>
  <div class="searched">
  
<?php if (is_array($results) || is_object($results)){ 
  foreach ($results as $result){ ?>
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                  <div>
                      <h2><strong><?=$result->title?></strong></h2>
                  </div>
                  <div>
                      <h4>-<?=$result->author?></h4>
                  </div>
                  <hr>
                  <div id="dvInfo" style="word-wrap: break-word;">
                      <p><?=$result->body?></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>

<?php if(is_array($results1) || is_object($results1)){
  foreach ($results1 as $result){ ?>
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                  <div>
                      <h2><strong><?=$result->title?></strong></h2>
                  </div>
                  <div>
                      <h4>-<?=$result->author?></h4>
                  </div>
                  <hr>
                  <div id="dvInfo" style="word-wrap: break-word;">
                      <p><?=$result->body?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
</div>
</div>
</div>
</body>
</html>