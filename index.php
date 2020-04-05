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
                
               
            <form id="login" class="input-group">
            <input type="text" class="input-feild" placeholder="User Id" required><br><br>
            <input type="text" class="input-feild" placeholder="Enter password" required><br><br>
            <input type="checkbox" class="chech-box"><span>Remember password</span>
            <button type="submit" name="submit2" class="submit-btn">Log in</button>
            </form>
            
            <form id="register" class="input-group" onclick="register()" action="signup.php" method="POST">
                    <input type="text" name="user" class="input-feild" placeholder="User Id" required><br><br>
                    <input type="email" name="email" class="input-feild" placeholder="Email Id" required><br><br>
                    <input type="password" name="pswd" class="input-feild" placeholder="Enter password" required><br><br>
                    <input type="checkbox" class="chech-box"><span>I agree to the terms and conditions</span>
                    <button type="submit" name="submit" value="submit" class="submit-btn">Register</button>
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