<?php
class MenuPage {
    static function content() {
        ?>
            <h3>---</h3>
            <section>
                <article>
                    <div class="btn-group-justified">
                    <button type="button" class="btn" onclick="pokaz(1)">Przystawki</button>
                    <button type="button" class="btn" onclick="pokaz(2)">Pizza</button>
                    <button type="button" class="btn" onclick="pokaz(3)">Burger</button>
                    <button type="button" class="btn" onclick="pokaz(4)">Napoje</button>
                    </div>
                    <div class="jumbotron">
                    <img class="img-fluid" src="images/american/menu_main_3.jpg" alt="menu" />
                    </div>
                </article>
            </section>
        <?php
    }
}
?>