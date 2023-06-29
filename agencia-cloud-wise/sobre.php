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
    <title>Sobre a Cloud Wise</title>
</head>

<body>
    <?php require_once('./sections/sect-header.php'); ?>

    <main>
        <!-- <?php require_once('./sections/sect-nuvens.php'); ?> -->

        <?php require_once('./sections/sect-sobre.php'); ?>

        <section class="como" id="missao" data-aos="fade-up">
            <div class="como__img">
                <img src="assets/img/missao.png">
            </div>
            <div class="como__txt">
                <ul class="mvv-menu">
                    <input type="radio" name="mis" id="mis" value="Missão">
                    <label for="mis">Missão</label>
                    <li><span>Visão</span></li>
                    <li><span>Valores</span></li>
                </ul>
                <ul>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Análise de problemas</h3>
                        <p>Realizamos uma análise dos problemas e necessidades do cliente. Dessa forma, conseguimos
                            oferecer soluções personalizadas, efetivas e que atendam às expectativas e objetivos do
                            negócio.</p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Soluções funcionais para o usuário</h3>
                        <p>Nosso foco é sempre o usuário. Por isso, criamos soluções funcionais e intuitivas, que visam
                            proporcionar a melhor experiência possível para o público-alvo de cada projeto.</p>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Uso de tecnologias atuais</h3>
                        <p>
                            Mantemos nossos projetos sempre atualizados com as tecnologias mais recentes, garantindo a
                            qualidade, segurança e eficiência em nossas soluções. Buscamos sempre estar à frente do
                            mercado e oferecer o que há de melhor aos nossos clientes.
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="como" id="visao" data-aos="fade-up">
            <div class="como__img">
                <img src="assets/img/visao.png">
            </div>
            <div class="como__txt">
                <ul class="mvv-menu">
                    <li><span>Missão</span></li>
                    <li><span>Visão</span></li>
                    <li><span>Valores</span></li>
                </ul>
                <ul>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Análise de problemas</h3>
                        <p>Realizamos uma análise dos problemas e necessidades do cliente. Dessa forma, conseguimos
                            oferecer soluções personalizadas, efetivas e que atendam às expectativas e objetivos do
                            negócio.</p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Soluções funcionais para o usuário</h3>
                        <p>Nosso foco é sempre o usuário. Por isso, criamos soluções funcionais e intuitivas, que visam
                            proporcionar a melhor experiência possível para o público-alvo de cada projeto.</p>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Uso de tecnologias atuais</h3>
                        <p>
                            Mantemos nossos projetos sempre atualizados com as tecnologias mais recentes, garantindo a
                            qualidade, segurança e eficiência em nossas soluções. Buscamos sempre estar à frente do
                            mercado e oferecer o que há de melhor aos nossos clientes.
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="como" id="valores" data-aos="fade-up">
            <div class="como__img">
                <img src="assets/img/valores.png">
            </div>
            <div class="como__txt">
                <ul class="mvv-menu">

                </ul>
                <ul>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Análise de problemas</h3>
                        <p>Realizamos uma análise dos problemas e necessidades do cliente. Dessa forma, conseguimos
                            oferecer soluções personalizadas, efetivas e que atendam às expectativas e objetivos do
                            negócio.</p>
                        </i>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Soluções funcionais para o usuário</h3>
                        <p>Nosso foco é sempre o usuário. Por isso, criamos soluções funcionais e intuitivas, que visam
                            proporcionar a melhor experiência possível para o público-alvo de cada projeto.</p>
                    </li>
                    <li>
                        <h3><i class="fa-regular fa-circle-check"></i> Uso de tecnologias atuais</h3>
                        <p>
                            Mantemos nossos projetos sempre atualizados com as tecnologias mais recentes, garantindo a
                            qualidade, segurança e eficiência em nossas soluções. Buscamos sempre estar à frente do
                            mercado e oferecer o que há de melhor aos nossos clientes.
                        </p>
                    </li>
                </ul>
            </div>
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