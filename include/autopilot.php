<meta http-equiv="refresh" content="<?php echo $autorefresh?>;URL='<?php echo $page?>'">
<?php
    $maxspeed = 5; // maximum speed
    $minspeed = 2; // minimum speed

    $direction = "west" // west / east / south-east / south-west / north-east / north-west
    $autorefresh = "10" // seconds before refresh
    $page = $_SERVER['PHP_SELF'];

    echo "La partie autopilote n'a pas été développée";
    echo "Ce robot peut aller de ", $minspeed, " m/s à ", $maxspeed " m/s";

    $zero = 0

    echo "Cette page s'est rafraichie ", $refreshcompteur, " fois.";
    $refreshcompteur = $zero + 1
 ?>
