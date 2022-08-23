<?php
include_once 'header.php';
?>
        
     
        
       <div style="margin:auto;padding-top:2vh;max-width: 380px; color:#464645;"  class=" mt-sm-8 mt-lg-2 ">
           
            <form  style="max-width: 439px; background-color:white;padding-top:100px;" class="m-auto mt-lg-4 rounded " action="includes/signup.inc.php" method="POST"> 
                <h4 class="pt-lg-4 pt-sm-4" style="text-align: center;">Sign up as a driver below</h4>
                 

 
                <div class="form-group mb-4">
                      <label for="exampleFormControlInput1">firstname</label>
                    <input type="text" name="firstname" class="form-control " id="exampleFormControlInput1" placeholder="Firstname" >  
                </div>
    
      <div class="form-group mb-4">
        <label for="exampleFormControlInput1">lastname</label>
    <input type="text" name="lastname" class="form-control " id="exampleFormControlInput1" placeholder="Lastname" >
    </div>
                        <div class="form-group ">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com" >
  </div>
                      <div class="form-group mb-4">
        <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="pwd" class="form-control " id="exampleFormControlInput1" placeholder="Password" >
    </div>
    

                
    <div class="form-group mb-4">
        <label for="exampleFormControlInput1">Password Repeat</label>
    <input type="password" name="repeatpwd" class="form-control " id="exampleFormControlInput1" placeholder="Password" >
    </div>
                
    
    <button class="btn rounded btn btn-outline-dark btn-block "  type="submit" name="submit" >Next <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>    <span class="oi oi-arrow-right"></span></button>
                <br>
  
            <p class="m-auto  text-muted">&copy;MAI-CAB 2020</p>
                
                
                
           </form>
           
        
      <?php
           if(isset($_GET["error"])){
               
               if($_GET["error"] == "emptyinput"){
                   echo "<p><script>alert('fill in all fields try again')</script></p>";
               }
               else if($_GET["error"] == "invalidemail"){
                    echo "<p><script>alert('invalidemail try again')</script></p>";
                   
               }
                   else if($_GET["error"] == "passworddontmatch"){
                   echo "<p><script>alert('passwords dont match try again')</script></p>";
               }
                   else if($_GET["error"] == "nametaken"){
                   echo "<p><script>alert('name or email taken try again')</script></p>";
               }
               if($_GET["error"] == "none"){
                   echo "<p><script>alert('Signed up')</script></p>";
               }
                    else if($_GET["error"] == "stmtfailed"){
                   echo "<p><script>alert('Technical error, try again later')</script></p>";
               }
               
                
           }
           
           if(isset($_GET["newpwd"])){
               
               if($_GET["newpwd"] == "passwordupdated"){
                   echo "<p><script>alert('Your password has been reset!')</script></p>";
               }
             
                
           }
           
           
        ?>
        
         
    
    
       <?php
            include 'footer.php';
        ?>
    </body>


</html>