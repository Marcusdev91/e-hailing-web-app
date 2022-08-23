
<!--AUTHOR:-MARCUS-MAKHUBELA-
DATE:15 OCTOBER 2020-->

<?php
    session_start();
    
?>
<!doctype html>
<html lang="en">
    <head>
                <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        
             <!--Googlefont-->
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="css/styles.css">
        

    </head>
    <body style ="font-family: 'Roboto', sans-serif; ">
        
        <!--navbar-->
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color:#f3ecea; z-index:1000;">
            
            
            <ul class="navbar-nav d-flex flex-row-reverse p-2 align-items-center  " style="width:100%;">
               
                     <li class="p-2">
                    <button type="button" id="click" style="border:none;background:none; active:none;" data-toggle="modal" data-target="#myModal" >
                            <svg width="1em" height="1em"  viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path  id="click" fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        
                        </button>
                                                            <!-- collapse -->
                    
                
                </li>
               
                <?php
            
                    if(isset($_SESSION["user_first_name"])){
                        
                        echo'<li class="p-2"><a href="profile.php">Profile</a></li>';
                        echo'<li class="p-2"><a href="includes/logout.inc.php">logout</a></li>';
                        
                    }else{
                        echo ' <li class="p-2">
                     <a href="sign_up.php" ><button type="button" class="" style="border:none"; ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></button> </a>
                </li>';
                        
                        echo '  <li class="nav-item sm-auto class="p-2">
                    <a class="link"  style="cursor: pointer; text-decoration-line: none; color:black;  text-indent: none;" href="sign_in.php">
                       
                    LOGIN
                    </a>
                   
                </li>';
                    }
                
                ?>
                
           
             
                <a class="navbar-brand m-auto flex-fill" id="click" href="index.php"><img  src="images/logo.png"></a>   
           
      
            </ul>
            
                             
        </nav>
        
          <!-- Modal -->
        <div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <ul>
            <li class="list-group"><a style="color:grey;" href="about.php">About</a></li>
            <li class="list-group"><a style="color:grey;" href="contact.php">Contact</a></li> 
        
         </ul>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>