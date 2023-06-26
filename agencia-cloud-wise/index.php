<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #region STYLES -->
    <link rel="stylesheet" href="styles/reset.css">

    <!-- #region ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- #endregion ICONS -->

    <!-- #region SLICK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- #endregion SLICK -->

    <!-- #region AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- #endregion AOS -->

    <link rel="stylesheet" href="styles/style.css">
    <!-- #endregion STYLES -->

    <link rel="shortcut icon" href="../assets/logos/favicon.ico" type="image/x-icon">
    <title>Cloud Wise</title>
</head>

<body>
    <?php require_once('./sections/sect-header.php'); ?>


    <main>
        <?php require_once('./sections/sect-banner.php'); ?>
        <?php require_once('./sections/sect-sobre.php'); ?>
        <?php require_once('./sections/sect-comoTrabalhamos.php'); ?>
        <?php require_once('./sections/sect-servicos.php'); ?>
        <?php require_once('./sections/sect-servicosTab.php'); ?>
        <?php require_once('./sections/sect-blog.php'); ?>
        <?php require_once('./sections/sect-orcamento-duvidas.php'); ?>
        <?php require_once('./sections/sect-back.php'); ?>

    </main>

    <?php require_once('./sections/sect-footer.php'); ?>

    <!-- ↓ biblioteca AOS ↓ -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/script.js"></script>
</body>

</html>