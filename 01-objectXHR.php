<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création basique d'un objet XMLHttpRequest ou XHR</title>
    </head>
    <body>
        <script>
        // fonctionnera avec tous les navigateurs actuels (saufs certains navigateurs mobiles, d'où l'utilisation d'un code plus complexe multiplatforme/navigateur)
        var XHR = new XMLHttpRequest();
        console.log(XHR);

        // si ancien navigateur utilisant activex (création de microsoft, obsolette depuis)
        var oldXHR = new ActiveXObject("Microsoft.XMLHTTP");
        console.log(oldXHR);
        // ou autre version microsoft
        var olderXHR = new ActiveXObject("Msxml2.XMLHTTP");
        console.log(olderXHR);

        </script>
        On vient de créer un objet javascript XHR, qui permet de communiquer de manière asynchrone
        (sans blocage de page en cas d'attente) avec un serveur web et le navigateur de l'utilisateur en
        utilisant l'http
    </body>
</html>
" il etat une fois un marchand... "
" hello world " 
