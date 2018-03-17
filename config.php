<?php
//This is where customization starts !
$nickname = ""; // Set a $nickname for your robot
$owner = ""; // Tell to us you pretty name :)

//Webhooks (UNDER DEVELOPMENT)
$api_key = ""; //Set your api key here

//---------------------------
//Don't touch anything under this line (or at your own risks)
if ($nickname == null) {
    echo '
    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Warning! Did you fill the config.php ?</h4>
        <p class="mb-0">This website feel uncomfortable because he is lonely :/, can you fill this document (config.php) with some datas ?</p>
    </div>
    ';
}

?>
