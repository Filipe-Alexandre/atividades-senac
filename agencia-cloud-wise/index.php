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
    <?php require_once('./sections/sect-servicos'); ?>
    <?php require_once('./sections/sect-servicosTab'); ?>
    <?php require_once('./sections/sect-blog'); ?>
    <?php require_once('./sections/sect-orcamento-duvidas'); ?>
    </main>

    <?php require_once('./sections/sect-footer.php'); ?>

        <div class="rodape">
            <div class="acompanhe">
                <h2>Acompanhe de perto</h2>
                <hr>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                </ul>
                <img src="assets/logos/logo-branco.png" alt="Cloud Wise">
            </div>
            <div class="menu">
                <ul>
                    <h3>Menu</h3>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
                <ul>
                    <h3>Agência</h3>
                    <address>
                        <a href="https://goo.gl/maps/nWsuFA5Y4YdWxJb57?coh=178573&entry=tt" target="_blank">
                            Av. Marechal Tito, 1500
                            <br>
                            São Paulo - SP
                        </a>
                    </address>
                </ul>
                <ul>
                    <h3>Contato</h3>
                    <a href="#" target="_blank">+55 (11) 912 345 678</a>
                    <a href="#" target="_blank">cloudwisedevs@gmail.com</a>
                </ul>
            </div>
        </div>

        <div class="direito">
            <p>2023 &#x2022; Todos os direitos reservados &COPY;</p>
        </div>
    </footer>

    <!-- ↓ biblioteca AOS ↓ -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/script.js"></script>
</body>

</html>