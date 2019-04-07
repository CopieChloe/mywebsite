<?php 
    require_once("inc/header.php");
?>


<?php 
    require_once("inc/menu.php");
?>

<?php

$errorAlert = '';
$errorAlertName = '';
$errorAlertMail = '';
$errorAlertMessage = '';
$red_border_name = '';
$red_border_mail = '';
$red_border_message = '';

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $messageFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "postmaster@chloe-seiler.com";
    $headers = "From: ".$messageFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;   
   

    // Check name
    if (empty($name)) {
        $errorAlert .= 'error';
        $errorAlertName .= 'Veuillez saisir votre nom.';
        $red_border_name = '1px solid darkred';
    } 
    
    // Check email 
    if (empty($messageFrom) && filter_var  ($messageFrom, FILTER_VALIDATE_EMAIL) === false) {
        $errorAlert .= 'error';
        $errorAlertMail .= 'Veuillez saisir une adresse valide.';
        $red_border_mail = '1px solid darkred';
    }
    
    //Check message
    if (!$message) {
        $errorAlert .= 'error';
        $errorAlertMessage .= 'Veuillez saisir un message.';
        $red_border_message = '1px solid darkred';
    } 

if (!$errorAlert) {
    mail($mailTo, $subject, $txt, $headers);

echo '<div class="alert alert-success">Merci pour votre message! Je vous réponds dans les 24 heures.</div>';
} else {
echo '<div class="alert alert-danger">Une erreur est survenue lors de l\'envoi de votre message. Veuillez <a href="#contact_form" class="contact_anchor">réessayer.</a></div>';
} 

} #fermeture de if (isset($_POST["submit"]))

?>

<main class="main-content col-lg-8 ml-lg-0 mt-lg-5 p-0">  
    
  <div class="row mt-lg-5">

        <div class="contact_link p-0 col-12 col-lg-4">
            <a class="contactcalltoaction row" href="tel:+33768423807">
                <i class="col-2 fas fa-mobile-alt"></i> 
                <div class="contact_text col-10"> +337.68.42.38.07</div>
            </a>
        </div>

        <div class="contact_link p-0 col-12 col-lg-4">
            <a class="contactcalltoaction row" href="mailto:contact@chloe-seiler.com">
                <i class="col-2 far fa-envelope"></i> 
                <div class="contact_text col-10"> contact@chloe-seiler.com</div>
            </a>
        </div>

        <div class="contact_link p-0 col-12 col-lg-4">
            <a class="contactcalltoaction row" href="https://www.linkedin.com/in/chloe-seiler/">
                <i class="col-2 fab fa-linkedin"></i> 
                <div class="contact_text col-10"> LinkedIn</div>
            </a>
        </div>   

        <div class="adresse_physique">
            <p>14, rue Mozart</p>
            <p>57970 Yutz, Moselle</p>
        </div>

        <div class="iframe_container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.5344607749694!2d6.194499815692248!3d49.36095927933983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479524b4c1b77085%3A0x476f0bef109d5a9d!2s14+Rue+Mozart%2C+57970+Yutz!5e0!3m2!1sfr!2sfr!4v1553693922959" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
       
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact_form container-fluid mt-5 mb-5" id="contact_form">
            <h5 class="titre_formulaire">Formulaire de contact</h4>

            <div class="input_div col-12">                
                <input class="input col-10" type="text" name="name" style="border:<?php echo $red_border_name;?>;">
                <label class="row pl-3" for="name">Nom</label>               
            </div>

            <div class="input_alert" style="color: red; max-height: 3vh; text-align: start; margin-bottom: 3vh;"><?php echo $errorAlertName;?></div>

            <div class="input_div col-12">
                <input id="email" class="input col-10" type="email" name="email" style="border:<?php echo $red_border_mail;?>;">
                <label class="row pl-3" for="email">Email</label>
            </div>

            <div class="input_alert" style="color: red; max-height: 3vh; text-align: start; margin-bottom: 3vh;"><?php echo $errorAlertMail;?></div>


            <div class="input_div col-12">
                <input id="subject" class="input col-10" type="text" name="subject">
                <label class="row pl-3" for="subject">Objet</label>                
            </div>

            <div class="input_alert" style="color: red; max-height: 3vh; text-align: start; margin-bottom: 3vh;"></div>

            <div class="input_div col-12">           
                <textarea id="message" class="input col-10" name="message" style="border:<?php echo $red_border_message;?>;" placeholder="Votre message..."></textarea>                
            </div>

            

            <div class="input_alert" style="color: red; max-height: 3vh; text-align: start; margin-bottom: 3vh;"><?php echo $errorAlertMessage;?></div>

            <div class="input_div col-12 button_div">
                <button class="btn" type="submit" name="submit" id="submit_btn">ENVOYER</button>    
            </div>      
         </form>

         <div class="col-12 div_carte_visite pt-md-5">
             <a href="/img/carte_de_visite.png" download class="link_carte_visite">
                <h5 class="texte_carte_visite" style="font-family: 'Montserrat';">Télécharger la carte de visite</h5>
                <img class="image_carte_visite" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/carte_de_visite.png" alt="carte de visite à télécharger">
            </a>             
         </div>
       
    </div>







</main>

<?php 
    require_once("inc/footer.php");
?>
