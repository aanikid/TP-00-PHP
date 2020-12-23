# TP-00-PHP
*Créer un tout petit site dédié à l'affichage d'articles.*

##Objectif: Optimisation de l'architecture, CRUD BDD, upload d'image


#Les Pages:

##Front Office
---

###home
   - carousel d'article en selection
   - image 
   - titre
   - liste des 5 derniers articles publiés

###articles (localhost/articles.php)
   - liste de tous les articles ... 10 par pages
   - image 
   - titre
   - aperçu
   - date de publication

###article (localhost/article.php?id=xxx)
   - affiche un article
   - titre
   - image
   - auteur 
   - date de creation 
   - date de publication 
   - contenu
   - article suivant
   - article precedent

###register (localhost/register.php)
   - Inscription de l'utilisateur (Nom, Prenom, 16 ans minimum, confirmation de l'adresse email et du mot de passe)

###login (localhost/login.php)
   - Identification de l'utilisateur


###Back Office  (accès sécurisé)
---

###dashboard  (localhost/admin.php)
   - nombre d'articles total
   - nombre d'articles publiés
   - nombre d'utilisateurs

###create article (localhost/admin/article-create.php)
   - ajoute un article en BDD

###edit article (localhost/admin/article-edit.php?id=xxx)
   - modifier un article 
   - supprimer un article

##BDD
---
###article
- id
- title
- excerpt (aperçu de l'article)
- content
- illustration
- isFeatured (en selection dans le carousel.. ou non)
- createdBy (l'auteur)
- createdAt (date de creation)
- publishedAt (date de publication)

##Contributor
---
 - Fatima MEDKOR
 - Loubna MEKDADI
 - Adrien BOUDET
 - Lotfi AANIKID
