<!doctype html>
<html>

<!-- BOOTSRAP -->
<script src="js/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<?php $page='login' ?>
<head>

    <meta charset="UTF-8">
    <title>connexion</title>

</head>
<body>

<!-- Menu -->
<?php include 'slide.php';?>
<!-- Menu fin -->

<!-- Formulaire nscription -->
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<form action="registration.php" method="POST">
            <h2>Sign Up</h2>
        <hr class="colorgraph">
        <div class="row">
    		    <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="nom" id="nom" placeholder="Nom" tabindex="1">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="prenom" class="form-control input-lg" placeholder="Prénom" tabindex="2">
                    </div>
    		    </div>
        </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
                </div>

    			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de passe" tabindex="5">
					</div>
				</div>
			</div>

			<hr class="colorgraph">
			<div class="row">
                    <form  method="post" action="formpost.php">
                    <input type="submit" value="S'inscrire" class="btn btn-primary btn-block btn-lg" tabindex="7">
                    </form>
			</div>
    </body>
</html>
