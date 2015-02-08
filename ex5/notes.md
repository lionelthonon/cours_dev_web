pendu ---

stricture fichier mots :

1 BONJOUR
2 SALUT
3 POMME

config : Constantes

file() pour lire le fichier de mots -> voir manual
rand() pour choisir un nombre aléatoire
substr_replace() remplacer

input type hidden
 -> indice du mot
 -> lettres essayées
 -> Nombre d'essais
 -> Mot trouvé ou non value 0 ou 1
 -> Chaine de remplacement
 
Serialized
 -> serialize pour modifier le statut des lettres déjà utilisées
 -> utiliser urlencode()/urldecode() pour modifier les "" du serialize()/unserialize()
 
 Organiser le code 
  -> 
  
vérifier la méthode de requete
 -> GET : l'utilisateur arrive, on initialise l'app
 -> POST : l'utilisateur joue, on fait les vérif et on met ce qu'il faut à jour
 
 Bibliothèque ---
 Public :
  -> Lister les livres de la bibliothèque
    - contenu d'un livre
        - editeur
        - auteur
        - emplacement (trouver une bibliothèque)
        - genre
        - langue
        - nombre de pages
        - année de publication
        - couverture
admnistration
 -> crud Create Retreive Update Delete -> Opération possible sur les livres
 -> Deuxième site pour l'administration sur la même base de donnée
        