<?php include_once 'inc/head-form.php';?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    
    <!-- For Bootstrap responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Contact</title>


    
    <link href="stylesheets/all.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="javascripts/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
    <script src="js/bootstrap-contact.js" type="text/javascript"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="contact">

    <nav class="navbar navbar-default navbar-fixed-top navbar-transparent">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
      <a class="navbar-brand list-inline no-padding hidden-xs" href="index.html">            
        <ul class="brand-padding no-margin">
            <li class="logo">MY TRIP IN TOURS</li>
            <li><i class="fa fa-fort-awesome castle"></i></li>
          </ul>
      </a>
      <a class="navbar-brand list-inline no-padding hidden-sm hidden-md hidden-lg" href="index.html">
        <ul class="brand-padding2 no-margin">
            <li class="logo2">MY TRIP IN TOURS</li>
            <li><i class="fa fa-fort-awesome castle2"></i></li>
          </ul>
      </a>        
    </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">            
            <li><a href="index.html">Home</a></li>
            <li><a href="availability.html">Availabiliy</a></li>
            <!--li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Availabiliy <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Romantic 1 beeroom flat</a></li>
                <li><a href="#">Modern 2 bedrooms flat</a></li>               
                <li role="separator" class="divider"></li>
                <li><a href="#">Testimonials</a></li>
              </ul>
            </li-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="getthere.html">How to get there?</a></li>
                <li><a href="whattodo.html">What to do in Tours?</a></li>              
              </ul>
            </li>
            <!--li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EN <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./">FR</a></li>            
              </ul>
            </li-->
            <li><a href="contact.html">contact</a></li>
            <li><a href="accueil.html">FR</a></li>  
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    

    <div class="spacer2"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 descrip">
          <h1>Bonjour je suis Francois!!!</h1>
        </div>
        <div class="col-sm-12 col-md-6 descrip">
          <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
            <fieldset>
              <legend>Me contacter par mail</legend>

              <?php if(isset($hasError)) { //If errors are found ?>
                <p class="alert alert-danger">Vérifiez si vous avez rempli tous les champs avec des informations valides et réessayez. Je vous remercie.</p>
              <?php } ?>

              <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                <div class="alert alert-success">
                  <p><strong>Votre message a été envoyé !</strong></p>
                  <p>Merci de nous avoir écrit, <strong><?php echo $name;?></strong> ! Votre email a été envoyé avec succès et nous&rsquo;vous répondrons dans les meilleurs délais.</p>
                </div>
              <?php } ?>

              <div class="form-group">
                <label for="name">Votre nom <span class="help-required">*</span></label>
                <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
              </div>

              <div class="form-group">
                <label for="email">Votre adresse email <span class="help-required">*</span></label>
                <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
              </div>

              <div class="form-group">
                <label for="subject">Sujet <span class="help-required">*</span></label>
                <input type="text" name="subject" id="subject" value="" class="form-control required" role="input" aria-required="true" />
              </div>            

              <div class="form-group">
                <label for="message">Votre message <span class="help-required">*</span></label>
                <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true" placeholder="S'il vous plaît, indiquez autant de détails que possible. Merci"></textarea>
              </div>
              <p><span class="label label-info">Les champs marqués d'un * sont obligatoires</span></p>
              <div class="actions">
                <input type="submit" value="Envoyer votre message" name="submit" id="submitButton" class="btn btn-primary" title="Cliquez ici pour envoyer votre message!" />
                <input type="reset" value="Effacer le formulaire" class="btn btn-danger" title="Retirez toutes les données du formulaire." />
              </div>
            </fieldset>
          </form>
     
        </div>
      </div>
    </div>
  </body>
</html>
