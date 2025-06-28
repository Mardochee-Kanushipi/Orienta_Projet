<?php
// traitement.php : Envoi du formulaire avec PHPMailer (SMTP Gmail)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/envoi_email/PHPMailer/src/Exception.php';
require __DIR__ . '/envoi_email/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/envoi_email/PHPMailer/src/SMTP.php';

// Adresse email de réception (administrateur)
$admin_email = 'mardocheekanushipi@gmail.com';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Vérification côté serveur
    if (empty($name) || empty($email) || empty($message)) {
        echo '<script>alert("Veuillez remplir tous les champs du formulaire."); window.history.back();</script>';
        exit();
    }

    $mail = new PHPMailer(true);
    try {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        // Paramètres SMTP Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mardocheekanushipi@gmail.com';
        $mail->Password = 'plaumkkhxkwgjgir'; // mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('mardocheekanushipi@gmail.com', 'OrientaUPC');
        $mail->addAddress($admin_email);
        $mail->addReplyTo($email, $name);

        // Désactiver la vérification SSL (pour localhost uniquement)
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact depuis OrientaUPC';
        $mail->Body = '<h3>Nouveau message reçu :</h3>' .
            '<p><strong>Nom complet :</strong> ' . $name . '</p>' .
            '<p><strong>Email :</strong> ' . $email . '</p>' .
            '<p><strong>Message :</strong><br>' . nl2br($message) . '</p>';

        $mail->send();
        echo '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><script>alert("Merci, votre message a bien été reçu !"); window.location.href = "Contact.Php";</script></head><body></body></html>';
        exit();
        
    } catch (Exception $e) {
        echo '<pre>Erreur PHPMailer : ' . $mail->ErrorInfo . '</pre>';
        echo '<script>alert("Erreur lors de l\'envoi du message : ' . addslashes($mail->ErrorInfo) . '"); window.history.back();</script>';
        exit();
    }
} else {
    header('Location: Contact.Php');
    exit();
}

