<?php
$servername="localhost";
$username="crypzzhj";
$password="D7iqck9yZMdr";
$dbname="crypzzhj_userlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$username=$_COOKIE['username'];
$text=$_POST['text_path'];
$time=time();
if(isset($_POST['Submit'])){
        $query= "INSERT INTO posts(time, username, text_path) VALUES ('".$time."', '".$username."', '".$text."')";
        mysqli_query($query,$conn);
/**        if($conn->query($query)===TRUE){
            echo "yay";
        }else{
            echo "Error: " . $query . "<br>" . $conn->error;
        }**/
        header("Location:/Meme_Forum");
        exit();
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>New text post</title>
</head>

<form method="POST">
    <table>
        <tr>
            <td>Text<input type="TEXT" name="text_path" placeholder="what would you like to say?"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
</form>
</html>
