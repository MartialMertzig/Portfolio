<?php

get_header();

while (have_posts()) : the_post();

    // Récupération des champs ACF
    $project_title = get_the_title();
    $project_description = get_field('description');
    $project_integration_images = get_field('images_du_projet');
    $project_technologies = get_field('langages_du_projet');
    $project_archives_links = get_field('liens_archives_projet');
    $project_contact_email = get_field('email_contact');
    $project_contact_phone = get_field('telephone_contact');
    $project_contact_address = get_field('adresse_contact');
?>

    <!DOCTYPE html>
    <html lang="fr">

    <style>
        <?php include('style.css'); ?>
    </style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo esc_html($project_title); ?> - Martial Mertzig</title>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/theme.css'); ?>">
    </head>

    <body>

    <div class="date-heure">
            <h1><?php echo date('l j F Y | H:i | \P\l\a\n\è\t\e\ \T\e\r\r\e_'); ?></h1>
        </div>

        <div class="project-page">

            <div class="project-details">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2><?php echo esc_html($project_title); ?></h2>
                </div>
                <p><?php echo esc_html($project_description); ?></p>
            </div>

            <div class="project-screenshots">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Intégration</h2>
                </div>

                <div class="screenshot img">
                    <?php
                    if ($project_integration_images) {
                        foreach ($project_integration_images as $image) {
                            if (isset($image['url']) && !empty($image['url'])) {
                                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                            } else {
                                echo 'URL d\'image manquante.';
                            }
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>
                </div>
            </div>

            <div class="project-tech">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Langages</h2>
                </div>
                <div class="Logo-outils">
                    <?php
                    if ($project_technologies) {
                        foreach ($project_technologies as $technology) {
                            if (isset($technology['url']) && !empty($technology['url'])) {
                                echo '<img src="' . esc_url($technology['url']) . '" alt="' . esc_attr($technology['alt']) . '">';
                            }
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="project-links">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Archives</h2>
                </div>
                <?php
                // Vous devrez remplacer ces liens factices par les liens réels récupérés avec ACF
                echo '<a href="' . esc_url($project_archives_links['lien_projet']) . '">Lien vers le projet</a>';
                echo '<a href="' . esc_url($project_archives_links['lien_code_source']) . '">Lien vers le code source</a>';
                ?>
            </div>

            <div class="dashboard-item contact-form">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/Martial Mertzig - Portfolio - Lo-04.png'); ?>" alt="Votre Logo">
                    <h2>Réseau galactique</h2>
                </div>
                <form action="#" method="post">
                    <p>Email: <?php echo esc_html($project_contact_email); ?></p>
                    <p>Téléphone: <?php echo esc_html($project_contact_phone); ?></p>
                    <p>Adresse: <?php echo esc_html($project_contact_address); ?></p>
                </form>
            </div>

            <div class="back-to-dashboard">
                <a href="<?php echo esc_url(home_url('/')); ?>">Retour au Tableau de Bord</a>
            </div>
        </div>

    </body>

    </html>

<?php endwhile;

get_footer();
?>

<?php
/*
Template Name: Page Projet
*/
?>
