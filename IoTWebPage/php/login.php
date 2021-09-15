<?php
    $con = mysqli_connect("localhost", "iotdb", "yTprtAspAFRs5cXC");
    if(!$con){
        die('Could not connect : '. mysqli_error());
    }

    $username = $password = "";
    mysqli_select_db($con, "iotdb");
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $handle = "SELECT username,password FROM user_info WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $handle) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //$username = test_input($_POST["username"]);
        //$password = test_input($_POST["password"]);
    }
    

    if(!empty($username) && !empty($password)){
        if($username == $row['username'] && $password == $row['password']){
            header("Location:/NetView.php");
            mysqli_close($con);
        }
        else { //用户名或密码错误，赋值err为1
            header("Location:/login.php?err=1");
        }
    }
    else{
        //用户名或密码为空，赋值err为2
        header("Location:/login.php?err=2");
    }

    
    

    
    
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>