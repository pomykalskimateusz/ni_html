<?php

class MainPage {
    static function content() {
        ?>
            <h3>---</h3>
            <article>
                <h1>---</h1>
                <h1>O nas</h1>
                <p>
                    Nasza restauracja to klimatyczne miejsce, w którym chcemy serwować Wam najlepsze posiłki przenosząc Was na krótką chwile poza granice naszego kraju.
                </p>
                <p>
                    Stawiamy na niepowtarzalny smak oraz staranne przyrządzenie dań. Zwracamy szczególną uwagę na dobór odpowiednich składników, aby były one zawsze świeże i najwyższej jakości.
                </p>
                <div class="row" style="background: white;">
                    <div class="col-sm-4 border-left">
                        <img src = "images/american/wings.jpg" alt = "zdj" />
                        <p>
                            Przekąski i przystawki to potrawy, które nie są traktowane jako pełne danie, a raczej podawane przed głównymi posiłkami lub jako małe dania, które zaspokaja głód pomiędzy śniadaniem, obiadem czy kolacją.
                        </p>
                    </div>
                    <div class="col-sm-4 border-left border-right">
                        <img src = "images/american/pizza.jpg" alt = "zdj" />
                        <p>
                            Pizza jest to potrawa kuchni włoskiej, obecnie szeroko rozpowszechniona na całym świecie. Tradycyjna włoska pizza jest to płaski placek z ciasta drożdżowego (focaccia), posmarowany sosem pomidorowym, posypany tartym serem mozzarella i ziołami, pieczony w bardzo mocno nagrzanym piecu. 
                        </p>
                    </div>
                    <div class="col-sm-4 border-right">
                        <img src = "images/american/hamburger.jpg" alt = "zdj" />
                        <p>
                            Burgery to prawdziwa ikona kuchni amerykańskiej. To fastfoodowe danie podbiło podniebienia i serca miłośników dobrego jedzenia – zwłaszcza w ostatnich latach, odkąd jakość przygotowania jest priorytetem.
                        </p>
                    </div>
                </div>
                <h1>
                    <p>A co w środku ? </p>
                </h1>
                <div class="rslides_container">
                    <ul class="rslides" id="slider2">
                        <li><img src="images/1.jpg" alt=""></li>
                        <li><img src="images/2.jpg" alt=""></li>
                        <li><img src="images/3.jpg" alt=""></li>
                        <li><img src="images/4.jpg" alt=""></li>
                    </ul>
                </div>
            </article>
        <?php
    }
}
?>