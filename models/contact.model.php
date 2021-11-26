<?php 
    $errors = []; 
  
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        // wurde Formular 'address-form' verschickt? 
        if (isset($_POST['btn-submit-contact-form'])) {
            // Formulardaten einlesen, falls vorhanden,  ansonsten '' als Standardwert
            $yourName = htmlspecialchars(trim($_POST['your-name'])) ?? '';
            $yourEmailAddress = htmlspecialchars(trim($_POST['your-email-address'])) ?? '';
            $yourMessage = htmlspecialchars(trim($_POST['your-message'])) ?? '';
          
            // Eingaben validieren
            if ($yourName === '') {
                array_push($errors, 'Bitte geben Sie Ihren Namen ein');
            }
            if ($yourEmailAddress === '') {
                array_push($errors, 'Bitte geben Sie Ihre E-Mail Adresse ein');
            }
            if ($yourMessage === '') {
                array_push($errors, 'Bitte geben Sie eine Nachricht ein');
            }
              
            if (count($errors) === 0 ) {
                sendMail($yourName, $yourEmailAddress, $yourMessage);
                $yourName = $yourEmailAddress = $yourMessage = '';
            }
        }
    }
    
    function sendMail($fromName, $fromEmail, $message) {
        // todo: send message to website owner 
        echo 'Message sent.';
    }
?>