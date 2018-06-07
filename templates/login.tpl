<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>{$var.web_name}</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">{$var.web_name}</h4>
							<form method="POST" action="index.php?login=1">
							 
								<div class="form-group">
									<label for="pseudo">Utilisateur</label>

									<input id="pseudo" type="text" class="form-control" name="pseudo" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Mot de passe</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group no-margin">
                                                                    <button type="submit" class="btn btn-primary btn-block">
                                                                        Se connecter
                                                                    </button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
                                            Suricat <br>
                                            Lycée Pierre Mechain Laon 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>