<!DOCTYPE html>
<html>
<script src="js/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<head>
    <title>Menu</title>
</head>

<body>


 <div class="container">
 <nav class="navbar navbar-light">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Menu</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<a class="navbar-brand" href="index.php">Acceuil</a>
	</div>

	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
            <?php if($page=='livredor'){?>
                            <li class="active"><?}
                    elseif($page!='livredor'){?>
                            <li><?}?>
                <a href="#">M2L</a></li>
		</ul>
        <ul class="nav navbar-nav">
                <?php if($page=='livredor'){?>
                                <li class="active"><?}
                        elseif($page!='livredor'){?>
                                <li><?}?>
                    <a href="#">Les Ligues</a></li>
        </ul>
        <ul class="nav navbar-nav">
                <?php if($page=='livredor'){?>
                                <li class="active"><?}
                        elseif($page!='livredor'){?>
                                <li><?}?>
                    <a href="#">Contact</a></li>
        </ul>
                <ul class="nav navbar-nav">
                <?php if($page=='membres'){?>
                                <li class="active"><?}
                        elseif($page!='membres'){?>
                                <li><?}?>

                    <a href="#">Membres</a></li>
    		</ul>
            <ul class="nav navbar-nav navbar-right">
                      <?php if($page=='login'){?>
                                <li class="active"><?}
                        if($page!='login'){?>
                                <li><?}?><a href="login.php">S'inscrire</a></li>
                      <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Se connecter <b class="caret"></b></a>
                         <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            <li>
                               <div class="row">
                                  <div class="col-md-12">
                                     <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputEmail2">Email</label>
                                           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        <div class="checkbox">
                                           <label>
                                           <input type="checkbox"> Se souvenir de moi
                                           </label>
                                        </div>
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-success btn-block">Se connecter</button>
                                        </div>
                                     </form>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </li>
                   </ul>
    	</div><!-- /.nav-collapse -->


  </nav>
</div>


</body>
</html>
