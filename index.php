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
            if (name = ''){
                name = "anon";
            }
            document.write("User: ");
            document.write(name);
            
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
          
   <br>
   
    <div class="centerButtons"> 
        <div class="userOptions-group">    
                <form action="text.html">
                    <button class="button" >Text post</button>
                </form>
                
                <form action="upload.html">
                    <button class="button">Photo post</button>
                </form>
                
        </div>
    </div>
                
                <br><br><br>
        
        <div class="center">
               
                 <form action="reply_upload.php" method="POST">
                
                    <textarea class="id" name="ID" placeholder="post ID" rows="1" cols="16" required></textarea> 
                    <textarea name="reply" placeholder="reply here" rows="5" cols="38" required></textarea> 
                    <input class="submit" type="submit" name="Submit" value="Submit">
                
                </form>
        </div>
               
               
        <!--
            <form>
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
                </div> 
            </form>
        -->
    <div class="forumGrid">
            
        <?php
        //echo "<div class='threadPost'>";
        //echo "<div class='headPost'> <h3> Carlos DLR </h3>  <h3>(83750204)</h3> <h3>  11:11 PM</h3> </div>";
        //echo "<div class='post'><h3> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </h3> </div>";
        //echo "</div><br>";
        
        
        
            //echo "<div class='replyPost'>";
            //echo "Replies: ";
                //echo "<br> <div class='headPost'> <h4> HatersRUs   11:37 PM   </h4> </div> ";
                //echo "<div class='post'>   <h4>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </h4>  </div>";
        //echo "</div> <br>";    
        
        ?>
   
   
   
   
    <?php
    $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
    $result = mysqli_query($connection,"SELECT * FROM posts");
    //$uniqueID = hash('crc32', $time);
    while($row = mysqli_fetch_array($result)){
        
        
        $ID = $row['ID'];
        echo "<div class='threadPost'>";
        echo "<div class='headPost'>  <h3>" .$row['username']. "</h3>  <h3>(ID: ". $ID.")</h3>  <h3>" .$row['time'] . " CDT</h3> </div> " ;
        
        
        if (file_exists($row['text_path'])){
            echo '<img class="memePic"  src="' . $row['text_path'] . '"> </div> ';
        }else{
            echo "<h3>".$row['text_path']. "</h3> </div>";
        }
       
        /*if ($row = mysqli_fetch_array($replyResult)){
            $replies = mysqli_fetch_array($replyResult);
            echo $replies['reply'] . " ";
        }*/
        echo "<br>";
        getReplies('0', $row['ID']);
    }
    
    function getReplies($parent, $uniqueID){
        $connection = mysqli_connect('localhost', 'crypzzhj', 'D7iqck9yZMdr', 'crypzzhj_userlogin');
        $result = mysqli_query($connection,"SELECT * FROM replies WHERE ID = '$uniqueID'");
        
        //echo "<div class='replyPost'>";
        //echo "Replies:  ";
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='replyPost'>";
            echo "Replies:  ";
            
            echo "<br> <div class='headPost'> <h4>" .$row['username'] ."  ". $row['time'] . " CDT </h4></div><br>";
            echo "<div class='post'> <h4>" .$row['reply'] . "</h4></div>";
            echo "</div><br>";
        
        //echo "</div>";
        
        }
        
    }
    ?>
    
    
    <br><br><br><br><br><br><br>
    
    
        <h2> Proud Sponsor: </h2> 
        <img class="ad"  src="assets/oldSpice.jpg" alt="old spice ad">
        
    <div class="center">
        <h3> Want your site listed here? contact us! admin@cryptococc.us</h3>
    </div>

</div>

</body>

</html>
