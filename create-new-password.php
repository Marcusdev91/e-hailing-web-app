<? php
 require "header.php";
?>
<main>
    <div class="container">
        <section class="section-default">
           <?php
                $selector = $_GET["selector"];
            $selector = $_GET["validator"];
            
            if(empty($selector) || empty($validator)){
                echo"Could not validate your request!";
            }else{
                if(ctype_xdigit($selector) ! == false && ctype_xdigit($validator) ! == false){
                    
                    ?>
                        <form action="includes/reset_password.inc.php" method="post">
                            <input type="hidden" name="selector" value="<?php echo $selector ?>;">
                            <input type="hidden" name="validator" value="<?php echo $validator ?>;">
                            <input type="password" name="pwd" placeholder="Enter a new password.." >
                            <input type="password" name="pwd-repeat" placeholder="Enter a new password.." >
                            <button type="submit" class="btn primary" name="reset-password-submit">Reset password</button>
                                   
            
            
                        </form>
            
                    <?php
                    
                }
            }
            ?>
        </section>
    
    </div>
</main>

<?php
    require "footer.php";
?>
