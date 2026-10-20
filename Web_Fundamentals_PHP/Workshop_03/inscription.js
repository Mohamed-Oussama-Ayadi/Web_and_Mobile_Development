function passValidation() {
    mdp1 = document.getElementById("password").value;
    mdp2 = document.getElementById("confirmpassword").value;
    if (mdp1 !== mdp2) {
        alert("Les mots de passes ne correspendent pas!");
    }
    else {
        alert("mots de passes identiques!");
    }
}
function verifier(evt)
{  nom=document.getElementById("name").value;
   prenom=document.getElementById("lastname").value;
    num=document.getElementById("phone").value;
    mdp1=document.getElementById("password").value;
   mdp2=document.getElementById("confirmpassword").value;
   error1=document.getElementById("erreur1");
   error2=document.getElementById("erreur2");
   error3=document.getElementById("erreur3");
   error4=document.getElementById("erreur4");
   error5=document.getElementById("erreur5");
   
   if (nom.match(/[0-9]/g)) {
    error1.innerHTML = "le nom ne doit contenir que des lettres."
    error1.style.color = "red"
    return false
}
else {
    error1.innerHTML = ""
}

if (nom.length < 3) {
    error1.innerHTML = "Le nom doit compter au moins 3 caractères."
    error1.style.color = "red"
    return false
}
else {
    error1.innerHTML = ""
}
   if (prenom.length < 4) {
    error2.innerHTML = "Le prénom doit compter au moins 4 caractères."
    error2.style.color = "red"
    return false
}
else {
    error2.innerHTML = ""
}
if (!phone.match(/[0-9]/)) {
    erro3.innerHTML = "le numéro de téléphone ne doit contenir que des chiffres."
    error3.style.color = "red"
    return false
}
else {
    error3.innerHTML = ""
}
if (!(mdp1.length >= 10 && mdp1.match(/[A-Z]/g) &&mdp1.match(/[a-z]/g) && mdp1.match(/[0-9]/g)   )) {
    error4.innerHTML = "Mot de passe faible."
    error4.style.color = "red"
    return false
}
else {
    e4.innerHTML = ""
}
if (mdp1 !== mdp2) {
    error5.innerHTML="Les mots de passes ne correspendent pas "
    error5.style.color="red"
    return false
}
alert("Tous les informations sont valides")
    return true
}
function nameValidation()
{nom=document.getElementById("name").value;
 error1=document.getElementById("error1");
 if (nom.match(/[0-9]/g) && nom.length < 3) {
    error1.innerHTML = "erreur"
    error1.style.color = "red"
    return false
}
else
{
    error1.innerHTML="correct"
    error1.style.color="green"

}
}
