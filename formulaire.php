<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Adresse e-mail à laquelle vous souhaitez envoyer le message
    $destinataire = "judek9392@gmail.com";
    
    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de votre site";
    
    // Construit le corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n";
    $corps_message .= "Message:\n$message";
    
    // En-têtes de l'e-mail
    $entetes = "From: $nom <$email>\r\n";
    $entetes .= "Reply-To: $email\r\n";
    
    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $entetes)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>
