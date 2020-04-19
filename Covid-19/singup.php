<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username  = $_POST["name"];
    $email     = $_POST["email"];
    $gender    = $_POST["gender"];
    $password= $_POST["password"];
    
    $errors    = array();

    $sql_u = "SELECT * FROM covid WHERE name='$username'";
    $sql_e = "SELECT * FROM covid WHERE email='$email'";

    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {

        $name_error = "Sorry... username already taken";
        echo '<script type="text/JavaScript">
    alert("Name Taken");
    </script>';

    } else if (mysqli_num_rows($res_e) > 0) {

        $email_error = "Sorry... email already taken";
        echo '<script type="text/JavaScript">
    alert("email taken");
    </script>';

    } else {

        $sql = "INSERT INTO covid (name, email, gender, password) VALUES ('$username', '$email', '$gender', '$password')";


        if (mysqli_query($conn, $sql)) {

            $_SESSION['name']    = $username;
            $_SESSION['success'] = "You are now logged in";

            header('location: ../index.php');

        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

    }
    mysqli_close($conn);
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
        <form action="" method="POST">
            <div class="box">
                <h1>
                </br>
                    Sing-Up
                </h1>
                                </br>

                <div>
                    <h5>
                        COVID-19 self test website designed for prototyping and do not contain any official results.
                    </h5>
                </div>
                                
                </br>

                <input class="email" name="name" placeholder="Name" type="text" value=""/>

<input class="email" name="email" placeholder="E-mail" type="text" value=""/>
<input class="email" name="gender" placeholder="Gender" type="text" value=""/>
<input class="email" name="password" placeholder="Password" type="password" value=""/>
<a href="index.php">
    <button class="btn" name="submit" type="button" value="Sing in">
        Sing In
    </button>
</a>
<button id="btn2" name="submit" type="submit" value="Sing-Up">
    Sing-Up
</button>

</div>
</form>

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



