<?php

if (isset($_POST['sub'])){
    $connection = mysqli_connect('localhost', 'root','', 'company');
    if (!$connection){
        echo "<script>alert('Database not connected')</script>";

    }

    $user = $_POST['username'];
    $password = $_POST['password'];

    $retrive = "SELECT * FROM signup";
    $table = mysqli_query($connection,$retrive);
    if(mysqli_num_rows($table)>0){
        while ($row = mysqli_fetch_array($table)){
            if ($row['email'] == $user && $row['password']==$password){
                header("Location: http://localhost:63342/New%20folder/home.html?_ijt=7lh6tmb0421apss7f7rh5aaau8&_ij_reload=RELOAD_ON_SAVE");
                exit();
            }
            else {

                echo "<script>alert('You entered Wrong user id or Password')</script>)";
                echo "<script>location.href='signin.php'</script>";


            }
        }

    }

}

