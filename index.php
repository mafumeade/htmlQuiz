<?php 

  $title = "HTML Quiz";
  $leadDescription = "When you are ready to begin click the button below, you will be timed. </br> 
                      Once the quiz is submitted you will be directed to your results page";
                      
  for ($i=0; $i < 10; $i++) { 
    $quizFiller = $quizFiller.$title."<br>";
  }
  
  $groups = array("Multiple Choice", "Check Lists", "True/False");
  $groupsOut = "";
  
  foreach ($groups as $group){
    $groupsOut = $groupsOut."<li class='nav-item active'> <a class='nav-link' href=''>".$group."</a> </li>"."\n";
  }
  


 ?>
<!DOCTYPE html>
<html>
<head>

  <title>Quiz</title>
      
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <style>
    body {
      background-image: url('images/code.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      /*font-family: sans-serif;*/
    }

    .jumbotron{
      text-align: center;
      position: relative;
    }
    
    #startButton{
      font-weight: bold;
      font-size: 200%;
    }
    
    .hidden{
      display: none;
    }
    
    #quizDiv{
      background-color: rgba(255,255,255,0.8);
      height: 2000px;
      top: 1000px;
      position: relative;
    }
    
    .navbar-fixed-top{
      top: -100px; 
      padding-left: 50px;
      padding-right: 50px;
    }
    
    #progDiv{
      float: right;
      width: 70%;
      /*border: 1px solid red;*/
      height: 20px;
      padding: 0;
      padding-top: 5px;
      }
    
    #prog{
      width: 50%;
      float: right;
      padding-top: 6px;
      padding-right: 15%;
      /*border: 1px solid blue;*/
    }
    
    #progLabel{
      float: left;
      text-align: right;
      /*border: 1px solid red;*/
      width: 29%;
      padding-right: 5px;
      /*border: 1px solid green;*/
    }
    
    #timeDisplay{
      position: fixed;
      width: 150px;
      bottom: 10px;
      right: 10px;
      text-align: center;
      height: 125px;
    }
    
    .card-block{
      padding: 0;
    }
    
    .card-title{
      margin-top: 5px;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    
    .card-text{
      padding: 5px;
      margin: 0;
      font-size: 150%;
    }
    

    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-fixed-top navbar-light bg-faded"> 
        <a class="navbar-brand" href="#"><?php echo $title; ?></a>
        <ul class="nav navbar-nav">
            <?php echo $groupsOut ?>
        </ul>
        
        <div id="prog">
          <p id="progLabel">Progress: </p>
          <div id="progDiv">
            <progress class="progress progress-striped progress-animated active" value="10" max="100"></progress>
          </div>
        </div>
    </nav>
  
  <div class="container">
    <div class="jumbotron" id="jumbo">
      <h1 class="display-1"><?php echo $title; ?></h1>
      <p class="lead"><?echo $leadDescription; ?></p>
      <button type="button" class="btn btn-success" id="startButton">Start Quiz</button>
    </div>
    
    
    
    <div class="container hidden" id="quizDiv">
      <form action="submit.php" method="post">
        <input type="hidden" name="startTime" value="" id="startTime">
        
        <!-- <div class="row question">
          <div class="col-md-12">
            <h3>Which form is valid and sends the variables in the url?</h3>
            <img src='quizSnips/formMethod.png'>
          </div>
        </div> -->
        
      </form>
    </div>
  </div>
  
  <div class="card" id="timeDisplay">
    <div class="card-block">
    <h4 class="card-title">Time:</h4> <hr>
    <p class="card-text">6h 32m 12s</p>
  </div>
  </div>



  <!-- jQUERY AND BOOSTRAP SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="scripts/start.js"></script>
  
  <script type="text/javascript">

  
  </script>
  </body>
</html>