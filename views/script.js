function verif() {
    var errors = "<ul>";
    var compagnie = document.querySelector('#compagnie').value;
   // var Email = document.querySelector('#Email').value;
    var date_depart = document.querySelector('#date_depart').value;
    var date_arrivee = document.querySelector('#date_arrivee').value;
   //var heure_depart = document.querySelector('#heure_depart').value;
    //var heure_arrivee = document.querySelector('#heure_arrivee').value;
    var ville_depart = document.querySelector('#ville_depart').value;
    var ville_arrivee = document.querySelector('#ville_arrivee').value;
    var classe = document.querySelector('#classe').value;
    //var prix = document.querySelector('#prix').value;
    
    if (compagnie === ""){
        errors += "<li>Le nom de la compagnie est obligatoire</li>";
    }
    else if (compagnie.charAt(0) < 'A' || compagnie.charAt(0) > 'Z') {       
        errors += "<li>Le nom de la compagnie doit commencer par une lettre Majuscule </li>";
    } 

    if ((date_depart === "") || (date_arrivee === "")){
        errors += "<li>La date est obligatoire</li>";
    }   
    else 
    {   var date_depart=new Date(date_depart);
        var date_arrivee=new Date(date_arrivee);  
        var today = new Date();
    if (date_arrivee < date_depart) {
        errors += "<li> La date d'arrivée doit se situer aprés la date de départ!</li>";
        } 
     if ((date_arrivee<today) || (date_depart<today)){
        errors += "<li> cette date est deja passée!</li>";
     }
    }

    if (ville_depart === ""){
        errors += "<li> La ville de départ est obligatoire</li>";
    }
    

    if (classe === '') {
        errors += "<li>Veuillez indiquer votre classe </li>";
    }


    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        return true;
    }
   

}
