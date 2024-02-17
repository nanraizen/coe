<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('mentor');
    include(getPart() . 'header.php');
    // include(getPart() . 'navbar-mentor.php'); ?>
    
<?php include(getPart() . 'footer.php'); ?>