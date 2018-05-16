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


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
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
.input-group{
  width:50%;
  margin-left: 25%;
  margin-top:1%;
  margin-bottom: 1%;
  text-align:left;
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
           <?php if(!($this->session->userdata('logged_in')) || $val=='1'){} else{ ?>
          <li><a href="<?php echo base_url();?>index.php/chat/essay_write">Write</a></li><?php } ?>
        </ul>
      </li>
    </ul>
      <?php if(!($this->session->userdata('logged_in')) || $val=='1'){ ?>
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

	<div id="wrapper" style="margin-top:100px;">
	<div id="header">
		<div class="searched">
  <h1>Welcome</h1>
  </div></div> 


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  
    <div class="imgcontainer">
      <img src="http://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

   

    
  
</div>
<script>
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      
	  </div>
	  </div>
<div id="footer">
	<form role="search" action='<?php echo base_url(); ?>index.php/chat/word_search' id='myform' method='POST'>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="search">
    <div class="input-group-btn">
     
      <button type="button" class="btn btn-default" id="mysubmit">
        <span class="glyphicon glyphicon-search" id='myicon'></span> 
      </button>
    </div>
  </div>
	</form>
  <script>
  $("#mysubmit").bind('click', function(event) {
   $("#myform").submit();
});
  </script>
  <div class="exploring">
   <a href="<?php echo base_url();?>index.php/chat/exploring/a">A</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/b">B</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/c">C</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/d">D</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/e">E</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/f">F</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/g">G</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/h">H</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/i">I</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/j">J</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/k">K</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/l">L</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/m">M</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/n">N</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/o">O</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/p">P</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/q">Q</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/r">R</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/s">S</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/t">T</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/u">U</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/v">V</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/w">W</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/x">X</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/y">Y</a> <p class='filler'>|</p>
  <a href="<?php echo base_url();?>index.php/chat/exploring/z">Z</a> </div>
  <div class="searched">
  
<?php if (is_array($results) || is_object($results)){ ?>

<?php foreach ($results as $result){ ?>
  <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                  <div>
                      <h2><strong><?=$result->word?></strong></h2>
                  </div>
                  <div>
                      <h4><?=$result->pronunciation?></h4>
                  </div>
                  <hr>
                  <div>
                      <p><?=$result->meaning?></p>
                  </div>
                  <div>
                      <p>"<?=$result->sentence?>"</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>

<?php if(is_array($results1) || is_object($results1)){ ?>
  <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
               <?php foreach ($results1 as $result){ ?>
                  <div>
                      <h2><strong><?=$result->word?></strong></h2>
                  </div>
                  <div>
                      <h4><?=$result->pronunciation?></h4>
                  </div>
                  <hr>
                  <div>
                      <p><?=$result->meaning?></p>
                  </div>
                  <div>
                      <p>"<?=$result->sentence?>"</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php break;}} ?>
</div>
</div>
</div>
</body>
</html>