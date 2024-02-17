<!DOCTYPE html>
<html lang="en-id">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php echo $sitename; ?></title>
    <link rel="icon" href="/assets/img/logo/favicon.png" type="image/svg+xml" />

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/lib/bootstrap/bootstrap.min.css" />
    <?php if (thisUrl('/')) { echo '<link rel="stylesheet" href="/assets/lib/tinyslider/tinyslider.min.css" />'; } ?>
    <link rel="stylesheet" href="/assets/css/template.min.css" />

    <!-- JS -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/bootstrap/bootstrap.min.js"></script>
    <?php if (thisUrl('/')) { echo '<script src="/assets/lib/tinyslider/tinyslider.min.js"></script>'; } ?>

</head>
