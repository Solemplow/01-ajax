<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Premier objet XHR asynchrone</title>
    <h1>Premier objet XHR asynchrone</h1><h2>
        Avec fonction anonyme (voir commentaires)
    </h2>
        <script>
        // création de l'objet XHR    
        function XHR(){
            var objXHR = new XMLHttpRequest();
            // si cet objet XHR n'a pas l'attribut défini (anciennes versions firefox)
            if(objXHR.overrideMimeType){
                // on le définit en text/html
                objXHR.overrideMimeType('text/xml');
            }
            // on retourne l'objet XHR
            return objXHR;
        }
        // fonction qui envoie et réceptionne les infos d'une page externe en utilisant l'objet XHR, IdDuDiv est l'id du div où l'on veut placer la réponse
        function requeteAjax(url,IdDuDiv){
            // création de l'objet XHR en utilisant la fonction
            var maXHR = XHR();
            // si ça n'a pâs fonctionné
            if(maXHR===null){
                alert("Ajax indisponible sur ce navigateur")
            }else{
                // ouverture du fichier externe (url) avec la méthode http GET en mode asynchrone: true
                maXHR.open('GET',url,true);
                document.getElementById(IdDuDiv).innerHTML="Valeurs de statuts: ";
                
                // pour l'asynchrone, on va placer un écouteur (qui attend la réponse renvoyée par notre serveur) avant le XHR.send(), nous utilisons ici une fonction anonyme, elle est éxécutée directement au moment de son initialisation, comme elle ne porte pas de nom, on ne peut l'appeler de manière externe
                maXHR.onreadystatechange=function(){
                    document.getElementById(IdDuDiv).innerHTML+=maXHR.readyState;
                    // on est occupé à charger
                    if(maXHR.readyState!==4){
                        document.getElementById('blabla').innerHTML='En chargement';
                    }
                    else{ // c'est chargé
                        document.getElementById('blabla').innerHTML='Chargé!';
                        // on récupère la réponse
                        document.getElementById('contenu').innerHTML=maXHR.responseText;
                        
                    }
                }
                
                // on envoie une requête vide sur le fichier
                maXHR.send(null);

//                // si la requête est achevée
//                if(maXHR.readyState===4){
//                    // si le statut http est 200 (Requête traitée avec succès.)
//                    if(maXHR.status===200){
//                        // on va afficher le texte dans la div dont l'id est passée en paramètre
//                        document.getElementById(IdDuDiv).innerHTML=maXHR.responseText;
//                    }
//                }
            }
        }
        </script>
    </head>
    <body>
        <div id="ploups" onclick="requeteAjax('03-reponse.php','ploups');document.getElementById('blabla').innerHTML='c\'est cliqué'">Cliquez ici<br/></div><hr/>
        <div id="blabla">vide</div><hr/>
        <div id="contenu" style="overflow-y: auto; height: 300px;">ici le contenu de 03-reponse.php</div>
    </body>
</html>
