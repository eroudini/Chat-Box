// Confirmation de mot de passe 

// Verifions si le mot de passe et la confirmation sont conformes

let mdp1 = document.querySelector('.mdp1');
let mdp2 = document.querySelector('.mdp2');

mdp2.onkeyup = function(){
    // evenement lorsque on ecrit dans le champs : confirmation du mot de passe
    message_error = document.querySelector('.message_error');
    if(mdp1.value != mdp2.value){
        // si mdp1 et mdp2 ne sont pas égaux alors on affiche un message
        message_error.innerText = "Les mots de passe ne sont identique 😕";
    } else {
        // sinon // on ecrit rien dans le message d'erreur
        message_error.innerText=""
    }
}