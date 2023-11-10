function handleSignupForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var pwd = document.getElementById('pwd').value;
    var pwdRepeat = document.getElementById('pwdrepeat').value;
    var errorMessage = document.getElementById('error-message');

    errorMessage.innerHTML = ''; // Efface tout message d'erreur précédent

    if (name === '' || email === '' || pwd === '' || pwdRepeat === '') {
        errorMessage.innerHTML = 'Veuillez remplir tous les champs.';

        // Construction du fragment d'URL avec les paramètres d'erreur
        var urlParams = new URLSearchParams();
        urlParams.append('error', 'input_empty');

        // Mise à jour de l'URL avec les paramètres
        history.replaceState(null, '', '?' + urlParams.toString());

        return false; // Empêche l'envoi du formulaire
    }

    return true; // Autorise l'envoi du formulaire
}
