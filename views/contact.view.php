
<?php 
    include 'models/contact.model.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Grundlagen (MV-Architektur)</title>
</head>
<body>
    <h1>Kontakt</h1> 
    
    <?php if ($errors): 
    ?>
        <div id="message-area" class="notice error">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; 
                ?>
            </ul>
        </div>
    <?php endif; 
    ?>

    <form name="contact-form" id="contact-form" action="index.php?page=contact" method="post">
        <fieldset>
            <legend>Mitteilung</legend>
            <p>
                <label for="your-name">Deine Name</label>
                <input type="text" name="your-name" id="your-name" value="<?= $yourName ?? '' ?>"/>
            </p>
            <p>
                <label for="your-email-address">Deine E-Mail Adresse</label>
                <input type="text" name="your-email-address" id="your-email-address" value="<?= $yourEmailAddress ?? '' ?>"/>
            </p>
            <p>
                <label for="your-message">Deine Nachricht</label>
                <textarea name="your-message" id="your-message"><?= $yourMessage ?? '' ?></textarea>
            </p>
        </fieldset>
        <p>
            <button class="blue" type="submit" id="btn-submit-contact-form" name="btn-submit-contact-form">
                Nachricht senden
            </button>
        </p>
    </form>
  </body>
</html>