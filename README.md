Quête Cookie et Session 
/ Wild Code School

The Cookie Factory" lance son site e-commerce

Cookies time

A partir des ressources ci-dessus et du template que tu peux récupérer sur github tu vas pouvoir commencer le développement du site e-commerce : "The Cookie Factory"

Il s'agit d'une petite application qui permet de s'identifier avec seulement un nom d'utilisateur, sans appel à aucune base de données.

On entre un nom d'utilisateur dans le formulaire de login, celui ci est pris en compte et enregistré en session. On ne demande pas de mot de passe pour vérifier l'identité.
Si l'utilisateur n'est pas identifié, il n'a pas accès aux autres page du site internet.

Tant qu'il n y a pas de variable de session contenant le nom de l'utilisateur, celui-ci est redirigé vers la page de login. Je te laisse chercher sur ton moteur de recherche favoris comment rediriger en PHP.
Une fois identifié, l'utilisateur est redirigé sur la page index.php où l'on trouve la liste des cookies disponibles. Et bien évidemment, il n'est plus possible d’accéder à la page de login.

Sur cette page, toute une liste de biscuits s'offre a toi. Lorsqu'un client clique sur le bouton d'ajout au panier, il faut enregistrer cet article dans tes variables de COOKIES.

Libre a toi de modifier le comportement du bouton pour que l'ajout soit pris en compte.
Avant d’enregistrer dans $_COOKIES le panier du client, tu auras peut être besoin de faire transiter l'information via $_GET ou $_POST.
Comme tu peux le voir, dans la barre de menu, on souhaite la bienvenue à "Wilder", sert toi du nom de l'utilisateur pour personnaliser le message d'accueil.

Critéres de validation

On peut s'identifier de manière simple avec seulement un nom d'utilisateur,
Le nom d'utilisateur donné lors de l'identification est repris sur toutes les pages depuis les sessions,
Mon panier est stockée dans mes cookies et est affiché sur la page "Panier".
On ne peux accéder qu'a la page login.php et index.php tant qu'on est pas connecté. login.php devient inaccessible une fois connecté, l'utilisateur est redirigé vers la page index.php s'il tente d'y accéder.
L'utilisateur peux également se délogger à l'aide d'un bouton "déconnexion".
