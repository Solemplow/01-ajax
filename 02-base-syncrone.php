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
        // fonction qui envoie et réceptionne les infos d'une page externe en utilisant l'objet XHR
        function requeteAjax(url){
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
                        // on va afficher le texte dans un alert
                        alert(maXHR.responseText);
                    }
                }
            }
        }
        </script>
    </head>
    <body>
        
        <script>
        console.log(XHR());
        </script>
        <h3>Liste des codes HTTP</h3>
        <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP' target='_blank'>Voir sur wikipédia</a>
        <p onMouseOver="requeteAjax('bidon.txt')" onmouseout="requeteAjax('aurevoir.txt')">Si on passe la souris ici, ouverture de bidon.txt</p>
    </body>
</html>
