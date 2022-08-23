<? php
 require "header.php";
?>
<main>
    <div class="container">
        <section class="section-default">
            <h1>Reset your password</h1>
            
            <p>An e-mail will be sent to you with instruction on how to reset your password.</p>
            
            <form action="includes/reset-request.inc.php" method="post">
                <input type="text" name="email" placeholder="Enter you e-mail address...">
                <button type="submit" name="reset-request-submit">Receive new password by email</button>
            
            </form>
        
            <?php

                if(isset($_GET["reset"])){
                    if($_GET["reset"] == "success"){
                        echo '<p class="">Check your e-mail</p>';
                    }
                }

            ?>
        </section>
    
    </div>
</main>

<?php
    require "footer.php";
?>
