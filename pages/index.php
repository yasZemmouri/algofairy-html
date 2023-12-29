<?php
    include '../includes/config.php';
    // snippet variable 
    $title = "page title";
?>
<!DOCTYPE html>
<html lang="<?=$language?>">

<head>
    <!-- title -->
    <title><?= $siteName . " - " . $title; ?></title>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- snippet variable -->
    <meta name="description"
        content="Google is now saying that the maximum length for a snippet in search results is 320 characters including spaces & snippet features, like the Published Date. I more often recommend a length of 300 characters for a Meta Description">

    <!--===== Favicons =====-->
    <link rel="icon" type="image/x-icon" href= "<?= $faviconUrl ?>">
    <link rel="apple-touch-icon" sizes="160x160" href= "<?= $appleTouchIconUrl ?>">
    <!--===== Fonts =====-->
    <!-- bootstrap icons -->
    <link rel="stylesheet" href= "<?= $bootstrapIconsUrl ?>">
    <!--===== Style =====-->
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href= "<?= $bootstrapCSS ?>" >
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= $mainCSS ?>" >
</head>

<body>
    hello world
</body>

</html>