<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Gabriel Victor">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        
        <title>Cyber Redes</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            require_once("includes/menu.php");
        ?>
        <!-- Carousel of images -->
        <div id="slider">
            <div id="content">
                <div id="about">
                    <a class="title">Sobre</a>
                    <a class="description">A área mobile está em grande avanço hoje em dia, que tal expandir sua empresa para ela também? Conte conosco para essa missão, temos os melhores profissionais para lhe atender, fazemos sempre o melhor possivel para agradar nossos clientes.</a>
                    <a id="contact" href="#contato">Contato</a>
                </div>
            </div>
        </div>

        <!-- serviços -->
        <div id="servicos">
            <div class="content">
                <i><i class="fas fa-mobile-alt"></i></i>
                <a class="title">Desenvolvimento de aplicativos</a>
                <a class="description">A área mobile está em grande avanço hoje em dia, que tal expandir sua empresa para ela também? Conte conosco para essa missão, temos os melhores profissionais para lhe atender, fazemos sempre o melhor possivel para agradar nossos clientes.</a>
            </div>

            <div class="content">
                <i><i class="fab fa-html5"></i></i>
                <a class="title">Desenvolvimento de sites</a>
                <a class="description">Se você deseja expandir seu negócio para internet, você encontra aqui a melhor equipe para execultar esse trabalho. planejamos e criamos o seu site de acordo com o gosto do cliente e além de tudo sempre cumprimos com as nossas palavras.</a>
            </div>

            <div class="content">
                <i><i class="fas fa-wrench"></i></i>
                <a class="title">Manutenção de hardware</a>
                <a class="description">Está tendo problemas com seu pc? alguma peça quebrou? seu computador não liga mais? Então nós temos a solução e ela se chama CyberRedes, traga seu dispositivo aqui que os nossos profissionais concertará por um preço bastante acessivel. Agende seu atendimento a nossa empresa</a>
            </div>
        </div>


        <!-- agendar -->
        <div id="agendar">
            <img src="images/logo.png" alt="">

            <div id="content">
                <a id="description">Ao agendar seu atendimento, você terá garantido uma conversa com os melhores profissionais que verão a melhor forma de atender ao seu pedido</a>
                <a href="profile.php" id="agendar-button">Agendar</a>
            </div>
        </div>

        <!-- contato -->
        <div id="contato">
            <a href="" class="title">Contato</a>
            <form action="">
                <input type="text" name="name" placeholder="nome">
                <input type="email" name="email" placeholder="email">
                <textarea placeholder="mensagem"></textarea>

                <input type="submit" value="Enviar">
            </form>
        </div>

        <footer>
            <a href="">&copy;Cyber Redes - <span id="years"></a>.</a>
            <!-- social media -->
            <div id="social-media">
                <i><i class="fab fa-facebook-square"></i></i>
                <i><i class="fas fa-envelope"></i></i>
            </div>

            <i class="fas fa-arrow-down" id="more"></i>

            <!-- newsletter -->
            <div id="newsletter">
                <a>Cadastre seu email e receba novidades sobre a CyberRedes</a>
                <form>
                    <input type="email" placeholder="Email">
                    <input type="submit" value="enviar">
                </form>
            </div>
        </footer>
        
        <!-- scripts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/menu.js"></script>
    </body>
</html>