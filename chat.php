<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff | CHAT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chat">
        <div class="button-email">
            <span>jeff@gmail.com</span>
            <a href="" class="Deconnexion_btn">Déconnexion</a>
        </div>
        <!-- messages -->
        <div class="messages_box">
            <div class="message your_message">
                <span>Vous</span>
                <p>ça va ?</p>
                <p class="date">07/11/2023 18:25</p>
            </div>
            <div class="message others_message">
                <span>elon@gmail.com</span>
                <p>Super bien merci !</p>
                <p class="date">07/11/2023 18:30</p>
            </div>
          
        </div>

        <!-- Fin message -->
        <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" rows="2" placeholder="Votre message"></textarea>
            <input type="submit" value="Envoyé" name="Send"> 
        </form>
    </div>
</body>
</html>