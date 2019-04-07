<?php 
    require_once("inc/header.php");
?>

<?php 
    require_once("inc/menu.php");
?>

<main class="main-content row p-0">

    <div class="tarifs_intro col-lg-8 pt-lg-5">
        <p>Je vous indique mes tarifs afin que vous en ayez un ordre d'idée.
        Il est toujours possible de s'adapter à votre budget.</p>
        <p>Il est important pour moi de vous proposer uniquement les services dont vous avez réellement besoin. 
        C'est pourquoi je n'insisterai jamais pour vous facturer une option dont vous ne voulez pas.</p>
        <p>Vous êtes maître de vos choix et je serai toujours transparente sur mes tarifs.</p> 
        <p>Nous pouvons également définir ensemble des modalités de forfaits mensuels selon votre trésorerie.</p>       
    </div>
   
    <div class="button_div row col-12 col-lg-8 pt-3 pt-lg-5">
        <button class="button col-8 offset-2 col-md-6 offset-md-3" id="button_vitrine">Site vitrine<i class="fas fa-angle-down"></i></button>        
    </div>
    <div id="content_vitrine" class="pt-3 col-md-8 offset-md-2 col-lg-6 offset-lg-1">
        <p class="price">
            1.000 à 2.000 €
        </p>
        <p>
            Un site vitrine présente votre activité. Il a pour vocation de donner à votre entreprise une présence 
            et une image de marque sur internet. 
        </p>
        <p>
            Les différences de tarifs s'expliquent par le nombre de pages dont vous avez besoin, et par les 
            <a href="#options" class="lien_options"> options</a> que vous choisissez de mettre en place. 
        </p>
        <button class="col-2 offset-5 button button_up" id="button_vitrine_up"><i class="fas fa-angle-double-up"></i></button>
    </div>

    <div class="button_div row col-12 col-lg-8 pt-3">
        <button class="button col-8 offset-2 col-md-6 offset-md-3" id="button_ecommerce">E-commerce<i class="fas fa-angle-down"></i></button>        
    </div>
    <div id="content_ecommerce" class="pt-3 col-md-8 offset-md-2 col-lg-6 offset-lg-1">
        <p class="price">
            2.000 à 5.000 €
        </p>
        <p>
            Un site de e-commerce vous permet de vendre vos produits en ligne. 
        </p>
        <p>
            Les différences de tarifs s'expliquent par le nombre de pages dont vous avez besoin, et par les 
            <a href="#options" class="lien_options"> options</a> que vous choisissez de mettre en place. 
        </p>
        <button class="col-2 offset-5 button button_up" id="button_ecommerce_up"><i class="fas fa-angle-double-up"></i></button>
    </div>

    <div id="options" class="pt-5 mt-lg-5 col-lg-6 offset-lg-1">
        <h4 class="options_title">Options</h4>
        <table>
            <tr class="main_table_head">
                <th class="pl-2">Option</th>
                <th class="pl-2">Tarif</th>
            </tr>
            <tr>
                <th class="secondary_table_title pt-3 pb-2">Fonctionnalités</th>
            </tr>
            <tr>
                <td>Slider</td>
                <td>125 €</td>
            </tr>
            <tr>
                <td>Blog</td>
                <td>125 €</td>
            </tr>
            <tr>
                <td>Forum</td>
                <td>375 €</td>
            </tr>
            <tr>
                <td>Version mobile</td>
                <td>425 €</td>
            </tr>
            <tr>
                <td>Prise de rendez-vous en ligne</td>
                <td>325 €</td>
            </tr>
            <tr>
                <td>Espace membre</td>
                <td>125 €</td>
            </tr>
            <tr>
                <td>Formulaire de contact</td>
                <td>75 €</td>
            </tr>
            <tr>
                <th class="secondary_table_title pt-3 pb-2">Présence digitale</th>
            </tr>
            <tr>
                <td>Référencement</td>
                <td>188 €</td>
            </tr>
            <tr>
                <td>Campagne de référencement hors-site</td>
                <td>1250 €</td>
            </tr>
            <tr>
                <td>Création de pages réseaux sociaux</td>
                <td>125 €</td>
            </tr>
            <tr>
                <td>Gestion réseaux sociaux</td>
                <td>30 € / mois</td>
            </tr>
            <tr>
                <td>Rapports et analyses du trafic</td>
                <td>30 € / mois</td>
            </tr>
            <tr>
                <th class="secondary_table_title pt-3 pb-2">Maintenance</th>
            </tr>
            <tr>
                <td>Maintenance préventive (vérifications et mises à jour)</td>
                <td>20 € / mois</td>
            </tr>
            <tr>
                <td>Maintenance corrective</td>
                <td>50 € / mois</td>
            </tr>
            <tr>
                <td>Maintenance améliorative (8h / mois)</td>
                <td>200 € / mois</td>
            </tr>
            <tr>
                <td>Correction légère</td>
                <td>75 €</td>
            </tr>
            <tr>
                <td>Correction lourde</td>
                <td>125 à 250 €</td>
            </tr>
            <tr>
                <th class="secondary_table_title pt-3 pb-2">Hébergement</th>
            </tr>
            <tr>
                <td>Nom de domaine + hébergement</td>
                <td>65 € / an</td>
            </tr>
        </table>
    </div>

    <div class="outro_txt pt-5 mt-lg-5 offset-lg-1">
        N'hésitez pas à <a href="contact.php" class="lien_contact"> me contacter</a> pour un devis gratuit en 48h.
    </div>




</main>

<?php 
    require_once("inc/footer.php");
?>
