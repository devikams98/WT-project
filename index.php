<?php
// Start the session
session_start();
?>
<html>
    <head>
        <title>login/reg form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                 <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>

                </div> 
                
               
            <form id="login" class="input-group" action="login.php" method="POST">
            <input type="text" name="user" class="input-feild" placeholder="User Id" required><br><br>
            <input type="password" name="pswd" class="input-feild" placeholder="Enter password" required><br><br>
            <button type="submit" value="submit" name="submit" class="submit-btn">Log in</button>
            <?php
                if($_SESSION["eror"] == 1){
                echo "<br><br><p>"."incorrect username or password"."</p>";}
                ?>
            </form>

            
            
            <form id="register" class="input-group" onclick="register()" action="signup.php" method="POST">
                    <input type="text" name="user" class="input-feild" placeholder="User Id" required><br><br>
                    <input type="email" name="email" class="input-feild" placeholder="Email Id" required><br><br>
                    <input type="password" name="pswd" class="input-feild" placeholder="Enter password" required><br><br>
                    <button type="submit" name="submit" value="submit" class="submit-btn">Register</button>
                    <?php
                     // if($_SESSION["eror1"] == 2){
                       //echo "<br><br><p>"."username already exists, try different username"."</p>";}
                      ?>
            </form>
            </form>
           
            </div>

            
        </div>
        

        <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";

        }
        </script>
    </body>
</html>