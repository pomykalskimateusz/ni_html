<?php
class NavigationBar {
    function __construct() {}

    function content() {
        ?>
            <header>
                <nav class="navbar navbar-expand-sm bg-dark navbar-light fixed-top">
                    <a class="navbar-brand" href="#">
                    <img src="images/american/logo.jpeg" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order.php">Zamów</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </header>
        <?php
    }
}
?>
