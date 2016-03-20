<?php include_once 'inc/head-form.php';?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Contact Form Simple Bootstrap</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script src="js/bootstrap-contact.js" type="text/javascript"></script>

</head>

<body>
  <div class="container">
    
    <div class="row">
      <div class="col-md-6 col-md-push-3">
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
      </div><!-- col -->
    </div><!-- row -->

      <hr>

      <div class="footer">
        <p>Copyright &copy; <?= date ("Y"); ?> VotreSiteWeb.com</p>
      </div>

    </div> <!-- /container -->
</body>
</html>
