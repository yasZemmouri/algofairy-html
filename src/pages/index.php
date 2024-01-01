<?php
    // Prevent caching for this PHP file
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
    header("Pragma: no-cache"); // HTTP 1.0
    header("Expires: 0"); // Proxies

    include '../includes/config.php';
    include '../includes/button_function.php';

    // snippet variable 
    $title = "episode #1";
    $metaContent="Google is now saying that the maximum length for a snippet in search results is 320 characters including spaces & snippet features, like the Published Date. I more often recommend a length of 300 characters for a Meta Description"
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
        content="<?= $metaContent ?>">

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
    <!-- Header -->
    <?php
        include '../includes/header.php';
    ?>
    <!-- This should be assigned dynamically?  -->
   <main id="home">
        <h1>HTML</h1>
        <h2>Episode 01</h2>
        <p>TEST</p>
   </main>
   <!-- Footer -->
    <?php
        include '../includes/footer.php';
    ?>
    <!-- Vendor js file -->
    <script src = <?php $bootstrapJS ?>></script>
    <!-- Main js File -->
    <script src= <?php $mainJS?>></script>
</body>

</html>