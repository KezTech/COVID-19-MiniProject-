<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Self Test</title>
  <link rel="stylesheet" href="style/test.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="heartcss/styles.css">


</head>
<body>


     <h1>Self Test</h1>
</br>
     <h4> WELCOME  <?php echo $login_session; ?> </h4>


  <div class="main_wrapper">

           <div class="question" id="questionBox">

           </div>

           <div class="options">
              <ul id="ul">
                  <li id="op1" onclick="button(this)"></li>
                  <li id="op2" onclick="button(this)"></li>

              </ul>
           </div>
           <div class="result">
               <div class="next">
                  <button type="button" onclick="next()" id="button">Next</button>
               </div>
               <div class="result-box">

               Symptom Level : <span id="resultbox">0</span>
               </div>
           </div>


           <a href="logout.php">
           <input id="btn3" name="" type="submit" value="Log Out"/>
          </a>

  </div>
  <a href="frontpage.php">

                <input id="btn4" name="" type="button" value="Back"/>
               </a>

<script src="js/script.js"></script>
</br>

</br>
</br>

<div>

<section class="heart">
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
    <div class="heart-piece"></div>
  </section>
</div>



</body>
</html>