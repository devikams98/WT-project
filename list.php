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
            <div class="form-box">
                 <div class="button-box">
                    <div id="btn"></div>
                    
                    <button type="button" class="toggle-btn" onclick="bucketlist()">Bucket list</button>
                    <button type="button" class="toggle-btn" onclick="completed()">Completed</button>
                      
                </div> 
                
               <div class="container">
                <div class="row input-group" id="bucketlist">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">First item</li>
                      <li class="list-group-item">Second item</li>
                      <li class="list-group-item">Third item</li>
                      <li class="list-group-item">Fourth item</li>
                    </ul>
                  </div>
            
                  <div class="row input-group" id="completed" onclick="completed()">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">First item</li>
                      <li class="list-group-item">Second item</li>
                      <li class="list-group-item">Third item</li>
                      <li class="list-group-item">Fourth item</li>
                    </ul>
                  </div>
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