<?php
require_once("model.php");
require_once("index.php"); 
        if(isset($_POST['firstname']) && !empty($_POST['firstname']) &&
            isset($_POST['lastname']) && !empty($_POST['lastname']))
            {
              $success = createFriendsBd($_POST['firstname'], $_POST['lastname']);
              if($success)
              { 
                header("Location:index.php"); ?>
              <?php }else ?>
              <?php { ?>
                <div class="alert alert-success" role="alert">
                   your friends add with no success !!!
                </div>
              <?php } ?> 
            <?php } 