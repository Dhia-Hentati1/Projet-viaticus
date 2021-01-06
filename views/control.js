function validateForm() {
    var x = document.forms["form"]["categorie"].value;
    if (x == "" || x.length < 3) {
      alert("entrer votre categorie (3 charactere au min)");
      return false;
    }
    var x = document.forms["form"]["prix"].value;
    if (x == "") {
      alert("entrez un prix");
      return false;
    }
    var x = document.forms["form"]["nom_loisir"].value;
    if (x == "") {
      alert("entrez le nom de loisir");
      return false;
    }

  }