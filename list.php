<?php
// Start the session
session_start();
?>
<html>
    <head>
        <title>wishlist</title>
        <link rel="stylesheet" href="list.css">
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="hero">
        <br><br>
        <a href="index.php"> <button type="button" style="float: right;" class="btn btn-danger m-2">Log Out</button> </a>
        
         
            <div class="form-box">
                 <div class="button-box">
                    <div id="btn"></div>
                    
                    <button type="button" class="toggle-btn" onclick="bucketlist()">Bucket list</button>
                    <button type="button" class="toggle-btn" onclick="completed()">Completed</button>
                      
                </div> 
                
                <?php
                    include_once 'db.php';
                    $user = $_SESSION["username"];   ////////
                    $complt = "no";
                    $sql="SELECT * FROM list WHERE uname = '$user' AND completed = '$complt'";
                    $result=mysqli_query($conn,$sql);
                  ?>


                
               <div class="container">
               <button type="button" class="btn btn-info mr-4" style="float: right;" data-toggle="modal" data-target="#myModal">Add to list</button>
                <div class="row input-group" id="bucketlist">
                    <ul class="list-group list-group-flush">
                    <?php
                        if(! $name=$result->fetch_assoc())
                        echo "<li class='list-group-item'>"." list is empty"."</li>";
                        while($name=$result->fetch_assoc()){
                        echo "<li class='list-group-item'>".$name["place"]."</li>";
                         }
                         ?>
                    </ul>
                  </div>
                

                  <?php
                    $complt = "yes";
                    $sql="SELECT * FROM list WHERE uname = '$user' AND completed = '$complt'";
                    $result=mysqli_query($conn,$sql);
                  ?>
                  <div class="row input-group" id="completed" onclick="completed()">
                    <ul class="list-group list-group-flush">
                    <?php
                        if(! $name=$result->fetch_assoc())
                        echo "<li class='list-group-item'>"." list is empty"."</li>";
                        while($name=$result->fetch_assoc()){
                        echo "<li class='list-group-item'>".$name["place"]."</li>";
                         }
                         ?>
                    </ul>
                  </div>
                  </div>
            </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
    
          <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
             
            <h5 class="modal-title" style="float: left;">Modal Header</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form  class="input-group" action="bucketlist.php" method="POST">
         <div class="modal-body">
         
         
                    <input type="text" name="place" class="form-control my-2" placeholder="Enter the destination to be added" required><br><br>
                    <input type="hidden" name="user" value="<?php echo $user; ?>">
                  
                    
                  
         </div>
         <button type="submit" name="submit" value="submit" class="btn btn-default">Add Item</button>
       <!--   <button type="submit" name="submit" value="submit" class="btn btn-default" data-dismiss="modal">Add</button>
                        -->  
          </form>  
           </div>
      
    </div>
  </div>

  
        <script>
        var x=document.getElementById("bucketlist");
        var y=document.getElementById("completed");
        var z=document.getElementById("btn");

        function completed(){
            x.style.left = "-400px";
            y.style.left = "-40px";
            z.style.left = "110px";

        }
        function bucketlist(){
            x.style.left = "300px";
            y.style.left = "950px";
            z.style.left = "0";

        }
        </script>
    </body>
</html>