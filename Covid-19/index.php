<?php
   include("connect.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM covid WHERE email = '$email' and password = '$password'";

      $result = mysqli_query($conn,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {

         $_SESSION['login_user'] = $email;
         
         header("location: frontpage.php");
      }else {
         $error = "Your Login Name or Password is invalid";

         echo '<script type="text/JavaScript">
    alert("No Record Found");

    </script>';
      }
    
   }
?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Self-Test
            </title>
            <link href="style/style.css" rel="stylesheet">
              <link rel="stylesheet" href="heartcss/styles.css">
            </link>
        </meta>
    </head>
    <body>
        <form action="" method="post">
            <div class="box">
              </br>

                <h1>
                    Login
                </h1>
                <div>
                  </br>

                    <h5>
                        COVID-19 self test website designed for prototyping and do not contain any official results.
                    </h5>
                    </br>

                </div>
                <input class="email" name="email" placeholder="E-mail" type="email" value=""/>

                <input class="email" name="password" placeholder="Password" type="password" value=""/>
                </br>
</br>


                <input class="btn" name="" type="submit" value="Sing In"/>
                <a href="singup.php">

                <input id="btn2" name="" type="button" value="Sing Up"/>
               </a>
            </div>
        </form>

<p>
    Forgot your password?
    <u style="color:#947090;">
        <a href="#">
            Click Here!
        </a>
    </u>
</p>

</br>
</br>
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

