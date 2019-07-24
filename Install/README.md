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

<p> Rendez vous dans votre dossier web_dev afin de constater qu'un dossier php est apparu ! </p>

<img src="9.png">

<p> Positionner vous dans ce dossier afin de procéder au instructions suivantes, nous allons créer un fichier index.php </p>

<em> sudo touch index.php </em>

<br><br>

<img src="10.png">

<p>Obtenez les permissions sur le dossier PHP avec la commande suivante.</p>

<p> Dans cette commande <em> " retro " </em> est mon nom d'utilisateur système remplacez donc ceci par votre nom d'utilisateur, cette commande doit être lancez depuis votre dossier web_dev, si cela ne fonctionne pas entrez sudo avant toutes vos commandes.</p>

<em> sudo chown retro:retro php/ -R </em>

<p> Maintenant nous pouvons retourner dans notre dossier php afin de mettre du code dans notre fichier index.php </p>

<p> Ouvrez votre fichier afin d'y écrire le code suivant. </p>

<img src="11.png">

<p> Maintenant lancez votre conteneur avec la commande : </p>

<em> sudo docker start php73 </em> 

<p> Vous pouvez de nouveau ouvrir votre navigateur web sur l'adresse <a href="http://localhost:8000/">http://localhost:8000/ </a>, mais cette fois vous aurez votre " hello from docker " </p>

<img src="12.png">


<p> Si vous êtes arrivé jusqu'ici avec le résultat attendu, vous avez un serveur apache qui fait tourner du php version 7.3 </p>

<p>Courage, il ne reste plus que la base de donnée. </p>

<h2> Étape 4 : Créez une base de donnée </h2>

<p>Place vous dans le dossier php de votre dossier web_dev </p>

<em> cd web_dev/php </em>

<p> Lancez la commande vim Dockerfile et insérez le code suivant : <p>

<img src="13.png">

<p> Ensuite retourner dans votre dossier web_dev afin d'apporter quelques modifications au fichier docker-compose.yml </p>

<img src="15.png">
<br><br>


<p> Vous pouvez remplacer les champs : </p>
      <br><br>MYSQL_ROOT_PASSWORD: root
      <br>MYSQL_DATABASE: test_db
      <br>MYSQL_USER: retro
      <br>MYSQL_PASSWORD: root<br>

<p> Dans ce cas, indiquez les valeurs que vous souhaitez comme mot de passe, nom d'utilisateurs, etc... </p>

<p> Un petit coup de sudo docker-compose up </p>

<em> sudo docker-compose up </em>

<p> Maintenant nous dévons écrire un petit script php pour vérifier si on peut connecter notre base de donnée. </p>

<p> Rendez vous donc dans le dossier php, et modifiez le fichier index.php avec le code suivant. </p>

<img  src="16.png">

<p> Depuis votre dossier web-dev lancez à nouveau la commande sudo docker-compose -up vous devriez avoir ceci comme résultat.</p>


<img  src="17.png">

<p>Ouvrez votre navigateur à l’adresse  <a href="http://localhost:8000/">http://localhost:8000/ </a>, et vérifier la connexion.</p>

<img src="18.png">

<p> Je vais maintenant vous montrez comment accéder a votre terminal MySQL. </p>

<p> Ouvrez un terminal et exécutez le code ci-dessous. </p>

<em> sudo docker exec -it mysql8 /bin/bash </em>


<img src="19.png">


<p> Maintenant vous allez avoir besoin du nom d'utilisateur et du mot de passe que nous avons configuré pour la prochaine étape. </p>

<p> Lancez la commande ci-dessous. </p>

<em>mysql -uretro -proot</em>

<p> mysql suivi du flag -u directement suivi de votre nom d'utilisateur, et un flag -p directement suivi de votre mot de passe.</p>

<em> Dans mon cas : mysql -uretro -proot </em>

<br><br>
<img src="20.png">


<p> Vous pouvez vérifier votre base de donnée avec la commande suivante.</p>

<img src="21.png">

<p> Vous disposez d'un conteneur qui vous fait tourner apache, php 7.3 et MySQL, vous l'allumez, le supprimer, le copier, le téléchargez en un clin d'oeil car il pése 400mb et vous pouvez le partagez à tout vos collaborateurs.</p>
