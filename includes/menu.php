<!-- mobile menu -->
<div id="mobile-menu">
    <a id="close"><i class="fa fa-times"></i></a>
    <ul>
        <li class="menu-item"><a href="index.php#">Inicio</a></li>
        <li class="menu-item"><a href="index.php#servicos">Serviços</a></li>
        <li class="menu-item"><a href="index.php#agendar">Agendar</a></li>
        <li class="menu-item"><a href="index.php#contato">Contato</a></li>

        <?php if(!isset($_COOKIE["logged"])) { ?>
            <li class="menu-item" id="login"><a href="login.php">Entrar</a></li>
            <li class="menu-item" id="register"><a href="register.php">Cadastrar</a></li>
        <?php }
        if(isset($_COOKIE["logged"])) {?>
            <li class="menu-item" id="profile"><a href="profile.php">perfil</a></li>
            <li class="menu-item" id="logout"><a href="connection/logout.php">Sair</a></li>
        <?php } ?>
    </ul>
</div>

<!-- menu -->
<div id="menu">
    <ul>
        <li class="menu-side"><a><i class="fas fa-bars"></i></a></li>
        <li class="menu-item"><a href="index.php#">Inicio</a></li>
        <li class="menu-item"><a href="index.php#servicos">Serviços</a></li>
        <li class="menu-item"><a href="index.php#agendar">Agendar</a></li>
        <li class="menu-item"><a href="index.php#contato">Contato</a></li>

        <?php if(!isset($_COOKIE["logged"])) { ?>
            <li class="menu-item" id="login"><a href="login.php">Entrar</a></li>
            <li class="menu-item" id="register"><a href="register.php">Cadastrar</a></li>
        <?php }
        if(isset($_COOKIE["logged"])) {?>
            <li class="menu-item" id="logout"><a href="connection/logout.php">Sair</a></li>
            <li class="menu-item" id="profile"><a href="profile.php">perfil</a></li>
        <?php } ?>
    </ul>
</div>