<?php

function selectNavItem($namePage)
{
    if ($namePage == $_SERVER['SCRIPT_NAME'])
        return 'id="select"';
}

?>

<header>
    <nav>
        <a href="/" id="container-logo-fc-metz"><img id="logo-fc-metz" src="../assets/img/logo-fc-metz.svg.png" alt="logo-fc-metz"></a>
        <div id="nav-bar-fc-metz">
            <ul>
                <li><a class="a-nav" <?php echo selectNavItem("/index.php"); ?> href="../index.php">Accueil</a></li>
                <li><a class="a-nav" <?php echo selectNavItem("/pages/joueurs.php"); ?> href="../pages/joueurs.php">Joueurs</a></li>
                <li><a class="a-nav" <?php echo selectNavItem("/pages/histoire.php"); ?> href="../pages/histoire.php">Histoire</a></li>
                <li><a class="a-nav" href="https://www.forum-fcmetz.com/" target="_blank">Forum</a></li>
                <li><a class="a-nav" href="https://www.billetterie-fcmetz.com/" target="_blank">Billeterie</a></li>
            </ul>
        </div>
    </nav>
</header>