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
.container{
   margin-top:85px;
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
.panel-login {
  padding:0px 50px;
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
  color: #00415d;
  background-color: #fff;
  border-color: #fff;
  text-align:center;

    float: none;
    display: block;
    margin: 0 auto;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
  color: #029f5b;
  font-size: 18px;
}
.panel-login>.panel-heading hr{
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
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 1px solid #ddd;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
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
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #53A3CD;
  border-color: #53A3CD;
}
body{
      background-color:#e7e5e4;
  background-repeat: no-repeat;
  background-attachment:fixed;
    background-size: cover;
}
.options{
  padding-left:20px;
}
.sticky{
  position:fixed;
  top: 0;
  width: 100%;
  z-index:999;
}
#mycounter{
   display: inline;
}
</style>
<script>
$("#login-submit").bind('click', function(event) {
   $("#login-form").submit();
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
      <?php if(!(is_array($results) || is_object($results))){?>
      <li><a href="#" style="pointer-events: none; cursor: default;"><span class="glyphicon glyphicon-time"></span><h4 id='mycounter'><b> 15</b> min left</h4></a></li>
      <?php }
      if($this->session->userdata('admin')==1)
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

<?php if(is_array($results) || is_object($results)){
  $win=0;
$array1=array();
$array2=array();
$array3=array();
$array4=array();
$array5=array();
$array6=array();
$array7=array();
$array8=array();

foreach($checks as $check){
  array_push($array1,$check);
}
foreach($results as $row){
  array_push($array2,$row->answer);
  array_push($array4,$row->ques);
  array_push($array5,$row->option_a);
  array_push($array6,$row->option_b);
  array_push($array7,$row->option_c);
  array_push($array8,$row->explanation);
}?>
  <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <h1>Result</h1>
              </div>
              </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
        <?php for($i=0; $i< count($array1);$i++){?>

          
               <?php echo '<h2> Q. '.$array4[$i].'</h2>';

                if($array1[$i]!=$array2[$i]){?>
                  <div class="alert alert-success">
                      <h4><strong>Correct Answer: </strong> <?=$array2[$i]?></h4>
                  </div>
                  <div class="alert alert-danger">
                      <h4><strong>Your Answer: </strong> <?=$array1[$i]?></h4>
                  </div>

                <?php } else{ $win++;  ?>
                    <div class="alert alert-success">
                      <h4><strong>Correct: </strong> <?=$array1[$i]?></h4>
                  </div>
                <?php } ?>
                <h4>Explanation:</h4>
                <h4><?=$array8[$i]?></h4>
                  <?php } ?>
              </div>
            </div>
            <div class="panel-heading">
            <hr>
            <h2><strong>Score: </strong><?=$win?> / <?=count($array1)?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
}else{?>


<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <h1>Test</h1>
              </div>
              </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <?php { $arrayid=""; 
                      if (is_array($questions) || is_object($questions)){
                        foreach($questions as $question){ 
                      $temp=$question->id;
                      if($arrayid=="")
                      $arrayid=$temp;
                      else
                      $arrayid=$arrayid."_".$temp;}}?>
                <form id="login-form" action="<?php echo base_url();?>index.php/chat/test_submit/<?=$arrayid?>" method="post" role="form" style="display: block;">
                  <?php if (is_array($questions) || is_object($questions)){
                      $count=0;
                    foreach($questions as $question){ 
                       $temp=$question->id;
                      $count+=1;
                      $ans_array= array($question->option_a , $question->option_b , $question->option_c , $question->answer);
                      shuffle($ans_array); ?>
                  
                  <?php echo '<h2> Q. '.$question->ques.'</h2>';?>
                  <div class="btn-group">
                  <div class="radio">
                      <input type="radio" name="<?=$temp?>" class="options" id="option_a" value="<?=$ans_array[0] ?>"> <?php echo '<h4>'.$ans_array[0].'</h4>';?>
                  </div>
                  <div class="radio">
                      <input type="radio" name="<?=$temp?>" class="options" id="option_b" value="<?=$ans_array[1] ?>"> <?php echo '<h4>'.$ans_array[1].'</h4>';?>
                  </div>
                  <div class="radio">
                      <input type="radio" name="<?=$temp?>" class="options" id="option_c" value="<?=$ans_array[2] ?>"> <?php echo '<h4>'.$ans_array[2].'</h4>';?>
                  </div>
                  <div class="radio">
                      <input type="radio" name="<?=$temp?>" class="options" id="option_d" value="<?=$ans_array[3] ?>"> <?php echo '<h4>'.$ans_array[3].'</h4>';?>
                  </div>
                </div>
                      <?php 
                        if($count>=30)
                         break;
                        }
                        }
                        ?>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button name="submitbutton" id="login-submit" tabindex="4" class="form-control btn btn-login" >Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>
<script type="text/javascript">
minutes =14;
secs = 59;
timer = setInterval(function () {
    var element = document.getElementById("mycounter");
    if(secs<0){
      secs=59;
      minutes--;
    }
    element.innerHTML = "<h4  id='mycounter'><b> "+minutes+"</b>m and <b>"+secs+"</b>s left</h4>";
    if(secs < 1 && minutes<1){
        clearInterval(timer);
        document.getElementById('login-form').submit();
    }
    secs--;
}, 1000)
</script>
</body>
<html>