/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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
        function requeteAjax(url,DivClick,Reponse,Contenu){
            // création de l'objet XHR en utilisant la fonction
            var maXHR = XHR();
            // si ça n'a pâs fonctionné
            if(maXHR===null){
                alert("Ajax indisponible sur ce navigateur")
            }else{
                // ouverture du fichier externe (url) avec la méthode http GET en mode asynchrone: true
                maXHR.open('GET',url,true);
                document.getElementById(DivClick).innerHTML="Valeurs de statuts: ";
                
                // pour l'asynchrone, on va placer un écouteur (qui attend la réponse renvoyée par notre serveur) avant le XHR.send(), nous utilisons ici une fonction anonyme, elle est éxécutée directement au moment de son initialisation, comme elle ne porte pas de nom, on ne peut l'appeler de manière externe
                maXHR.onreadystatechange=function(){
                    document.getElementById(DivClick).innerHTML+=maXHR.readyState;
                    // on est occupé à charger
                    if(maXHR.readyState!==4){
                        document.getElementById(Reponse).innerHTML='En chargement';
                    }
                    else{ // c'est chargé
                        document.getElementById(Reponse).innerHTML='Chargé!';
                        // on récupère la réponse
                        document.getElementById(Contenu).innerHTML=maXHR.responseText;
                        
                    }
                }
                
                // on envoie une requête vide sur le fichier
                maXHR.send(null);

            }
        }