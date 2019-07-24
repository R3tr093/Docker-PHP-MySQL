<h2> Étape 1 : Créez un répertoire </h2>
<hr>

<p> La première étape consiste à créer un répertoire pour contenir notre environnement, ouvrez votre terminal et lancez la commande suivante : <br><br>

<em> sudo mkdir web_dev </em>

<img src="1.png">


<p> Bref, vous avez un dossier super ! </p>

<img src="2.png">

<h2> Étape 2 : Créez un fichier docker-compose </h2>

<p> Pour la seconde étape rendez vous dans votre dossier web_dev, ensuite créez un fichier nommé <em>"docker-compose.yml"</em>

<p> Pour ce faire vous pouvez tapez la commande suivante dans votre terminal : <br><br>

<em>touch docker-compose.yml</em>

<img src="3.png">
<br>
<img src="4.png">

<p> Vous pouvez ensuite ouvrir ce fichier depuis votre éditeur de texte ou avec vim avec la commande suivante : <br><br>

<em> vim docker-compose.yml </em>

 <br><br>

<img src="5.png">

<p> Que vous ayez choisis vim ou votre éditeur de texte le but c'est de mettre du texte, recopier dans ce fichier le code ci-dessous : </p>

<img src="6.png">   


<p> Les fichiers contenant du code seront conservés dans le dossier <em>" examples "</em> du repository. </p>

<p> Une fois que vous avez écrit le code dans votre fichier retourner avec votre terminal dans votre dossier web_dev, il ne vous reste plus qu'une commande pour terminer cette étape : <br><br>

<em> sudo docker-compose up </em>

<p> Cette commande devrait se terminer ainsi : </p>

<img src="7.png">

<p> Les fichiers contenant du code seront conservés dans le dossier " example " du repository. </p>

<p> Si tout s'est passé comme prévu, vous pouvez déjà lancez votre navigateur web à l'adresse suivante : <br><br>

<a href="http://localhost:8000/">http://localhost:8000/ </a>

<p> Vous devriez voir une page similaire à celle-ci. </p>

<img src="8.png">

<p> Pas de panique tout va bien, passons à la 3iéme étape. </p>

<h2>Étape 3 : Autorisez l’accès au serveur.</h2>

<p> Dans votre terminal votre conteneur qui porte le joli nom de php73 est entrain de tourner, pour continuer il va falloir l'arrêtez. </p>

<p> Faîtes ctrl + c dans votre terminal et le conteneur devrait s'arrêtez, afin qu'on puisse modifier quelques fichiers </p>

<p> Avec terminal rendez vous dans votre dossier web_dev afin de constater qu'un dossier php est apparu ! </p>

<img src="9.png">

<p> Positionner vous dans ce dossier afin de procéder au instructions suivantes, nous allons créer un fichier index.php </p>

<em> sudo touch index.php <em>

<br><br>

<img src="10.png">