<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('admin');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar-admin.php'); ?>
    
<?php include(getPart() . 'footer.php'); ?>