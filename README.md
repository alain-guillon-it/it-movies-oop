# POO

- 📂 app
  - 📂 controllers
    - 📝 FilmController.php
      - _Contient une méthode **"list"** --> /film/list_
  - 📂 models
    - _Film qui aura une méthode "listFilms" --> requête SQL de récupération de données_
- 📂 views
  - 📂 Film
    - 📝 list.php

##   Cheminement

1. L'utilisateur va taper dans l'URL: **localhost/?page=film&action=list**
2. Le fichier **index.php** va chercher le controller **FilmController** et il va exécuter la méthode **list** qui correspondra à l'action demandé.
3. La méthode **list** va récupérer les données en base (on s'en occupe pas de la BDD) et **renvoie la liste des films au controller**.
4. Le controller après avoir récupérer les données depuis le model, il va chercher le fichier **list.php** situé dans **views/film/list.php**.
5. Les données seront donc affichées dans le fichier "film/list.php"
