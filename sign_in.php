<?php
include_once 'header.php';
?>
<div class="container">



<div style="max-width:400px" class="text-center m-auto p-4">
        
            <form class="form-signin p-4" style="margin-top:40px;" action="includes/login.inc.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
                
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" autofocus >
                 <br>
  <label for="inputPassword" class="sr-only">Password</label>
                
  <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" >
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">log in</button>
                <p><a href="sign_up.php">Signup</a></p>
                <p><a href="forgotpassword.php">forgot password</a></p>
  <p class="mt-5 mb-3 text-muted">&copy; MAI-CAB 2020</p>
</form>
        
 
        <!--scripts--plugins-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    </div>
    
    </div>
              <?php
           if(isset($_GET["error"])){
               
               if($_GET["error"] == "emptyinput"){
                   echo "<p><script>alert('fill in all fields')</script></p>";
               }
               else if($_GET["error"] == "wrongemail"){
                    echo "<p><script>alert('incorrect email')</script></p>";
                   
               } 
               
                else if($_GET["error"] == "wrongpassword"){
                    echo "<p><script>alert('incorrect password')</script></p>";
                   
               }    
                
                
           }
           
        ?>

<?php
    include_once 'footer.php';
?>
    </body>

</html>