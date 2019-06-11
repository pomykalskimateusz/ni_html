function pokaz(id)
{
  tresc="";
  switch (id)
  {
    case 1: tresc += pokazPrzystawka();
    break;
    case 2: tresc += pokazPizza();
    break;
    case 3: tresc += pokazBurger();
    break;
    case 4: tresc += pokazNapoje();
    break;
  }
  document.getElementsByClassName('jumbotron')[0].innerHTML = tresc;
}
function pokazPrzystawka()
{
  tresc += '<span class = "nazwa">FRYTKI</span><br/>' +
  '<span class = "cena">5</span><br/><br/>' +
  '<span class = "nazwa">ONION RINGS</span><br/>' +
  '<span class = "cena">5</span><br/><br/>' +
  '<span class = "nazwa">5 CHICKEN STRIPS</span><br/>' +
  '<span class = "cena">10</span><br/><br/>' +
  '<span class = "nazwa">COLESŁAW</span><br/>' +
  '<span class = "cena">5</span><br/><br/>'
  return tresc;
}
function pokazPizza()
{
  tresc+='<span class = "nazwa">CAPRICIOSA</span><br/>' +
  '<span class = opis> szynka, pieczarki, sos pomidorowy</span>' +
  '<span class = "cena">27</span></br><br/>' +
  '<span class = "nazwa">PEPERONI</span><br/>' +
  '<span class = opis>salami, cebula, sos pomidorowy</span>' +
  '<span class = "cena">27</span><br/><br/>' +
  '<span class = "nazwa">HAWAJSKA</span><br/>' +
  '<span class = opis>szynka, ananas, sos pomidorowy</span>'+
  '<span class = "cena">27</span><br/><br/>' +
  '<span class = "nazwa">GRECKA</span><br/>' +
  '<span class = opis>oliwki czarne , pomidor, zioła, sos pomidorowy</span>'+
  '<span class = "cena">27</span><br/><br/>' +
  '<span class = "nazwa">CARBONARA</span><br/>' +  
  '<span class = opis>boczek, cebula, pieczarki (sos śmietankowy)</span>'+
  '<span class = "cena">27</span><br/><br/>'  
  return tresc;
}
function pokazBurger()
{
  tresc+='<span class = "nazwa">KLASYCZNY BURGER WOŁOWY </span><br/>' +
  '<span class = opis>majonez, mix sałat, pomidor, cebula czerwona</span>' +
  '<span class = "cena">18</span></br><br/>' +
  '<span class = "nazwa">CHEESEBURGER WOŁOWY</span><br/>' +
  '<span class = opis>majonez, mix sałat, chedar, pomidor, cebula czerwona</span>' +
  '<span class = "cena">20</span><br/><br/>' + 
  '<span class = "nazwa">WOŁOWY BEKON</span><br/>' +
  '<span class = opis>sos firmowy, gorgonzola, bekon, papryczka jalapeno, sos habanero</span>' +
  '<span class = "cena">23</span><br/><br/>' + 
  '<span class = "nazwa">GRECKI Z KURCZAKA</span><br/>' +
  '<span class = opis>majonez, mix sałat, feta, oliwki, bazylia, cebula czerwona</span>' +
  '<span class = "cena">23</span><br/><br/>' + 
  '<span class = "nazwa">NASZA SPECJALNOŚĆ</span><br/>' +
  '<span class = opis>sos firmowy, mix sałat, cheddar, onion rings, bekon, cebula czerwona, papryczka jalapeno, sos habanero</span>' +
  '<span class = "cena">27</span><br/><br/>'  
  return tresc;
}
function pokazNapoje()
{
  tresc+='<span class = "nazwa">CAPPY POMARAŃCZA</span>' +
  '<span class = "cena">4</span></br><br/>' +
  '<span class = "nazwa">CAPPY JABŁKO</span>' +
  '<span class = "cena">4</span><br/><br/>' +
  '<span class = "nazwa">NESTEA</span>' +
  '<span class = "cena">4</span><br/><br/>' +
  '<span class = "nazwa">WODA MINERALNA</span>' +
  '<span class = "cena">4</span><br/><br/>' +
  '<span class = "nazwa">COLA</span>' +
  '<span class = "cena">5</span><br/><br/>' +
  '<span class = "nazwa">FANTA</span>' +
  '<span class = "cena">5</span><br/><br/>'
  return tresc;
}
