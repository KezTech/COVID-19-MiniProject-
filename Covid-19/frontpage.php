<?php
include 'session.php';
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <title>Self-Test</title>
  <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="heartcss/styles.css">

</head>

<body>




<div class="boxfront" align="center">
</br>
<h1>All Info about COVID-19</h1>
</br>
<h4> WELCOME  <?php echo $login_session; ?> </h4>
</br>


<div>
<h2>Select Any Options.</h2>

	</div>
</br></br>

<div class="">
 <a href="test.php"> <h3>Self-Test</h3>-Take self test so that you can predict the disease in you</a>
</div>

</br>
</br>

<div class="">
 <a href="Prevention.php"> <h3>Know More About Prevention</h3>-Visit here for more information about COVID-19 and methods to prevent it.</a>
</div>
  </br>
  </br>

<div class="">
 <a href="https://who.sprinklr.com/"> <h3>Latest Updates</h3>-Where the curve of COVID-19 is heading towards, heres all the live information about COVID-19</a>
</div>
</br></br></br></br>

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


</br></br>

</br>
</br>

<a href="logout.php">
           <input id="btn3" name="" type="submit" value="Log Out"/>
     </a>

</div>



</body>
</html>
