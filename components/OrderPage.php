<?php
class OrderPage {
    function __construct() {}

    function content() {
        ?>
            <h1>---</h1>
            <section>
                <article>
                    <form onsubmit="return check()">
                    <div class="form-group">
                        <label for="imie">Imię:</label>
                        <input type="text" class="form-control" id="imie" placeholder="Podaj imie" name="imie" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nazwisko">Nazwisko:</label>
                        <input type="text" class="form-control" id="nazwisko" placeholder="Podaj nazwisko" name="nazwisko" />
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="Miasto">Miasto</label>
                        <input type="text" class="form-control" id="miasto" placeholder="Miasto">
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="adres">Ulica</label>
                        <input type="text" class="form-control" id="adres" placeholder="Ulica">
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="zip">Kod pocztowy</label>
                        <input type="text" class="form-control" id="zip" placeholder="Zip">
                        </div>
                    </div>
                    <div id="przystawki">
                        <p>
                        Przystawki:
                        </p>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="FRYTKI" value ="Frytki" name="przystawki">
                        <label class="custom-control-label" for="FRYTKI">FRYTKI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="ONION_RINGS" value="Onion rings" name="przystawki">
                        <label class="custom-control-label" for="ONION_RINGS">ONION RINGS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CHICKEN_STRIPS" value="Chicken strips" name="przystawki">
                        <label class="custom-control-label" for="CHICKEN_STRIPS">CHICKEN STRIPS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="COLESŁAW" value="Colesław" name="przystawki">
                        <label class="custom-control-label" for="COLESŁAW">COLESŁAW</label>
                        </div>
                    </div>
                    <div id="pizza">
                        <p>
                        Pizza:
                        </p>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CAPRICIOSA" value="Pizza Capriciosa" name="pizza">
                        <label class="custom-control-label" for="CAPRICIOSA">CAPRICIOSA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="PEPERONI" value="Pizza Peperoni" name="pizza">
                        <label class="custom-control-label" for="PEPERONI">PEPERONI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="HAWAJSKA" value="Pizza Hawajska" name="pizza">
                        <label class="custom-control-label" for="HAWAJSKA">HAWAJSKA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="GRECKA" value="Pizza Grecka" name="pizza">
                        <label class="custom-control-label" for="GRECKA">GRECKA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CARBONARA" value="Pizza Carbonara" name="pizza">
                        <label class="custom-control-label" for="CARBONARA">CARBONARA</label>
                        </div>
                    </div>
                    <div id="burger">
                        <p>
                        Burgery:
                        </p>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="BURGER_WOŁOW" value="Hamburger wołowy" name="burger">
                        <label class="custom-control-label" for="BURGER_WOŁOW">KLASYCZNY BURGER WOŁOWY</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CHEESEBURGER_WOŁOWY" value="Cheesburger wołowy" name="burger">
                        <label class="custom-control-label" for="CHEESEBURGER_WOŁOWY">CHEESEBURGER WOŁOWY</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="WOŁOWY_BEKON" value="Burger wołowy bekon" name="burger">
                        <label class="custom-control-label" for="WOŁOWY_BEKON">WOŁOWY BEKON</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="GRECKI_Z_KURCZAKA" value="Burger grecki z kurczaka" name="burger">
                        <label class="custom-control-label" for="GRECKI_Z_KURCZAKA">GRECKI Z KURCZAKA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="NASZA_SPECJALNOŚĆ" value="Burger Nasza Specjalność" name="burger">
                        <label class="custom-control-label" for="NASZA_SPECJALNOŚĆ">NASZA SPECJALNOŚĆ</label>
                        </div>
                    </div>
                    <div id="napoje">
                        <p>
                        Napoje:
                        </p>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CAPPY_POMARAŃCZA" value="Cappy pomarańcza" name="napoje">
                        <label class="custom-control-label" for="CAPPY_POMARAŃCZA">CAPPY POMARAŃCZA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="CAPPY_JABŁKO" value="Cappy jabłko" name="napoje">
                        <label class="custom-control-label" for="CAPPY_JABŁKO">CAPPY JABŁKO</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="NESTEA" value="Nestea" name="napoje">
                        <label class="custom-control-label" for="NESTEA">NESTEA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="Woda" value="Woda" name="napoje">
                        <label class="custom-control-label" for="Woda">WODA MINERALNA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="COLA" value="Cola" name="napoje">
                        <label class="custom-control-label" for="COLA">COLA</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="FANTA" value="Fanta" name="napoje">
                        <label class="custom-control-label" for="FANTA">FANTA</label>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <button type="submit" class="btn btn-primary" onclick="save()">Submit</button>
                    </form>
                </article>
            </section>
        <?php
    }
}
?>