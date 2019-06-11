function check() {
  var ok = true;
  const regLast = /^[a-zA-Z]{2,20}$/;
  const regZip = /^[0-9]{2}-[0-9]{3}$/;
  const regMiasto = /^[a-zA-Z]{3,20}$/;
  if (!regLast.test(document.getElementById("imie").value)) {
    ok = false;
    document.getElementById("imie").classList.add("is-invalid");
  }
  else
  {
    document.getElementById("imie").classList.remove("is-invalid");
    document.getElementById("imie").classList.add("is-valid");
  }
  if (!regLast.test(document.getElementById("nazwisko").value)) {
    ok = false;
    document.getElementById("nazwisko").classList.add("is-invalid");
  }
  else
  {
    document.getElementById("nazwisko").classList.remove("is-invalid");
    document.getElementById("nazwisko").classList.add("is-valid");
  }
  if (!regZip.test(document.getElementById("zip").value)) {
    ok = false;
    document.getElementById("zip").classList.add("is-invalid");
  }
  else
  {
    document.getElementById("zip").classList.remove("is-invalid");
    document.getElementById("zip").classList.add("is-valid");
  }
  if (!regMiasto.test(document.getElementById("adres").value)) {
    ok = false;
    document.getElementById("adres").classList.add("is-invalid");
  }
  else
  {
    document.getElementById("adres").classList.remove("is-invalid");
    document.getElementById("adres").classList.add("is-valid");
  }

  if (!regMiasto.test(document.getElementById("miasto").value)) {
    ok = false;
    document.getElementById("miasto").classList.add("is-invalid");
  }
  else
  {
    document.getElementById("miasto").classList.remove("is-invalid");
    document.getElementById("miasto").classList.add("is-valid");
  }
  if (!isValidRadio())
  {
    ok = false;
  }

  return ok;
}

function isValidRadio() {
var radios = document.querySelectorAll('input[type="radio"]');
var isChecked = false;
    for (var i = 0; i < radios.length; i++) {
        if ( radios[i].checked ) {
            isChecked = true;
        };
    };
    if ( isChecked ) {
        return true;
        } else {
            return false;
        }
}

function save() {
        localStorage.setItem('imie', document.getElementById('imie').value);
        localStorage.setItem('nazwisko', document.getElementById('nazwisko').value);
        localStorage.setItem('miasto', document.getElementById('miasto').value);
        localStorage.setItem('adres', document.getElementById('adres').value);
        localStorage.setItem('zip', document.getElementById('zip').value);
        sessionStorage.setItem('imie', document.getElementById('imie').value);
        sessionStorage.setItem('nazwisko', document.getElementById('nazwisko').value);
        sessionStorage.setItem('miasto', document.getElementById('miasto').value);
        sessionStorage.setItem('adres', document.getElementById('adres').value);
        sessionStorage.setItem('zip', document.getElementById('zip').value);

        var saved = '';
        saved += "Imię: " + document.getElementById('imie').value +
        "\nNazwisko: " + document.getElementById('nazwisko').value +
        "\nMiasto: " + document.getElementById('miasto').value +
        "\nUlica: " + document.getElementById('adres').value +
        "\nZip: " +  document.getElementById('zip').value;
        var radios = document.querySelectorAll('input[type="radio"]');
        saved += "\nPOSIŁKI: ";
        for (i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                saved += "\n - " + radios[i].value;
            }
            localStorage.setItem(radios[i].id, radios[i].checked);
            sessionStorage.setItem(radios[i].id, radios[i].checked);
        }
        if(check())
        {
          alert(saved);
        }
        else
        {
          alert("Upewnij się, że poprawnie wypełniłeś wszystkie wymagane pola i wybrałeś potrawę.");
        }
    }

