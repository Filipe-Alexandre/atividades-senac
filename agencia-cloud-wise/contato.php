<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #region STYLES -->
    <link rel="stylesheet" href="styles/reset.css">

    <!-- #region ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- #endregion ICONS -->

    <!-- #region SLICK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- #endregion SLICK -->

    <!-- #region AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- #endregion AOS -->

    <link rel="stylesheet" href="./styles/style.css">
    <!-- #endregion STYLES -->

    <link rel="shortcut icon" href="../assets/logos/favicon.ico" type="image/x-icon">
    <title>Contato Cloud Wise</title>
</head>

<body>
    <?php require_once('./sections/sect-header.php'); ?>

    <main>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d914.7504552733338!2d-46.4322524!3d-23.4964439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1688153098942!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="formulario">
            <h2>Entre em contato</h2>
            <form action="#" method="post">
                <div>
                    <input type="text" name="nome" id="nome" placeholder="Nome:">
                    <input type="tel" name="tel" id="tel" placeholder="+55 (11)91234-5678">
                    <input type="email" name="email" id="email" placeholder="email@email.com" required>
                    <h3>Mensagem enviada com sucesso</h3>
                </div>
                <div>
                    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Escreva sua mensagem"></textarea>
                    <span class="btn" onclick="formWhats()">Enviar via Whatsapp</span>
                </div>
            </form>
        </section>

        <?php require_once('./sections/sect-orcamento-duvidas.php'); ?>
        <?php require_once('./sections/sect-back.php'); ?>

    </main>

    <?php require_once('./sections/sect-footer.php'); ?>

    <!-- ↓ biblioteca AOS ↓ -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/script.js"></script>
</body>

</html>