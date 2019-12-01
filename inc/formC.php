<?php
 
/* Initialisation des variables */
$from = "remib.74@free.fr"; // l'expéditeur : remplacez ici domaine.ext par votre domaine
$to = "remib.74@free.fr"; // le destinataire : mettez ici votre adresse mail valide
 
/* Préparation */
$subject = "Contact_achat_M3c"; // le sujet du mail
$email = NULL;
$message = NULL;
 
/* Récupération du champ email */
if (!empty($_POST['email'])) {
  $email = htmlspecialchars($_POST['email']) ;
}
/* Récupération du champ message */
if ($email && !empty($_POST['message'])) {
  $message = "Message envoyé par $email :\n" . htmlspecialchars($_POST['message']);
}
 
/* Envoi*/
if ($email && $message)
{
 
  // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
  //$headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
  // En-têtes additionnels
  $headers .= 'From: Webmaster <'.$from.'>' . "\r\n";
 
 /*  Appel à la fonction mail */
  if (!mail($to, $subject, $message, $headers)){
     echo "Erreur: Impossible d'envoyer le mail";
     echo $to.$subject.$message.$headers;
  } else {
     mail($to, $subject, $message, $headers);
     echo "Envoi réussi";
  }
} 
else {
  echo "Erreur: vous devez spécifier une adresse email valide et un texte\n";
}
 

