<?php

        $to = "contact@portfoliu.fr";
        $subject = "Formulaire Contact";
        $message = "Message du portfolio.\n> Nom de l'expediteur : ".htmlspecialchars($_POST['name'])."\n";

		    $message .="> Requète :\n\n   ".htmlspecialchars($_POST['message'])."\n\n";
        if (mail($to, $mail, $message)) {
        //Puis on renvoie sur monsiteweb.org, if permet de tester si mail() à bien fonctioné (ceci ne garanti pas que le mail sera recu, mais c'est un début)
          header('Location: http://www.portfoliu.fr/');
        //Puis on termine le script
        exit();
        }
        else {
        // Si il y a erreur on renvoie sur le site
        echo '<div class="my_class">ARF</div>';
        exit();
        }
?>
