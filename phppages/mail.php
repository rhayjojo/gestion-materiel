<?php
// Paramètres de l'e-mail
$to = "djohoahicha@gmail.com";
$subject = "Nouvelle commande";
$message = "Ordinateur";
$headers = 'From: rhayjojo@gmail.com' . "\r\n" .
    'Reply-To: rhayjojo@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Options de configuration pour la fonction mail
ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");
ini_set("sendmail_from","rhayjojo@gmail.com");
ini_set("auth_username","rhayjojo@gmail.com");
ini_set("auth_password","jojo200455");
ini_set("ssl","tls");
ini_set("smtp_crypto","tls"); 

// Utilisez la fonction mail() pour envoyer l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo "L'e-mail a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
}
?>