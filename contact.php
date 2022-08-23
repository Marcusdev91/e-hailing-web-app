<?php 
    include_once 'header.php';
?>
    <form class="text-center m-auto  " style="max-width:400px;max-height:80vh;padding-top:100px;" action="sendcontact.php" method="post">
  <div class="form-group text-left">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
        
         <div class="form-group text-left">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
        
              <div class="form-group text-left">
    <label for="exampleInputEmail1 ">message</label>
    <textarea class="form-control " id="exampleInputEmail1" name="message" aria-describedby="" style="resize:none" required></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your message with anyone else.</small>
  </div>
        

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

 <?php
  include_once 'footer.php';
      ?>

</html>