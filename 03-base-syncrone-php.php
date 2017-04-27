<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Base synchrone</title>
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
                // ouverture du fichier externe (url) avec la méthode http GET en mode synchrone (false, asyncrone => true)
                maXHR.open('GET',url,false);
                // on envoie une requête vide sur le fichier
                maXHR.send(null);

                // si la requête est achevée
                if(maXHR.readyState===4){
                    // si le statut http est 200 (Requête traitée avec succès.)
                    if(maXHR.status===200){
                        // on va afficher le texte dans la div dont l'id est passée en paramètre
                        document.getElementById(IdDuDiv).innerHTML=maXHR.responseText;
                    }
                }
            }
        }
        </script>
    </head>
    <body onload="requeteAjax('bidon.txt','un')">
      <div id="un">ceci doit être rempli par le texte se trouvant dans bidon.txt AU CHARGEMENT de la page</div>
      <hr/>
      <div id="deux" oNmousEover="requeteAjax('aurevoir.txt','deux')">ceci doit être rempli par le texte se trouvant dans aurevoir.txt lorsqu'on survol ce div</div>
      <hr/>
      <div id="temps" oncLiCk="requeteAjax('03-reponse.php','temps')">va nous nous donner un entier au hasard entre 100 et 999, suivi du datetime du serveur venant de 03-reponse.php, ce div se mettra à jour à chaque clic sur celui-ci</div>
      <hr/>
      <div id='cestpossible' onMouseOver="requeteAjax('http://localhost','cestpossible')">Passe moi dessus</div>
    </body>
</html>
