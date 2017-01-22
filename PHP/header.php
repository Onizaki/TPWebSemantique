<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
	//session_start();
	if(isset($_SESSION['email']))
	{
		?>
		
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="main.php">PICTIONARY</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="navbar-form navbar-right">
						<div class="form-group">
							<form class="navbar-form navbar-right" action="req_login.php" method="post">
								<?php
									echo 'Bonjour ' . $_SESSION['prenom'] . ' !';
								?>
								<a href="logout.php" class="btn btn-info">Déconnexion</a>
							</form>
						</div>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<?php
		//if(isset($_SESSION['profilepic']))
		//{
		//	echo '<img src=' . $_SESSION['profilepic'] . '/>';
		//}
	}  
	else {
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main.php">PICTIONARY</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-form navbar-right">
        <div class="form-group">
			<form class="navbar-form navbar-right" action="req_login.php" method="post">
				<input class="form-control" type="text" id="email" name="email" placeholder="Email" />
				<input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe"/>

				<button class="btn btn-primary" type="submit">Connexion</button>
				<a href="inscription.php" class="btn btn-info">Inscription</a>
			</form>

        </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<?php
}
?>