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
    <!-- <link rel="stylesheet" href= "<?= $bootstrapCSS ?>" > -->
    <!-- Main CSS File -->
    <link rel="stylesheet" href= "<?= $mainCSS_from_src ?>" >
    <!-- bootstrap 5.3 css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php
        include '../includes/header.php';
    ?>
    <!-- This should be assigned dynamically?  -->
    <main id="home" class="w-100">
        <?php
            include '../includes/carousel01/carousel01.php'
        ?>
    </main>
   <!-- Footer -->
    <?php
        include '../includes/footer.php';
    ?>
    <!-- Vendor js file -->
    <script src = <?php $bootstrapJS ?>></script>
    <!-- Main js File -->
    <script src= <?php $mainJS?>></script>
    <!-- Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>