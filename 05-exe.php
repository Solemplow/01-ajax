<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice XHR asynchrone</title>
    
        <script src="05-monjs.min.js"></script>
    </head>
    <body>
        <h1>Premier exercice objet XHR asynchrone</h1><h4>
        <ul>
            <li>Créez un fichier 05-monjs.js V</li>
            <li>Mettez-y tout le script du header V</li>
            <li>Liez ce fichier, de préférence avec celui minifié (05-monjs.min.js) V</li>
            <li>Chargez y le contenu de 05-reponse.php, qui va nous donner une boucle allant de 5000 à (un chiffre au hasard entre 1000 et 3000)</li>
            <li>! Il y a 4 arguments à requeteAjax</li>
        </ul>
    </h4>
        <div id="iciclic" onclick="requeteAjax('05-reponse.php','iciclic','etat','lecontenu')">Cliquez ici<br/></div><hr/>
        <div id="etat">vide</div><hr/>
        <div id="lecontenu" style="overflow-y: auto; height: 300px;">ici le contenu de 05-reponse.php</div>
    </body>
</html>
