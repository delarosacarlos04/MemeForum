<?php
$servername="localhost";
$username="crypzzhj";
$password="D7iqck9yZMdr";
$dbname="crypzzhj_userlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $query="SELECT * FROM userlogin WHERE username='".$username."' and password='".$password."'";
    $result = mysqli_query($conn, $query);
    if($result==TRUE){
        if($row = mysqli_fetch_array($result)){
            setcookie("username", $username);
            echo '<script type="text/javascript">alert("Success! You are logged in as '. $username . '")</script>';
            header("Location:/Meme_Forum");
            exit();
        }
        else{
            echo "Wrong credentials. If you would like the make a new account, click new account.";
            }
    }
}

if(isset($_POST['NewAccount'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $query="SELECT * FROM userlogin WHERE username='".$username."'";
    $result = mysqli_query($conn, $query);
    if($result==TRUE){
        if($row = mysqli_fetch_array($result)){
            echo "Sorry, there is another user with that username.";
        }
        else{
            $query= "INSERT INTO userlogin(username, password) VALUES ('".$username."','".$password."')";
            mysqli_query($query,$conn);
            setcookie("username", $username);
            if($conn->query($query)===TRUE){
                echo "yay";
            }else{
                "Error: " . $query . "<br>" . $conn->error;
            }
            //echo '<script type="text/javascript">alert("Success! You created an account as '. $username . '")</script>';
            header("Location:/Meme_Forum");
            exit();
            }
    }
}

/**
 * 

            **/

?>


<html>
<head>
    <link rel="stylesheet" href="main.css">
    <title>User Login</title>
</head>

<body>
    <div class="loginBlock">
    <form method="POST">
        <table>
            Already have an account? Login in here!
            <tr>
                <td><h3>Username:</h3><input type="TEXT" name="user" placeholder="enter username"></td>
            </tr>
            <tr>
                <td><h3>Password:</h3><input type="TEXT" name="pass" placeholder="enter password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Login" value="Login"></td>
            </tr>
        </table>
    </form>

    <form method="POST">
        <table>
            </br>
            Do you need a new account? Sign up here!
            <tr>
                <td><h3>Username:</h3><input type="TEXT" name="user" placeholder="enter new username"></td>
            </tr>
            <tr>
                <td><h3>Password:</h3><input type="TEXT" name="pass" placeholder="enter new password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="NewAccount" value="NewAccount"></td>
            </tr>
        </table>
    </form>
    </div>

</body>

</html>
