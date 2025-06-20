<?php
/* Template Name: Mentions Légales */
get_header();
?>

<main class="mentions-legales" style="padding: 2rem; max-width: 800px; margin: auto;">
  <h1>Mentions légales</h1>

  <h2>Éditeur du site</h2>
  <p>
    Ce site est édité par : Martial Mertzig<br>
    Contact : <a href="mailto:martialmertzig@outlook.com">martialmertzig@outlook.com</a><br><br>
    Site personnel à but non commercial.
  </p>

  <h2>Hébergement</h2>
  <p>
    Hébergeur : IONOS SARL, 7 place de la Gare, BP 70109 57201 Sarreguemines Cedex<br>
    <a href="https://www.ionos.fr" target="_blank" rel="noopener">www.ionos.fr</a>
  </p>

  <h2>Propriété intellectuelle</h2>
  <p>
    L'ensemble des contenus (textes, images, logo) présents sur ce site sont la propriété de Martial Mertzig, sauf mention contraire.
    Toute reproduction, représentation, modification, publication ou adaptation de tout ou partie des éléments  du site est interdite sans
    l'autorisation écrite préalable de Martial Mertzig.
  </p>

  <h2>Responsabilité</h2>
  <p>
    L’éditeur du site ne pourra être tenu responsable des dommages directs ou indirects causés au matériel de l’utilisateur lors de l’accès au site.
    Des liens externes peuvent être présents sur ce site, l'éditeur ne peut être tenu responsable de leur contenu.
  </p>

  <h2>Protection des données personnelles</h2>
  <p>
    Ce site ne collecte aucune donnée personnelle à des fins commerciales. Pour toute demande concernant vos données,
    vous pouvez écrire à : <a href="mailto:martialmertzig@outlook.com">martialmertzig@outlook.com</a>
  </p>
</main>

<div class="back-to-dashboard-button" style="margin: 2rem auto; width: fit-content;">
    <a href="<?php echo esc_url(home_url('/')); ?>">Retour à l’accueil →</a>
</div>

<?php get_footer(); ?>
