<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meme Forum!</title>
    
     <link rel="stylesheet" href="main.css" />
     <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
     
</head>
<body>
     
     
      <div class="logs">
       <div class="userOptions-group">
            <button class="logButton" onclick="location.href='login.php'">Login</button>
            <button class="logButton" onclick="location.href='logout.php'">Logout</button>
        </div>
    </div>
    
  
  <script src="main.js"></script>
    <div class="userTag">  
        <script>
            //Carlos: testing with a hard coded cookie
            //document.cookie = "username = Carlos"; 
            var name = getCookie("username");
            document.write("<h3>User: ", name,"</h3>");
        </script>
   </div>   
  
  
   <!-- <h1>Welcome to the Meme Forum! </h1>  -->
    
    <br><br><br><br>
    
    
    <div class="banner" >
    <img class="banner" src="assets/newBanner.png" alt="banner of multiple memes"> 
    </div>


   
   <br><br>
   
    <div class="memeWindow">
        <img class="memeWindow"  src="assets/pepeFeelsGood.png" alt="FeelsGoodMan Pepe image"> 
    </div>
          
   
   
<div class="grid">
             
        <div class="userOptions-group">    
            <br>
            
                <form action="text.html">
                    <button class="button" >Text post</button>
                </form>
                
                <form action="upload.html">
                    <button class="button">Photo post</button>
                </form>
                </br></br></br>
                <form action="reply_upload.php" method="POST">
                    <textarea name="ID" placeholder="post ID" required></textarea> 
                    <textarea name="reply" placeholder="reply here" required></textarea> 
                    <input class="submit" type="submit" name="Submit" value="Submit">
                </form>
              <form>
                <!--
                <button class="button" onclick="location.href='text.html'">Text post</button>
                <button class="button" onclick="location.href='upload.html'">Photo post</button>
                
                -->
                <button class="button" >Randomize</button>
                
                <div class="dropdown">
                    <button class="dropbtn">Filter</button>
                    <div id="filterDropdown" class="dropdown-content">
                        <a href="#">Option 1</a>
                        <a href="#">Option 2</a>
                    </div>
                </div>
            </form>

            
        </div>
    </div>
   
<?php
$connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
$result = mysqli_query($connection,"SELECT * FROM posts");
//$uniqueID = hash('crc32', $time);
while($row = mysqli_fetch_array($result)){
    echo "Post: " ,$row['text_path'] . "<br>";
    echo "<h2>Username: " ,$row['username'] . "</h2><br>";
    echo "Time Posted: " ,$row['time'] . " CDT<br>";
    $ID = $row['ID'];
    echo "ID: ", $ID.'<br>';
    getReplies('0', $row['ID']);
/*    if ($row = mysqli_fetch_array($replyResult)){
        $replies = mysqli_fetch_array($replyResult);
        echo $replies['reply'] . " ";
    }*/
    echo "<br>";

}

function getReplies($parent, $uniqueID){
    $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
    $result = mysqli_query($connection,"SELECT * FROM replies WHERE ID = '$uniqueID'");
    echo "Replies:", "<br>";
    while($row = mysqli_fetch_array($result)) {
        echo $row['reply'] . "<br>";
    }
}
?>

    
    <br><br><br><br><br><br><br>



</body>

</html>
