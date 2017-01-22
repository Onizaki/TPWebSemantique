<!DOCTYPE html>  
<html>  
<head>  
    <meta charset=utf-8 />  
    <title>Pictionnary - Acceuil</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<!-- Google +1 -->
	<!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
	<link rel="canonical" href="http://localhost:90/tpwebsemantique/PHP/main.php" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>


	<!-- Facebook Like -->
	<script>(	function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>


	<!-- Google Share -->
	<!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
	<script src="https://apis.google.com/js/platform.js" async defer>
  		{lang: 'fr'}
	</script>

</head>  
<body>  
<header>
	<?php
		session_start();
		include 'header.php';
	?>
</header>



<!-- Méta-données Google Schema.org -->
<div itemscope itemtype="http://schema.org/CreativeWork">
    <span itemprop="name">Pictionnary</span>
    <span itemprop="description">Ici, vous pourrez vous créer un compte et faire des dessins que vous pourrez enregistrer et revisionner. Amusez-vous avec Pictionnary !</span>
    by <span itemprop="author">RIBEIRO MACHADO Alexis</span>
</div>

<!-- Bouton Dessiner-->
<div>
	<a href="paint.php"><br/>Dessiner</a>
</div>

<!-- Tweeter Tweet -->
<div>
	<br/>
	<a href="http://localhost:90/tpwebsemantique/PHP/main.php" class="twitter-share-button">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<!-- Google +1 -->
<!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
<g:plusone></g:plusone>

<!-- Google Partage -->
<div class="g-plus" data-action="share"></div>

<!-- Facebook Like + Share -->
<div id="fb-root"></div>
<div class="fb-like" data-href="http://localhost:90/tpwebsemantique/PHP/main.php" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>

<div>
<?php
	if(isset($_SESSION['email']))
	{
	try 
	{
		$dbh = new PDO('mysql:host=localhost;dbname=pictionnary', 'test', 'test');
		$sql = $dbh->prepare("SELECT id FROM drawings WHERE u_id= :uid");
		$sql->bindValue(":uid", $_SESSION['sid']);
		$sql->execute();
		$i = 0;
		foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne) 
		{
			echo "<a href=guess.php?id=" . $ligne['id'] . ">Pictionnary " . ++$i . "</a><br/>";
		}
	} 
	catch (PDOException $e) 
	{
		print "Erreur !: " . $e->getMessage() . "<br/>";
		$dbh = null;
		die();
	}
	}
?>
</div>
</body>
<html>