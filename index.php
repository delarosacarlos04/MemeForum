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
            document.write("User: ", name);
        </script>
   </div>   
  
  
   <!-- <h1>Welcome to the Meme Forum! </h1>  -->
    
    <br><br><br><br>
    
    
    <div class="banner" >
    <img class="banner" src="assets/purple.png" alt="banner of multiple memes"> 
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
                <br><br><br>
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
                <!--<button class="button" >Randomize</button>
                
                <div class="dropdown">
                    <button class="dropbtn">Filter</button>
                    <div id="filterDropdown" class="dropdown-content">
                        <a href="#">Option 1</a>
                        <a href="#">Option 2</a>
                    </div>
                </div>-->
            </form>
            
            
        <?php
        echo "<div class='postThread'>";
        echo "<div class='headPost'> <h3> Carlos DLR </h3>  <h3>(83750204)</h3> <h3>  11:11 PM</h3> </div>";
        
        echo "<h3> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu</h3><br>";
        
        echo "<br></div><br>";
    
        ?>
            
            
    
<!-- <div class="postThread">   -->
    <?php
    $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
    $result = mysqli_query($connection,"SELECT * FROM posts");
    //$uniqueID = hash('crc32', $time);
    while($row = mysqli_fetch_array($result)){
        
        
        $ID = $row['ID'];
        echo "<div class='postThread'>";
        echo "<div class='headPost'>  <h3>".$row['username']."</h3>  <h3>(". $ID.")</h3>  <h3>" .$row['time'] . " CDT</h3> </div> " ;
        echo "<h3>".$row['text_path']. "</h3> </div> <br>";
        getReplies('0', $row['ID']);
        /*if ($row = mysqli_fetch_array($replyResult)){
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
            
            
            
            echo "<br> <h4> ". $row['username'] ." // ". $row['time'] . "   </h4><br>";
            echo "<h4>" .$row['reply'] .   "</h4>";
        
        }
        
    }
    ?>
    
<!--  </div>  -->
    
    <br><br><br><br><br><br><br>



</body>

</html>
