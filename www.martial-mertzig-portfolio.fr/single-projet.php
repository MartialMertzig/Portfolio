<!-- Récupération des champs ACF dans le back-office -->
<?php
while (have_posts()) : the_post();
$project_title = get_the_title();
$project_description = get_field('description');
$project_integration_images = get_field('images_du_projet');
$project_type = get_field('type_de_projet');
$project_archives_links = get_field('liens_archives_projet');
$project_contact_email = get_field('email_contact');
$project_contact_phone = get_field('telephone_contact');
$project_contact_address = get_field('adresse_contact');
$project_types_langage_html = get_field('types_langage_html');
$project_types_langage_css = get_field('types_langage_css');
$project_types_langage_javascript = get_field('types_langage_javascript');
$project_types_langage_php = get_field('types_langage_php');
$project_types_langage_sql = get_field('types_langage_sql');
?>

<!DOCTYPE html>
<html lang="fr">
<!-- Importe le style.css et le Header.php -->
<style> <?php include ('style.css'); ?> </style>
<?php include ('header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="theme.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <!-- Section Profil -->
    <div class="dashboard-hello">
        <div class="welcome">
            <h1>Bonjour, ravi de vous revoir !</h1>
            <div class="bouton-cv">
                <p>martialmertzig@outlook.com</p>
                <p>06 56 74 16 40</p>
                <a href="<?php echo get_theme_file_uri() . '/assets/images/Curriculum_Vitæ_Martial_Mertzig_Paris.pdf'; ?> " target="_blank"> <input type="button" class="bouton" value="Consultez mon CV"> </a>
            </div>
        </div>
    </div>

        <div class="project-page">

            <div class="project-details">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/icon-projet-presentation.png'); ?>" alt="Votre Logo">
                    <h2><?php echo esc_html($project_title); ?></h2>
                </div>
                <p><?php echo esc_html($project_description); ?></p>
            </div>

            <div class="project-screenshots">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/icon-projet-img.png'); ?>" alt="Votre Logo">
                    <h2>Intégration</h2>
                </div>

                <div clas="screenshot-box" style="width: 100%; height: 450px; overflow: auto; margin-top: 28px;">
                <div class="screenshot img">
                <?php
                    $project_integration_images = get_field('images_du_projet');

                    if ($project_integration_images) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_integration_images, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_integration_images, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_integration_images) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>
                </div>
                </div>
                
            </div>

            <div class="project-tech">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/icon-projet-langage.png'); ?>" alt="Votre Logo">
                    <h2>Langages</h2>
                </div>
                <div class="Logo-outils">
                <div class="icons-langage img">

                <?php
                    $project_types_langage_html = get_field('types_langage_html');

                    if ($project_types_langage_html) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_types_langage_html, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_types_langage_html, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_types_langage_html) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>

                    <?php
                    $project_types_langage_css = get_field('types_langage_css');

                    if ($project_types_langage_css) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_types_langage_css, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_types_langage_css, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_types_langage_css) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>

                    <?php
                    $project_types_langage_javascript = get_field('types_langage_javascript');

                    if ($project_types_langage_javascript) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_types_langage_javascript, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_types_langage_javascript, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_types_langage_javascript) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>

                    <?php
                    $project_types_langage_php = get_field('types_langage_php');

                    if ($project_types_langage_html) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_types_langage_php, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_types_langage_php, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_types_langage_php) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>
                    
                    <?php
                    $project_types_langage_sql = get_field('types_langage_sql');

                    if ($project_types_langage_sql) {
                        // Récupérer l'URL, l'ID et les autres informations de l'image
                        $image_info = wp_get_attachment_image_src($project_types_langage_sql, 'full');

                        if ($image_info) {
                            $image_url = $image_info[0];
                            $image_alt = get_post_meta($project_types_langage_sql, '_wp_attachment_image_alt', true);

                            // Afficher l'image avec l'ID
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" data-image-id="' . esc_attr($project_types_langage_sql) . '">';
                        } else {
                            echo 'Erreur lors de la récupération des informations de l\'image.';
                        }
                    } else {
                        echo 'Aucune image à afficher.';
                    }
                    ?>


                    </div>
                </div>
            </div>

            <div class="project-links">
    <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri('/assets/images/icon-projet-github.png'); ?>" alt="Votre Logo">
        <h2>Archives du site</h2>
            </div>
            <?php
            $project_archives_links = get_field('liens_archives_projet');

            if ($project_archives_links) {
                // Afficher le lien vers les archives du projet
                echo '<a href="' . esc_url($project_archives_links) . '">Github</a>';
            } else {
                echo 'Aucun lien vers les archives du projet trouvé.';
            }
            
            ?>
        </div>
            <div class="dashboard-item contact-form">
                <div class="titre-du-site">
                    <img src="<?php echo get_theme_file_uri('/assets/images/icon-contact.png'); ?>" alt="Votre Logo">
                    <h2>Contact</h2>
                </div>
                <form action="#" method="post">
                    <br>
                    <p>Email : <b>martialmertzig@outlook.com</b></p>
            <p>Téléphone : <b>06 56 74 16 40</b></p>
            <p>Mobilité :<b> Île-de-France</b></p>
                </form>
            </div>
            <div class="back-to-dashboard">
            <div class="back-to-dashboard-button">
                <a href="<?php echo esc_url(home_url('/index.php')); ?>">Retour au tableau de bord</a>
            </div>
        </div>
        </div>

    </body>

    </html>

<?php endwhile;

get_footer();
?>